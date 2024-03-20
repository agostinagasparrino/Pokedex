<?php


function conectar_db(){
    $config = parse_ini_file('config.ini');
    $host = $config['HOST'];
    $username = $config['USER'];
    $password = $config['PASS'];
    $dbname = $config['DB_NAME'];
    $conexionDB = mysqli_connect($host, $username, $password, $dbname) or die("error en conexion");
    return $conexionDB;
}

function ejecutar_query( $query, $object = false, $insert = false ){
    $conexionDB = conectar_db();
    if ( $result = mysqli_query( $conexionDB, $query ) ){
        $insertId = mysqli_insert_id($conexionDB);
        mysqli_close($conexionDB);
        if ( $insert ) return $insertId;
        if ( $object ){
            $data = array();
            WHILE ( $fila = mysqli_fetch_object( $result ) ){
                array_push( $data, $fila );
            }
            return $data;
        }
        return $result;
    }
    mysqli_close($conexionDB);      
    return false;
}

function convert_object( $array ){
    $response = new stdclass();
    if ( $array ) foreach( $array as $key => $value ){
        if ( is_array($value) ) $response->$key = convert_object( $value );
        else $response->$key = addslashes($value);
    }
    return $response;
}

?>
