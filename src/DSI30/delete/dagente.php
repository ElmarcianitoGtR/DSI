<?php
include '../assets/controlador.php';
$id_agente = $_POST['id_agente'];
$resultejecutar = ejecutar("DELETE FROM agentes WHERE idAgente = ?", [
    $id_agente
]);