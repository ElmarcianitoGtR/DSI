<?php

function conectar(){
    $host = "127.0.0.1";
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
         return $pdo;
    } catch (\PDOException $e) {
         echo "Error en la conexión: " . $e->getMessage();
         return null;
    }
} 

function cerrar($pdo){
    $pdo = null;
}  


function ejecutar($sql, $params = []){
    $pdo = conectar();
    if ($pdo) {
        try {
            $stmt = $pdo->prepare($sql);
            $stmt->execute($params);

            cerrar($pdo);
            return $stmt;
        } catch (PDOException $e) {
            echo "Error al ejecutar la consulta: " . $e->getMessage();

            cerrar($pdo);
            return null;
        }
    }

    cerrar($pdo);
    return null;

}

function procesar(){

}
