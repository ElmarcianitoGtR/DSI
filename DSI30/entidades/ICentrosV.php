<?php
$IdCentroV = $_POST['IdCentroV'];
$Numero = $_POST['Numero'];
$Nombre = $_POST['Nombre'];
$Direccion = $_POST['Direccion'];
$Num_lineas = $_POST['Num_lineas'];
$Horario = $_POST['Horario'];

print('ID Centro V ='.$IdCentroV."<br>");
print('Número Oficial ='.$Numero."<br>");
print('Nombre del Establecimiento ='.$Nombre."<br>");
print('Dirección Completa ='.$Direccion."<br>");
print('Número de Líneas ='.$Num_lineas."<br>");
print('Horario de Atención ='.$Horario."<br>");

try{
    $sql = "INSERT INTO centroV ( numero, nombre, direccion, numLineas, horario) VALUES (?, ?, ?, ?, ?);";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$Numero, $Nombre, $Direccion, $Num_lineas, $Horario]);
    echo"Se agrego correctamente el centro vehicular";
}catch(PDOException $e) {
    echo "Error al insertar: " . $e->getMessage();
}
