<?php
require_once '../assets/conn.php';

$IdAgente = $_GET['idAgente'];
$Nombre = $_GET['nombre'];
$Asignacion = $_GET['asignacion'];
print('ID Agente ='.$IdAgente."<br>");
print('Nombre ='.$Nombre."<br>");
print('Asignación ='.$Asignacion."<br>");


try{

    $sql = "INSERT INTO agentes (nombre, asignacion) VALUES (?, ?);";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$Nombre, $Asignacion]);
    echo"Se agrego correctamente el agente";
}catch(PDOException $e){
    echo "Error al insertar: " . $e->getMessage();
}