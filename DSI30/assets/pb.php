<?php
//CONECTAR AL SMBD y sleccion de BD

$SERVIDOR="127.0.0.1";
$USUARIO ="root";
$PWD="";
$BD="ControlVehicular2026";
$CON=mysqli_connect($SERVIDOR,$USUARIO,$PWD,$BD);

print_r($CON);

//EJECUTAR UNA CONSULTA SQP
$SQL = "INSERT INTO domicilios values ('9','9','9','9','9','9')";
$RESULTSET=mysqli_query($CON,$SQL);
print_r($RESULTSET."1");
$Var1=mysqli_close($CON);
print($Var1);
?>