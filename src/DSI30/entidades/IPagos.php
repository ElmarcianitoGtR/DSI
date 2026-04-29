<?php
$IdPago = $_POST['idpago'];
$Nombre = $_POST['nombre'];
$Asignacion = $_POST['asignacion'];

print('ID Pago ='.$IdPago."<br>");
print('Nombre ='.$Nombre."<br>");
print('Asignación ='.$Asignacion."<br>");

try {
    $sql = "INSERT INTO pagos (nombre, asignacion) VALUES (?, ?);";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$Nombre, $Asignacion]);
    echo"Se agrego correctamente el pago";
} catch(PDOException $e){
    echo "Error al insertar: " . $e->getMessage();
}