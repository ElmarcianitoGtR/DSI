<?php

function conectar(){
    $host = "db";
    $db   = "ControlVehicular2026";
    $user = "root";
    $pass = "root";

    $conn = mysqli_connect($host, $user, $pass, $db);

    if (!$conn) {
        echo "Error en la conexión: " . mysqli_connect_error();
        return null;
    }
    echo "¡Conexión exitosa a la base de datos!";
    return $conn;
} 

function cerrar($conn){
    if ($conn) {
        mysqli_close($conn);
    }
}  
function ejecutar($sql, $params = []){
    $con = conectar();
    if (!$con) return null;

    $resultado = mysqli_execute_query($con, $sql, $params);

    return $resultado;
}

function procesar($sql, $params = []){
    $resultado = ejecutar($sql, $params);
    
    if (!$resultado || is_bool($resultado)) return [];

    return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
}
