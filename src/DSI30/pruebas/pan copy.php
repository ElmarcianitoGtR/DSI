<?php
// Paso 1 y 2
$servidor = "127.0.0.1";
$usuario = "root";
$pwd = "";
$db = "ControlVehicular2026";
$Conn = mysqli_connect($servidor, $usuario, $pwd, $db);

// Paso 3: Cambiamos a INSERT para generar un nuevo ID
$sql = "INSERT INTO domicilios (colonia, calle, numeroInterior, numeroExterior, codigoPostal, ciudad, estado) 
            VALUES ('juarez', 'Av. Siempre Viva', 742, 2, 4332, 'Ciudad de México', 'CDMX')";
mysqli_query($Conn, $sql);

// Obtenemos el ID generado automáticamente
$nuevo_id = mysqli_insert_id($Conn);

echo "Se creó un nuevo registro con el ID: " . $nuevo_id;
?>