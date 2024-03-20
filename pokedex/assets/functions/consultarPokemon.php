<?php
    require_once("db_functions.php");

    $pokemons = array();
    $no_encontrado = false;
    $where = "";

    if(isset($_POST['buscar']) && $_POST['buscar']!= ""){
        $buscar = $_POST['buscar'];
        $where = " AND p.nombre LIKE '%$buscar%' OR tp.nombre LIKE '%$buscar%' OR p.identificador LIKE '%$buscar%'";
    }
    
    if($_pokemons = ejecutar_query("SELECT p.*, tp.nombre as tipodesc FROM pokemon as p JOIN tipos_pokemon as tp on p.tipo = tp.id WHERE 1 $where",true)){
        $pokemons= $_pokemons;
    }else{
        $pokemons=ejecutar_query("SELECT p.*, tp.nombre as tipodesc FROM pokemon as p JOIN tipos_pokemon as tp on p.tipo = tp.id WHERE 1",true);
        $no_encontrado = true;
    }

?>
