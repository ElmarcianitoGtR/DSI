<?php
require_once '../assets/controlador.php';

$IdAgente = $_GET['idAgente'];
$Nombre = $_GET['nombre'];
$Asignacion = $_GET['asignacion'];
print('ID Agente ='.$IdAgente."<br>");
print('Nombre ='.$Nombre."<br>");
print('Asignación ='.$Asignacion."<br>");

$sql = "INSERT INTO agentes (nombre, asignacion) VALUES (?, ?);";
$data = [$Nombre, $Asignacion];
$registro = ejecutar($sql, $data);

if ($registro) {
    echo "¡Agente registrado con éxito!";
} else {
    echo "Error: No se pudo registrar el agente.";
}