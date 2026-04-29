<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Vehicular - Agentes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; /* Un gris ligero para resaltar el formulario */
        }
        .form-container {
            max-width: 500px;
            margin: 50px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="form-container">
            <h1 class="text-center mb-4 text-primary">Registro de Agentes</h1>
            
            <form action="entidades/IAgente.php" method="get">
                <div class="mb-3">
                    <label for="idAgente" class="form-label fw-bold">ID Agente</label>
                    <input type="text" class="form-control" id="idAgente" name="idAgente" placeholder="Ej: AG-102">
                </div>

                <div class="mb-3">
                    <label for="nombre" class="form-label fw-bold">Nombre Completo</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese nombre del oficial">
                </div>

                <div class="mb-4">
                    <label for="asignacion" class="form-label fw-bold">Asignación / Zona</label>
                    <input type="text" class="form-control" id="asignacion" name="asignacion" placeholder="Ej: Sector Norte">
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-lg">Guardar Agente</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>