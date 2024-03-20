<?php

require_once("./db_functions.php");

if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['email']) && isset($_POST['password'])) {

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    




    $query = "INSERT INTO usuario(nombre, apellido, email, password ) VALUES ('$nombre','$apellido','$email','$password')";


    if ($usuario = ejecutar_query($query,false,true)) {
        session_start();
        $_SESSION['id'] = $usuario;
        header("Location: ../../vistas/busqueda.php");
        exit();
    } else {
        header("Location: ../../vistas/registro.php");
        exit();
    }
} else {
    echo "no data";
}

?>