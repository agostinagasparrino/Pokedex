<?php
    session_start();
    $error = "";
    if(!isset($_SESSION['error'])){
        header("Location: busqueda.php");
        exit();
    }else{
        $error = $_SESSION['error'];
        $_SESSION['error']=null;
    }
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
                <img src="../assets/img/pikachu_error.png" alt="" class="w-100">
            </div>
            <div class="col-6">
                <h3>Upss! Parece que hubo un error</h3>
                <h4 class="text-danger"><?php echo $error; ?></h4>
                <div class="mt-3 eliminar-desktop">
                    <a href="busqueda.php" class="btn btn-warning me-3">Volver a Pokedex</a>
                </div>
            </div>
            <div class="col-12 mt-5 eliminar-mobile">
                <div class="d-flex justify-content-center">
                    <a href="busqueda.php" class="btn btn-warning me-3">Volver a Pokedex</a>
                </div>
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