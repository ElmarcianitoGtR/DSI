<?php
$Fecha = $_POST['fecha'];
$Hora = $_POST['hora'];
$Folio = $_POST['folio'];
$ReporteSeccion = $_POST['reporteseccion'];
$IdTarjetaCirculacion = $_POST['idtarjetacirculacion'];
$IdLicencia = $_POST['idlicencia'];
$IdAgente = $_POST['idagente'];
$IdPago = $_POST['idpago'];

try {
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    echo "¡Multa guardada correctamente!";
} catch (PDOException $e) {
    echo "Error al insertar: " . $e->getMessage();
}

