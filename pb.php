<?php
$host = 'db'; // Nombre del servicio en docker-compose
$db   = 'mi_base_de_datos';
$user = 'root';
$pass = 'root_password';

try {
    // Prueba con PDO
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    echo "✅ Conexión con PDO exitosa.<br>";

    // Prueba con mysqli
    $mysqli = new mysqli($host, $user, $pass, $db);
    echo "✅ Conexión con mysqli exitosa.";
    
} catch (Exception $e) {
    echo "❌ Error: " . $e->getMessage();
}
?>