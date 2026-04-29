<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagos</title>
</head>
<body>
    <form action="entidades/IPagos.php" method="post">
        <h1>Pagos</h1>
        <label for="">Id pago</label>
        <input type="text" name="idpago" id="idpago">
        <label for="">Nombre</label>
        <input type="text" name="nombre" id="nombre">
        <label for="">Asignacion</label>
        <input type="text" name="asignacion" id="asignacion">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>