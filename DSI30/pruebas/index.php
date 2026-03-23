<?php

$servidor ="127.0.0.1";
$usuario = "root";
$pwd = "";
$db="ControlVehicular2026";
$Conn= mysqli_connect($servidor,$usuario,$pwd,$db);
//paso 3
$sql = "INSERT INTO domicilios VALUES (NULL, 'John', 'Doe', 'john.doe@example.com')";
$result = mysqli_query($Conn,$sql);
//paso 4


/*if (!$result) {
    // Si falló, imprimimos el error exacto
    die("Error en la consulta: " . mysqli_error($Conn));
}


if (!mysqli_query($Conn, $sql)) {
    printf("Error #%d: %s", mysqli_errno($Conn), mysqli_error($Conn));
}

print_r(mysqli_error_list($Conn));
*/
mysqli_affected_rows($Conn);


//paso 5
mysqli_close($Conn);