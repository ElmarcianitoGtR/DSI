<?php
$Idconductor = $_POST['idConductor'];
$Nombre = $_POST['nombre'];
$NumEmergenica = $_POST['numEmergenica'];
$IdDomicilio = $_POST['idDomicilio'];
print('ID Conductor ='.$Idconductor."<br>");
print('Nombre ='.$Nombre."<br>");
print('Numero Emergencia ='.$NumEmergenica."<br>");
print('ID Domicilio ='.$IdDomicilio."<br>");

try {
    $sql = "INSERT INTO conductores (nombre, idDomicilio) VALUES (?, ?);";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$Nombre, $IdDomicilio]);
    echo"Se agrego correctamente el conductor";
}catch(PDOException $e){
    echo "Error al insertar: " . $e->getMessage();
}   

