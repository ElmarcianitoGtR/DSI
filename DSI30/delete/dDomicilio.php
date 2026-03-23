<?php
include '../assets/controlador.php';
$id_domicilio = $_POST['id_domicilio'];
$resultejecutar = ejecutar("DELETE FROM domicilios WHERE idDomicilio = ?", [
    $id_domicilio
]);