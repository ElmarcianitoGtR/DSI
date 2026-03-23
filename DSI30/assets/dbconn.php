<?php
$Servidor = "127.0.0.1";
$Usuario = "root";
$Pwd = "";
$BaseDatos = "ControlVehicular2026";


$conn =mysqli_connect($Servidor,$Usuario,$Pwd,$BaseDatos);

print($conn);

?>