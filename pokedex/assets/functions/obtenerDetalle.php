<?php
    require("db_functions.php");

 
    if(isset($_GET['identificador'])){
        $identificador = $_GET['identificador'];
    
        $query = "SELECT p.*, tp.descripcion as tipoDesc FROM pokemon as p JOIN tipos_pokemon as tp ON p.tipo=tp.id WHERE identificador = $identificador";
        
        if($pokemon = ejecutar_query($query, true)){
           $_pokemon = $pokemon[0];
        }
            
    }