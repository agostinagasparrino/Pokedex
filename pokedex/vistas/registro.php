<?php

    require_once("../assets/functions/guard.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        body {
            margin: 0;
            /* Elimina el margen del cuerpo */
            padding: 0;
            /* Elimina el relleno del cuerpo */
        }

        main {
            background-color: rgba(0, 0, 0, 0.6);
            /* Color de fondo con transparencia */
            min-height: 100vh;
            /* Altura mínima igual a la altura de la ventana */
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .card {
            border: none;
            border-radius: 1rem;
            background-color: rgba(255, 255, 255, 0.5);
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
            position: relative;
        }

        .card-body {
            margin: 10px;
            /* Elimina el margen del card-body */
        }

        .corner-image {
            position: absolute;
            bottom: 0;
            right: 0;
            max-width: 100px;
            /* Ajusta el tamaño de la imagen según tus preferencias */
        }
    </style>
</head>

<body class="bg-pokemon">

    <main>
        <div class="container mt-1">
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-header text-center">
                            <span class="h2 fw-bold mb-0 "> <img src="../assets/img/pokebolaLogin.png" width="40"
                                    class="mb-2"> REGISTRO</span>
                        </div>
                        <div class="card-body">
                            <form action="../assets/functions/registro.php" method="POST">
                                <div class="mb-2">
                                    <label for="nombre" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                                </div>
                                <div class="mb-3">
                                    <label for="apellido" class="form-label">Apellido</label>
                                    <input type="text" class="form-control" id="apellido" name="apellido" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Contraseña</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>


                                <p class="mb-3 pb-lg-1" style="color: black;">¿Tienes cuenta ya? <a href="login.php"
                                        style="color: red;">Inicia sesión</a></p>
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary btn-danger">Registrarse</button>
                                </div>
                                <img src="../assets/img/pikachu.gif" alt="" class="corner-image">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>