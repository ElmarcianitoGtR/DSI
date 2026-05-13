<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Propietarios</title>
</head>
<body>
    <form action="entidades/IPropietario.php" method="post">
        <h1>Propietarios</h1>
        <label for="">Id propietario</label>
        <input type="text" name="Idpropietario" id="Idpropietario">
        <label for="">Nombre</label>
        <input type="text" name="Nombre" id="Nombre">
        <label for="">RFC</label>
        <input type="text" name="RFC" id="RFC">
        <label for="">Id domicilio</label>
        <input type="text" name="Iddomicilio" id="Iddomicilio">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>