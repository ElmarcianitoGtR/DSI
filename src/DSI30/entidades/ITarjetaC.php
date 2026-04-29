<?php
$IdTarjetaC = $_GET['idtarjetaC'];
$Vigencia = $_GET['vigencia'];
$Folio = $_GET['folio'];
$Uso = $_GET['uso'];
$Rpa = $_GET['rpa'];
$Firmaaut = $_GET['firmaaut'];
$Fechaexp = $_GET['fechaexp'];
$Tiposervicio = $_GET['tiposervicio'];
$Holograma = $_GET['holograma'];
$Numserie = $_GET['numserie'];
$Idpropietario = $_GET['idpropietario'];
$Idpago = $_GET['idpago'];

print('ID Tarjeta C ='.$IdTarjetaC."<br>");
print('Vigencia ='.$Vigencia."<br>");
print('Folio ='.$Folio."<br>");
print('Uso ='.$Uso."<br>");
print('RPA ='.$Rpa."<br>");
print('Firma Autorizada ='.$Firmaaut."<br>");
print('Fecha de Expiración ='.$Fechaexp."<br>");
print('Tipo de Servicio ='.$Tiposervicio."<br>");
print('Holograma ='.$Holograma."<br>");
print('Número de Serie ='.$Numserie."<br>");
print('ID Propietario ='.$Idpropietario."<br>");
print('ID Pago ='.$Idpago."<br>");
try {
    $sql = "INSERT INTO tarjetaCirculacion (vigencia, folio, uso, rpa, firmaAutorizada, fechaExpiracion, tipoServicio, holograma, numSerie, idPropietario, idPago) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$Vigencia, $Folio, $Uso, $Rpa, $Firmaaut, $Fechaexp, $Tiposervicio, $Holograma, $Numserie, $Idpropietario, $Idpago]);
    echo"Se agrego correctamente la tarjeta de circulación";
} catch(PDOException $e){
    echo "Error al insertar: " . $e->getMessage();
}


