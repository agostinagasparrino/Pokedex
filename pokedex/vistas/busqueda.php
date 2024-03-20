<?php

require_once '../assets/functions/db_functions.php';
require_once '../assets/functions/consultarPokemon.php';
require_once '../assets/functions/auth.php';


?>

<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>POKEDEX</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="../assets/css/style.css">
    </head>
    
    <body class="body-busqueda">
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
                            <img src="../assets/img/pikachu2.gif" alt="" width="75" >
                            <img src="../assets/img/squirtle.gif" alt="" width="50" >
                            <img src="../assets/img/bulbasaur.gif" alt="" width="50" >
                            <img src="../assets/img/charmander.gif" alt="" width="100" >
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-md-12 py-3">
                <form class="d-flex col" action="" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Ingrese nombre, tipo o número de Pokémon"
                            aria-label="Ingrese nombre, tipo o número de Pokémon" name="buscar"
                            aria-describedby="button-addon2">
                        <button class="btn btn-warning" type="submit" id="button-addon2">¿Quién es este
                            Pokémon?</button>
                    </div>
                </form>
            </div>

            <?php
            if($no_encontrado){
                echo'
                <div class="alert alert-danger" role="alert">
                    Pokemon no encontrado
                </div>                
                ';
            }
            if($logued){
                foreach ($pokemons as $pokemon) {
                    echo '<div class="col-sm-3 col-md-6 col-lg-3 mb-3">
                    <div class="card">
                    <span class="pokemon-id">' . $pokemon->identificador . '</span>
                    <div class="d-flex justify-content-center">
                    <img src="../uploads/' . $pokemon->img . '" class="card-img-top pokemon-img" alt="' . $pokemon->nombre . '">
                    </div>
                    <div class="card-body border-top">
                      <h5 class="card-title"><a class="text-black" href="detail.php?identificador='. $pokemon->identificador .'" >' . $pokemon->nombre . '</a></h5>
                      <div class="row" >
                      <div class="col-3"> 
                      <img class="w-100" src="../assets/img/vida.png">
                      <p class="text-center" >'. $pokemon->vida .'</p>
                      </div>
                      <div class="col-3"> 
                      <img class="w-100" src="../assets/img/tipo/' . $pokemon->tipo . '.png">
                        <p class="text-center" >Tipo </p>
                      </div>
                      <div class="col-3">
                      <img class="w-100" src="../assets/img/ataque.png">
                      <p class="text-center" >'. $pokemon->ataque .'</p>
                      </div>
                      <div class="col-3"> 
                      <img class="w-100" src="../assets/img/velocidad.png">
                      <p class="text-center" >'. $pokemon->velocidad .'</p>
                      </div>
                      
                      </div>
                      <div class="d-flex justify-content-center">
                        <a class="btn btn-primary me-3" href="editar-pokemon.php?identificador='. $pokemon->identificador .'" >Editar</a>
                        <a class="btn btn-danger me-3" href="eliminar-pokemon.php?identificador='. $pokemon->identificador .'" >Eliminar</a>
                      </div>
                    </div>
                  </div>
                    </div>';
                }
            }else{
                foreach ($pokemons as $pokemon) {
                    echo '<div class="col-sm-3 col-md-6 col-lg-3 mb-3">
                    <div class="card">
                    <span class="pokemon-id">' . $pokemon->identificador . '</span>
                    <div class="d-flex justify-content-center">
                    <img src="../uploads/' . $pokemon->img . '" class="card-img-top pokemon-img" alt="' . $pokemon->nombre . '">
                    </div>
                    <div class="card-body border-top">
                      <h5 class="card-title"><a class="text-black" href="detail.php?identificador='. $pokemon->identificador .'" >' . $pokemon->nombre . '</a></h5>
                      <div class="row" >
                      <div class="col-3"> 
                      <img class="w-100" src="../assets/img/vida.png">
                      <p class="text-center" >'. $pokemon->vida .'</p>
                      </div>
                      <div class="col-3"> 
                      <img class="w-100" src="../assets/img/tipo/' . $pokemon->tipo . '.png">
                        <p class="text-center" >Tipo </p>
                      </div>
                      <div class="col-3">
                      <img class="w-100" src="../assets/img/ataque.png">
                      <p class="text-center" >'. $pokemon->ataque .'</p>
                      </div>
                      <div class="col-3"> 
                      <img class="w-100" src="../assets/img/velocidad.png">
                      <p class="text-center" >'. $pokemon->velocidad .'</p>
                      </div>
                      
                      </div>
                    </div>
                  </div>
                    </div>';
                }
            }

            ?>
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