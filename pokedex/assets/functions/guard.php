<?php

    require_once("db_functions.php");    
    session_start();

    if( isset( $_SESSION['id'] ) && $_SESSION['id'] != "" && $_SESSION['id'] != null ){
        $id = $_SESSION['id'];
        if($usuario = ejecutar_query("SELECT * FROM usuario WHERE id = $id",true)){
            if(count($usuario)>0){
                header("Location: ../vistas/busqueda.php");
                exit();
            }
        }
    }


?>