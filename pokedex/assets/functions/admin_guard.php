<?php

    require_once("db_functions.php");    
    session_start();

    if(isset( $_SESSION['id'] )){
        $id = $_SESSION['id'];
        $usuario = ejecutar_query("SELECT * FROM usuario WHERE id = $id",true);
        if(count($usuario)==0){
            $_SESSION['id']=null;
            header("Location: ../index.php");
            exit();
        }    
    }else{
        header("Location: ../index.php");
        exit();
    }


?>