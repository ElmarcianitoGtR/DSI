<?php
$Servidor = "db";
$Usuario = "root";
$Pwd = "";
$BaseDatos = "ControlVehicular2026";


$conn =mysqli_connect($Servidor,$Usuario,$Pwd,$BaseDatos);

print($conn);

?>