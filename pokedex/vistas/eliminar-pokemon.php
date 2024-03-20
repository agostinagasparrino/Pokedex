<?php

    require_once("../assets/functions/admin_guard.php");

    if(!isset($_GET['identificador'])){
        header("Location: busqueda.php");
        exit();
    }else $id = $_GET['identificador'];
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Pokémon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>

    <div class="container pt-5 mt-5">
        <div class="row">
            <div class="col-6">
                <img src="../assets/img/pikachu_triste.png" alt="" class="w-100">
            </div>
            <div class="col-6">
                <h3>¿Estas seguro de querer eliminar este Pokémon?</h3>
                <h4 class="text-danger">Esta acción es irreversible</h4>
                <form action="../assets/functions/delete_pokemon.php" method="post" class="mt-5 eliminar-desktop">
                    <input type="hidden" name="identificador" value="<?php echo $id;?>" >
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary me-3">Confirmar</button>
                        <a href="busqueda.php" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>
            <div class="col-12 mt-5 eliminar-mobile">
                <form action="../assets/functions/delete_pokemon.php" method="post">
                    <input type="hidden" name="identificador" value="<?php echo $id;?>" >
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary me-3">Confirmar</button>
                        <a href="busqueda.php" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>