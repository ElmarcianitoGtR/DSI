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
    registrar($sql,$params,$resultado);
    return $resultado;
}

function registrar ($sql,$params,$res){

    $carpeta = __DIR__ . "/record/";
    $archivo = $carpeta . "historial.csv";

    if(!file_exists($carpeta)){
        mkdir($carpeta, 0777, true);
    }

    $fecha = date("Y-m-d");
    $hora = date("H:i:s");

    $sql_limpio = str_replace(["\r", "\n"], " ", $sql);
    $data = json_encode($params);
    $datos = [$fecha, $hora, $sql_limpio, $data, $res];
    $fp = fopen($archivo, 'a');
    fputcsv($fp, $datos);
    fclose($fp);
}

function procesar($sql, $params = []){
    $resultado = ejecutar($sql, $params);
    
    if (!$resultado || is_bool($resultado)) return [];

    return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
}
