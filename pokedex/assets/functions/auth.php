<?php

    require_once("db_functions.php");    
    session_start();

    $logued = false;

    if(isset( $_SESSION['id'] )){
        $id = $_SESSION['id'];
        $usuario = ejecutar_query("SELECT * FROM usuario WHERE id = $id",true);
        if(count($usuario)==0) $_SESSION['id']=null;
        else $logued = true;
    }

?>

