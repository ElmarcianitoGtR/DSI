<?php

function conectar(){
    $servidor="127.0.0.1";
    $usuario="root";
    $pwd="";
    $db="ControlVehicular2026";

    $con =mysqli_connect($servidor, $usuario, $pwd, $db);

    if (!$con) {
        echo "Error en la conexión: " . mysqli_connect_error();
        return null;
    }
    echo "¡Conexión exitosa a la base de datos!";
    return $con;
} 


function ejecutar($con, $sql, $params = []){
    $resultado=mysqli_query($con, $sql);

    if(!$resultado){
        echo "Error en la consulta: " . mysqli_error($con);
        return null;
    }

    return $resultado;
}

/*
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
*/

function cerrar($con){
    if ($con) {
        mysqli_close($con);
    }
}

?>