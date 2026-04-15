<?php
include '../assets/controlador.php';
$IdDomicilio = $_POST['id_domicilio'];
$CP = $_POST['cp'];
$Calle = $_POST['calle'];
$Num_ext = $_POST['num_ext'];
$Num_int = $_POST['num_int'];
$Colonia = $_POST['colonia']; 
$Ciudad = $_POST['ciudad'];
$Estado = $_POST['estado'];

$sql = "INSERT INTO domicilios (colonia, calle, numeroInterior, numeroExterior, codigoPostal, ciudad, estado) VALUES (?, ?, ?, ?, ?, ?, ?);";
$data = [$Colonia, $Calle, $Num_int, $Num_ext, $CP, $Ciudad, $Estado];
$registro = ejecutar($sql, $data);

if ($registro) {
    echo "¡Domicilio registrado con éxito!";
} else {
    echo "Error: No se pudo registrar el domicilio.";
}

