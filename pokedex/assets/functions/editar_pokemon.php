<?php

    require_once("./db_functions.php");

    if(isset($_POST) && isset($_POST['identificador']) && isset($_POST['nombre']) && isset($_POST['tipo'])
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

        $query="UPDATE pokemon SET identificador=$identificador,
        nombre='$nombre',tipo=$tipo,descripcion='$descripcion',
        vida=$vida,defensa=$defensa,peso=$peso,velocidad=$velocidad,
        ataque=$ataque WHERE identificador = $identificador";

        if(ejecutar_query($query)){

            if(isset($_FILES['img']) && $_FILES["img"]["error"] === 0){
                $pokemon=ejecutar_query("SELECT id,img FROM pokemon WHERE identificador = $identificador",true)[0];
                $img=$pokemon->img;
                $id=$pokemon->id;
                if($_FILES["img"]["error"] > 0){
                    session_start();
                    $_SESSION['error']=("Error: " . $_FILES["img"]["error"] );
                    header("Location: ../../vistas/error.php");
                    exit();
                }else{
                    unlink("../../uploads/$img");
                    $extension = pathinfo($_FILES["img"]["name"], PATHINFO_EXTENSION);
                    $destino = "../../uploads/" . $id . "." . $extension;
                    move_uploaded_file($_FILES["img"]["tmp_name"],$destino); 
                    $img="$id.$extension";
                    ejecutar_query("UPDATE pokemon SET img='$img' WHERE id=$id ");
                    header("Location: ../../vistas/busqueda.php");
                    exit();
                }
            }else{
                header("Location: ../../vistas/busqueda.php");
                exit();
            }

        }else{
            session_start();
            $_SESSION['error']=("Error al editar pokémon");
            header("Location: ../../vistas/error.php");
            exit();
        }
    }else{
        session_start();
        $_SESSION['error']=("No hay datos suficientes para editar pokémon");
        header("Location: ../../vistas/error.php");
        exit();
    }
    
?>


