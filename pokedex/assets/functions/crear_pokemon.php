<?php

    require_once("./db_functions.php");

    if(isset($_POST) && isset($_FILES['img']) && isset($_POST['identificador']) && isset($_POST['nombre']) && isset($_POST['tipo'])
        && isset($_POST['descripcion']) && isset($_POST['vida']) && isset($_POST['defensa']) && isset($_POST['peso'])
        && isset($_POST['velocidad']) && isset($_POST['ataque']) ){
        $identificador=$_POST['identificador'];
        $nombre=$_POST['nombre'];
        $tipo=$_POST['tipo'];
        $descripcion=$_POST['descripcion'];
        $vida=$_POST['vida'];
        $defensa=$_POST['defensa'];
        $peso=$_POST['peso'];
        $velocidad=$_POST['velocidad'];
        $ataque=$_POST['ataque'];

        $query="INSERT INTO pokemon(identificador, nombre, tipo, descripcion, vida, defensa, peso, velocidad, ataque) VALUES
        ($identificador,'$nombre',$tipo,'$descripcion',$vida,$defensa,$peso,$velocidad,$ataque)";


        if($id=ejecutar_query($query,false,true)){
            if($_FILES["img"]["error"] > 0){
                session_start();
                $_SESSION['error']=("Error: " . $_FILES["img"]["error"] );
                header("Location: ../../vistas/error.php");
                exit();
            }else{
                $extension = pathinfo($_FILES["img"]["name"], PATHINFO_EXTENSION);
                $destino = "../../uploads/" . $id . "." . $extension;
                move_uploaded_file($_FILES["img"]["tmp_name"],$destino); 
                $img="$id.$extension";
                ejecutar_query("UPDATE pokemon SET img='$img' WHERE id=$id ");
                header("Location: ../../vistas/busqueda.php");
                exit();
            }
        }else{
            session_start();
            $_SESSION['error']=("Error al crear pokémon");
            header("Location: ../../vistas/error.php");
            exit();
        }
    }else{
        session_start();
        $_SESSION['error']=("No hay datos suficientes para crear pokémon");
        header("Location: ../../vistas/error.php");
        exit();
    }
    
?>


