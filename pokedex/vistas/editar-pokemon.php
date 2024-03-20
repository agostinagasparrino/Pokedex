<?php

    require_once("../assets/functions/db_functions.php");
    require_once("../assets/functions/admin_guard.php");

    $tipos=ejecutar_query("SELECT * FROM tipos_pokemon",true);

    if(isset($_GET['identificador'])){
        $identificador=$_GET['identificador'];
        if($_pokemon=ejecutar_query("SELECT p.*, tp.nombre as tipoNombre FROM pokemon p JOIN tipos_pokemon as tp ON p.tipo=tp.id WHERE p.identificador=$identificador",true)){
            $pokemon = $_pokemon[0];
        }else{
            header("Location: busqueda.php");
            exit();
        }
    }else{
        header("Location: busqueda.php");
        exit();
    }

    
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Pokémon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body class="bg-pokemon">
    <div class="bg-blur">
        <div class="container pt-5 ">
            <form class="form-container" action="../assets/functions/editar_pokemon.php" method="post"
                enctype="multipart/form-data">
                <h3 class="text-center">Editar Pokémon</h3>
                <div class="d-flex justify-content-center">
                    <img src="../uploads/<?php echo $pokemon->img?>" width="100" alt="">
                </div>
                <div class="row">
                    <div class="mb-3 col-sm-6 col-lg-6">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" required class="form-control" id="nombre"
                            placeholder="Ingrese el nombre de su pokemon" name="nombre"
                            value=<?php echo $pokemon->nombre; ?>>
                    </div>
                    <div class="mb-3 col-sm-6 col-lg-6">
                        <label for="tipo" class="form-label">Tipo</label>
                        <select class="form-select" aria-label="Default select example" name="tipo" required>
                            <?php 
                            foreach ($tipos as $tipo ) {
                                $selected = ($tipo->id == $pokemon->tipo) ? "selected" : "";
                                echo "<option value='$tipo->id' $selected >$tipo->nombre</option>";
                            }
                        ?>
                        </select>
                    </div>
                    <div class="mb-3 col-sm-6 col-lg-6">
                        <label for="identificador" class="form-label">Identificador</label>
                        <input type="number" required class="form-control" id="identificador"
                            placeholder="Ingrese el identificador de su pokemon" name="identificador"
                            value=<?php echo $pokemon->identificador; ?>>
                    </div>
                    <div class="mb-3 col-sm-6 col-lg-6">
                        <label class="form-label" for="descripcion">Descripcion</label>
                        <textarea class="form-control" id="descripcion" name="descripcion"
                            style="height: 100px"><?php echo htmlspecialchars($pokemon->descripcion); ?></textarea>
    
                    </div>
                    <div class="mb-3 col-sm-6 col-lg-6">
                        <label for="vida" class="form-label">Vida</label>
                        <input type="number" required class="form-control" id="vida"
                            placeholder="Ingrese el nivel de vida de su pokemon" name="vida"
                            value=<?php echo $pokemon->vida; ?>>
                    </div>
                    <div class="mb-3 col-sm-6 col-lg-6">
                        <label for="defensa" class="form-label">Defensa</label>
                        <input type="number" required class="form-control" id="defensa"
                            placeholder="Ingrese el nivel de defensa de su pokemon" name="defensa"
                            value=<?php echo $pokemon->defensa; ?>>
                    </div>
                    <div class="mb-3 col-sm-6 col-lg-6">
                        <label for="peso" class="form-label">Peso</label>
                        <input type="number" required class="form-control" id="peso"
                            placeholder="Ingrese el peso de su pokemon" name="peso" value=<?php echo $pokemon->peso; ?>>
                    </div>
                    <div class="mb-3 col-sm-6 col-lg-6">
                        <label for="velocidad" class="form-label">Velocidad</label>
                        <input type="number" required class="form-control" id="velocidad"
                            placeholder="Ingrese la velocidad de su pokemon" name="velocidad"
                            value=<?php echo $pokemon->velocidad; ?>>
                    </div>
                    <div class="mb-3 col-sm-6 col-lg-6">
                        <label for="ataque" class="form-label">Ataque</label>
                        <input type="number" required class="form-control" id="ataque"
                            placeholder="Ingrese el nivel de ataque de su pokemon" name="ataque"
                            value=<?php echo $pokemon->ataque; ?>>
                    </div>
                    <div class="mb-3 col-sm-6 col-lg-6">
                        <label for="formFile" class="form-label">Foto de Pokemon</label>
                        <input class="form-control" type="file" id="formFile" name="img">
                    </div>
                    <div class="d-flex justify-content-between space-between">
                        <img src="../assets/img/pikachu2.gif" alt="" width="100" class="pokemonGif">
                        <img src="../assets/img/squirtle.gif" alt="" width="100" class="pokemonGif">
                        <div class="mb-3 col-12 col-sm-4 col-lg-4 pt-3">
                            <button type="submit" class="btn btn-primary w-100">Editar</button>
                            <a href="busqueda.php" class="btn btn-danger w-100 mt-3">Cancelar</a>
                        </div>
                        <img src="../assets/img/bulbasaur.gif" alt="" width="100" class="pokemonGif">
                        <img src="../assets/img/charmander.gif" alt="" width="100" class="pokemonGif">
                    </div>
                </div>
            </form>
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