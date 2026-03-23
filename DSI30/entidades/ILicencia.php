<?php
// Recibiendo datos del formulario
$Idlicencia       = $_POST['idlicencia']; 
$Idconductor      = $_POST['idconductor'];
$Tipo             = $_POST['tipo'];
$FechaExpedicion  = $_POST['fechaexpedicion'];
$FechaVencimiento = $_POST['fechavencimiento'];
$Antiguedad       = $_POST['antiguedad'];
$Restricciones    = $_POST['restricciones'];

// Mostrar datos en pantalla
echo "ID Licencia = " . $Idlicencia . "<br>";
echo "ID Conductor = " . $Idconductor . "<br>";
echo "Tipo = " . $Tipo . "<br>";
echo "Fecha de Expedición = " . $FechaExpedicion . "<br>";
echo "Fecha de Vencimiento = " . $FechaVencimiento . "<br>";
echo "Antigüedad = " . $Antiguedad . "<br>";
echo "Restricciones = " . $Restricciones . "<br>";


try {
    $sql = "INSERT INTO licencias (fechaExpedicion, antiguedad, tipo, restricciones, fechaVencimiento, idConductor) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$FechaExpedicion, $Antiguedad, $Tipo, $Restricciones, $FechaVencimiento, $Idconductor]);
    echo "Se agregó correctamente la licencia";
} catch (PDOException $e) {
    echo "Error al insertar: " . $e->getMessage();
}