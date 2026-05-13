<?php
$Idpropietario = $_POST['Idpropietario'];
$Nombre = $_POST['Nombre'];
$RFC = $_POST['RFC'];
$Iddomicilio = $_POST['Iddomicilio'];
print('ID Propietario ='.$Idpropietario."<br>");
print('Nombre ='.$Nombre."<br>");
print('RFC ='.$RFC."<br>");
print('ID Domicilio ='.$Iddomicilio."<br>");

try {
    $sql = "INSERT INTO propietarios (nombre, rfc, idDomicilio) VALUES (?, ?, ?);";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$Nombre, $RFC, $Iddomicilio]);
    echo"Se agrego correctamente el propietario";
}catch(PDOException $e){
    echo "Error al insertar: " . $e->getMessage();
}   