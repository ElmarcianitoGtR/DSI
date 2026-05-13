<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multas</title>
</head>
<body>
    <form action="entidades/IMulta.php" method="post">
        <h1>Multas</h1>
        <label for="">Id Multa</label>
        <input type="text" name="idmulta" id="idmulta">
        <label for="">Fecha</label>
        <input type="text" name="fecha" id="fecha">
        <label for="">Hora</label>
        <input type="text" name="hora" id="hora">
        <label for="">Folio</label>
        <input type="text" name="folio" id="folio">
        <label for="">Reporte Seccion</label>
        <input type="text" name="reporteseccion" id="reporteseccion">
        <label for="">Id Tarjeta de circulacion</label>
        <input type="text" name="idtarjetacirculacion" id="idtarjetacirculacion">
        <label for="">Id licencia</label>
        <input type="text" name="idlicencia" id="idlicencia">
        <label for="">Id Agente</label>
        <input type="text" name="idagente" id="idagente">
        <label for="">Id pago</label>
        <input type="text" name="idpago" id="idpago">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>