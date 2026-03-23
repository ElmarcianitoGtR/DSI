<?php
include '../assets/controlador.php';
$IdDomicilio = $_POST['id_domicilio'];
$CP = $_POST['cp'];
$Calle = $_POST['calle'];
$Num_ext = $_POST['num_ext'];
$Num_int = $_POST['num_int'];
$Colonia = $_POST['colonia']; 
$Ciudad = $_POST['ciudad'];
$Estado = $_POST['estado'];
//print('Calle ='.$Calle."<br>");
//print('Numero exterior ='.$Num_ext."<br>");
//print('Numero interior ='.$Num_int."<br>");
//print('Colonia ='.$Colonia."<br>");
//print('Ciudad ='.$Ciudad."<br>");
//print('Estado ='.$Estado."<br>");

$resultejecutar = ejecutar("INSERT INTO domicilios (colonia, calle, numeroInterior, numeroExterior, codigoPostal, ciudad, estado) 
            VALUES (?, ?, ?, ?, ?, ?, ?)", [
                $Colonia, 
                $Calle, 
                $Num_int, 
                $Num_ext, 
                $CP, 
                $Ciudad, 
                $Estado
            ]);
 echo "¡Domicilio guardado correctamente!";

/*            try {
    $sql = "INSERT INTO domicilios (colonia, calle, numeroInterior, numeroExterior, codigoPostal, ciudad, estado) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        $Colonia, 
        $Calle, 
        $Num_int, 
        $Num_ext, 
        $CP, 
        $Ciudad, 
        $Estado
    ]);

    echo "¡Domicilio guardado correctamente!";
    
} catch (PDOException $e) {
    echo "Error al insertar: " . $e->getMessage();
}

*/