<?php
    require("db_functions.php");

    if(isset($_POST['identificador'])){
        $identificador = $_POST['identificador'];
        $_img=ejecutar_query("SELECT img FROM pokemon WHERE identificador = $identificador",true);
        if($_img){
            $img=$_img[0]->img;
            if(ejecutar_query("DELETE FROM pokemon WHERE identificador = $identificador")){
                unlink("../../uploads/$img");
                header("Location: ../../vistas/busqueda.php");
                exit();
            }else{
                session_start();
                $_SESSION['error']=("Error al eliminar pokémon");
                header("Location: ../../vistas/error.php");
                exit();
            }
        }else{
            session_start();
            $_SESSION['error']=("Error al eliminar pokémon");
            header("Location: ../../vistas/error.php");
            exit();
       }
    }else{
        session_start();
        $_SESSION['error']=("Error no existen datos del pokémon");
        header("Location: ../../vistas/error.php");
        exit();
    }
  
?>