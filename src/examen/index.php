<?php
function cssv($params = []){
$carpeta = __DIR__ . "/registro/";
$archivo = $carpeta . "multas.csv";

if(!file_exists($carpeta)){
    mkdir($carpeta, 0777, true);
}

$fecha = date("Y-m-d");
$hora = date("H:i:s");

$data = json_encode($datax);
$datos = [$data];
$fp = fopen($archivo, 'a');
fputcsv($fp, $datos);
fclose($fp);
}