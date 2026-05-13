<?php
require_once './db.php'; 
$clave = $_GET['clave'];
$nombre = $_GET['nombre'];
$salario = $_GET['salario'];
$depto = $_GET['dept'];
$isr = $salario * 0.8;


print($clave);
print($nombre);
print($salario);
print($depto);

print($isr);


try{

    $sql = "INSERT INTO docentes (clave, nombre, salario, isr, dept) VALUES (?, ?, ?,?,?);";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$clave, $nombre, $salario,$isr,$depto]);
    echo"Se agrego correctamente el departamento";
}catch(PDOException $e){
    echo "Error al insertar: " . $e->getMessage();
}