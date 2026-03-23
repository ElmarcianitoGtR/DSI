<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Propietarios</title>
</head>
<body>
    <form action="entidades/ITarjetaV.php" method="get">
        <h1>Tarjetas de verificacion</h1>
        <div>
            <label for="IdTarjetaV">IdTarjetaV</label>
            <input type="text" name="IdTarjetaV" id="IdTarjetaV">
        </div>
        <div>
            <label for="Num_linea">Num_linea</label>
            <input type="text" name="Num_linea" id="Num_linea">
        </div>
        <div>
            <label for="Vigencia">Vigencia</label>
            <input type="text" name="Vigencia" id="Vigencia">
        </div>
        <div>
            <label for="Fecha_exp">Fecha_exp</label>
            <input type="date" name="Fecha_exp" id="Fecha_exp">
        </div>
        <div>
            <label for="Hora_entrada">Hora_entrada</label>
            <input type="time" name="Hora_entrada" id="Hora_entrada">
        </div>
        <div>
            <label for="Hora_salida">Hora_salida</label>
            <input type="time" name="Hora_salida" id="Hora_salida">
        </div>
        <div>
            <label for="Semestre">Semestre</label>
            <input type="number" name="Semestre" id="Semestre" step="1">
        </div>
        <div>
            <label for="Met_analisisV">Met_analisisV</label>
            <input type="text" name="Met_analisisV" id="Met_analisisV">
        </div>
        <div>
            <label for="IdCentroV">IdCentroV</label>
            <input type="number" name="IdCentroV" id="IdCentroV">
        </div>
        <div>
            <label for="IdTarjetaC">IdTarjetaC</label>
            <input type="number" name="IdTarjetaC" id="IdTarjetaC">
        </div>
        <div>
            <label for="IdPago">IdPago</label>
            <input type="number" name="IdPago" id="IdPago">
        </div>
        <button type="submit" class="btn btn-primary">Registrar Tarjeta</button>
    </form>
</body>
</html>