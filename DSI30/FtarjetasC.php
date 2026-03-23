<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarjetas de circulacion</title>
</head>
<body>
    <form action="entidades/ITarjetaC.php" method="get">
        <h1>Tarjetas de circulacion</h1>
        <div>
            <label for="idtarjetaC">idtarjetaC</label>
            <input type="number" name="idtarjetaC" id="idtarjetaC">
        </div>
        <div>
            <label for="vigencia">vigencia</label>
            <input type="text" name="vigencia" id="vigencia">
        </div>
        <div>
            <label for="folio">folio</label>
            <input type="text" name="folio" id="folio">
        </div>
        <div>
            <label for="uso">uso</label>
            <input type="text" name="uso" id="uso">
        </div>
        <div>
            <label for="rpa">rpa</label>
            <input type="text" name="rpa" id="rpa">
        </div>
        <div>
            <label for="firmaaut">firmaaut</label>
            <input type="text" name="firmaaut" id="firmaaut">
        </div>
        <div>
            <label for="fechaexp">fechaexp</label>
            <input type="date" name="fechaexp" id="fechaexp">
        </div>
        <div>
            <label for="tiposervicio">tiposervicio</label>
            <input type="text" name="tiposervicio" id="tiposervicio">
        </div>
        <div>
            <label for="holograma">holograma</label>
            <input type="text" name="holograma" id="holograma">
        </div>
        <div>
            <label for="numserie">numserie</label>
            <input type="text" name="numserie" id="numserie">
        </div>
        <div>
            <label for="idpropietario">idpropietario</label>
            <input type="number" name="idpropietario" id="idpropietario">
        </div>
        <div>
            <label for="idpago">idpago</label>
            <input type="number" name="idpago" id="idpago">
        </div>
        <button type="submit">Registrar Tarjeta</button>
    </form>
</body>
</html>