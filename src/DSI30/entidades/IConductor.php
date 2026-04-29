<?php

require_once '../assets/controlador.php';
$Idconductor = $_POST['idConductor'];
$Nombre = $_POST['nombre'];
$NumEmergenica = $_POST['numEmergenica'];
$IdDomicilio = $_POST['idDomicilio'];
print('ID Conductor ='.$Idconductor."<br>");
print('Nombre ='.$Nombre."<br>");
print('Numero Emergencia ='.$NumEmergenica."<br>");
print('ID Domicilio ='.$IdDomicilio."<br>");

$sql = "INSERT INTO conductores (nombre, idDomicilio) VALUES (?, ?);";
$data = [$Nombre, $IdDomicilio];
$registro = ejecutar($sql, $data);

if ($registro) {
    echo "¡Conductor registrado con éxito!";
} else {
    echo "Error: No se pudo registrar el conductor.";
}

