<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehiculos</title>
</head>
<body>
    <form action="entidades/IVehiculo.php" method="post">
        <h1>Vehiculos</h1>
        <div>
            <label for="NumSerie">NumSerie</label>
            <input type="text" name="numSerie" id="NumSerie">
        </div>
        <div>
            <label for="marca">marca</label>
            <input type="text" name="marca" id="marca">
        </div>
        <div>
            <label for="modelo">modelo</label>
            <input type="text" name="modelo" id="modelo">
        </div>
        <div>
            <label for="placa">placa</label>
            <input type="text" name="placa" id="placa">
        </div>
        <div>
            <label for="tipoCombustible">tipoCombustible</label>
            <input type="text" name="tipoCombustible" id="tipoCombustible">
        </div>
        <div>
            <label for="color">color</label>
            <input type="text" name="color" id="color">
        </div>
        <div>
            <label for="nummotor">nummotor</label>
            <input type="text" name="nummotor" id="nummotor">
        </div>
        <div>
            <label for="puertas">puertas</label>
            <input type="number" name="puertas" id="puertas" step="1">
        </div>
        <div>
            <label for="cilindros">cilindros</label>
            <input type="number" name="cilindros" id="cilindros" step="1">
        </div>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>