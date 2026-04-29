<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Propietarios</title>
</head>
<body>
    <form action="entidades/IConductor.php" method="post">
        <h1>Conductor</h1>
        <label for="idConductor">Id Conductor</label>
        <input type="text" name="idConductor" id="idConductor">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre">
        <label for="numEmergenica">Numero Emergencia</label>
        <input type="text" name="numEmergenica" id="numEmergenica">
        <label for="idDomicilio">Id domicilio</label>
        <input type="text" name="idDomicilio" id="idDomicilio">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>