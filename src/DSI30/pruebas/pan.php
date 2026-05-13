<?php
// Paso 1 y 2
$servidor ="127.0.0.1";
$usuario = "root";
$pwd = "";
$db="ControlVehicular2026";
$Conn = mysqli_connect($servidor, $usuario, $pwd, $db);

// Paso 3
$sql = "SELECT * FROM domicilios";
$result = mysqli_query($Conn, $sql);

$host_info = mysqli_get_host_info($Conn);

echo "Información del host: " . $host_info;
?>