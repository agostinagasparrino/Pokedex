<?php

require_once("./db_functions.php");

if (isset($_POST['email']) && isset($_POST['password'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];


    $query = "SELECT id FROM usuario WHERE email LIKE '$email' AND  password LIKE '$password'";


    if ($usuario = ejecutar_query($query, true)) {
      session_start();
      $_SESSION['id'] = $usuario[0]->id;
      header("Location: ../../vistas/busqueda.php");
      exit();
    } else{
        header("Location: ../../index.php");
        exit();
    }
} else {
    echo "no data";
}

?>