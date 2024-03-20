<?php
require_once("../assets/functions/obtenerDetalle.php");
require_once("../assets/functions/auth.php");
        
/* echo '<div>';
    echo '<div>';
        echo "<h3>$_pokemon->nombre</h3>";
        echo '<img src="../uploads/<?php echo $_pokemon->img; ?>" alt="<?php echo $_pokemon->nombre; ?>" width="50"
height="50"/>';
echo '</div>';
echo '<div>';
    echo "<h3>$_pokemon->tipo</h3>";
    echo '</div>';
echo '<div>';
    echo "<p>$_pokemon->descripcion</p>";
    echo '</div>';
echo '<div>';
    echo "<h2>Vida: </h2>";
    echo "<meter min='0' max='200' value='$_pokemon->vida' low='40' high='150' optimun='200'></meter>";
    echo "<h2>Defensa: </h2>";
    echo "<meter min='0' max='200' value='$_pokemon->defensa' low='40' high='150' optimun='200'></meter>";
    echo "<h2>Ataque: </h2>";
    echo "<meter min='0' max='200' value='$_pokemon->ataque' low='40' high='150' optimun='200'></meter>";
    echo "<h2>Peso: </h2>";
    echo "<meter min='0' max='200' value='$_pokemon->peso' low='40' high='150' optimun='200'></meter>";
    echo "<h2>Velocidad: </h2>";
    echo "<meter min='0' max='200' value='$_pokemon->velocidad' low='40' high='150' optimun='200'></meter>";
    echo '</div>';
echo '</div>'; */
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokémon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body class="body-detail bg-blur">
    <header>
        <nav class="navbar navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand poke-text" href="busqueda.php"><img src="../assets\img\logo\logo.png" width="50" height="50">
                    Pokedex</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                    aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel"> <a
                                class="navbar-brand poke-text"><img src="../assets\img\logo\logo.png" width="50"
                                    height="50">
                                Pokedex</a></h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <div class="row botonera-sidebar">
                            <div class="col-md-6">
                                <a class="btn btn-warning mb-3 w-100" aria-current="page" href="busqueda.php">Volver a
                                    Pokedex</a>
                            </div>
                            <?php 
                                if($logued){
                                    echo'
                                    <div class="col-md-6">
                                        <a class="btn btn-primary mb-3 w-100" aria-current="page" href="crear-pokemon.php">Crear Pokémon</a>
                                    </div>
                                    <div class="col-md-6">
                                        <form  action="../assets/functions/logout.php" method="post">
                                            <button class="btn btn-danger w-100" type="submit">Salir de Pokedex</button>
                                        </form>
                                    </div>
                                    ';
                                }else{
                                    echo'
                                    <div class="col-md-6">
                                        <a class="btn btn-primary mb-3 w-100" aria-current="page" href="login.php">Iniciar Sesión</a>
                                    </div>
                                    ';
                                }
                            ?>
                        </div>
                        <div class="pokemons-nav">
                            <img src="../assets/img/pikachu2.gif" alt="" width="75">
                            <img src="../assets/img/squirtle.gif" alt="" width="50">
                            <img src="../assets/img/bulbasaur.gif" alt="" width="50">
                            <img src="../assets/img/charmander.gif" alt="" width="100">
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="container my-5 pt-5">
        <div class="card">
            <div class="row">
                <div class="col-lg-6">
                    <span class="pokemon-id"><?php echo $_pokemon->identificador; ?></span>
                    <div class="d-flex justify-content-center">
                        <img src="../uploads/<?php echo $_pokemon->img; ?>" class="card-img-top pokemon-img"
                            alt="<?php echo $_pokemon->nombre; ?>">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card-body border-top">
                        <h1 class="card-title"><?php echo $_pokemon->nombre; ?></h1>
                        <div class="row">
                            <div class="col-3">
                                <img class="w-100" src="../assets/img/vida.png">
                                <p class="text-center"><?php echo $_pokemon->vida; ?></p>
                            </div>
                            <div class="col-3">
                                <img class="w-100" src="../assets/img/tipo/<?php echo $_pokemon->tipo; ?>.png">
                                <p class="text-center">Tipo </p>
                            </div>
                            <div class="col-3">
                                <img class="w-100" src="../assets/img/ataque.png">
                                <p class="text-center"><?php echo $_pokemon->ataque; ?></p>
                            </div>
                            <div class="col-3">
                                <img class="w-100" src="../assets/img/velocidad.png">
                                <p class="text-center"><?php echo $_pokemon->velocidad; ?></p>
                            </div>
                            <p><?php echo$_pokemon->descripcion?></p>
                            <h4 class="border-top pt-3">Sobre el tipo</h4>
                            <p><?php echo$_pokemon->tipoDesc; ?></p>
                        </div>
                    </div>
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