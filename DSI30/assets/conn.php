<?php
$host = "localhost";
$db   = "ControlVehicular2026";
$user = "root";
$pass = "";
$charset = "utf8mb4";

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
     $pdo = new PDO($dsn, $user, $pass, $options);
     echo "¡Conexión exitosa a la base de datos!";
} catch (\PDOException $e) {
     echo "Error en la conexión: " . $e->getMessage();
}
?>