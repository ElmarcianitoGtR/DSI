<?php
require_once './db.php'; 
$clave = $_POST['clave'];
$nombre = $_POST['nombre'];
$edo = $_POST['estado'];



print($clave);
print($nombre);
print($edo);
if ($edo == "on") {
    
$estado = true;
}else{

$estado = false;
}

print($estado);
try{

    $sql = "INSERT INTO departamentos (claveDeptop, nombre, estado) VALUES (?, ?, ?);";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$clave, $nombre, $estado]);
    echo"Se agrego correctamente el departamento";
}catch(PDOException $e){
    echo "Error al insertar: " . $e->getMessage();
}