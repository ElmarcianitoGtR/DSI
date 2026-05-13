<?php
$NumSerie = $_POST['numSerie'];
$Marca = $_POST['marca'];
$Modelo = $_POST['modelo'];
$Placa = $_POST['placa'];
$TipoCombustible = $_POST['tipoCombustible'];
$Color = $_POST['color'];
$NumMotor = $_POST['nummotor'];
$Puertas = $_POST['puertas'];
$Cilindros = $_POST['cilindros'];

print('NumSerie ='.$NumSerie."<br>");
print('Marca ='.$Marca."<br>");
print('Modelo ='.$Modelo."<br>");
print('Placa ='.$Placa."<br>");
print('Tipo Combustible ='.$TipoCombustible."<br>");
print('Color ='.$Color."<br>");
print('Num Motor ='.$NumMotor."<br>");
print('Puertas ='.$Puertas."<br>");
print('Cilindros ='.$Cilindros."<br>");

try {
    $sql = "INSERT INTO vehiculos (numSerie, marca, modelo, placa, tipoCombustible, color, numMotor, puertas, cilindros) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$NumSerie, $Marca, $Modelo, $Placa, $TipoCombustible, $Color, $NumMotor, $Puertas, $Cilindros]);
    echo"Se agrego correctamente el vehículo";
} catch(PDOException $e){
    echo "Error al insertar: " . $e->getMessage();
}