<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Vehicular - Domicilio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f7f6;
        }
        .card-custom {
            max-width: 700px;
            margin: 40px auto;
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
        }
        .btn-save {
            background-color: #2c3e50;
            color: white;
            border: none;
        }
        .btn-save:hover {
            background-color: #1a252f;
            color: white;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="card card-custom p-4">
            <h2 class="text-center mb-4 fw-bold text-secondary">Registro de Domicilio</h2>
            
            <form action="entidades/IDomicilios.php" method="post">
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label class="form-label small fw-bold">ID Domicilio</label>
                        <input type="text" class="form-control" name="id_domicilio" placeholder="ID">
                    </div>
                    
                    <div class="col-md-4 mb-3">
                        <label class="form-label small fw-bold">Código Postal</label>
                        <input type="text" class="form-control" name="cp" placeholder="76000">
                    </div>

                    <div class="col-md-12 mb-3">
                        <label class="form-label small fw-bold">Calle</label>
                        <input type="text" class="form-control" name="calle" placeholder="Nombre de la vialidad">
                    </div>

                    <div class="col-6 col-md-3 mb-3">
                        <label class="form-label small fw-bold">Núm. Exterior</label>
                        <input type="text" class="form-control" name="num_ext">
                    </div>
                    <div class="col-6 col-md-3 mb-3">
                        <label class="form-label small fw-bold">Núm. Interior</label>
                        <input type="text" class="form-control" name="num_int" placeholder="Opcional">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label small fw-bold">Colonia</label>
                        <input type="text" class="form-control" name="colonia">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label small fw-bold">Ciudad</label>
                        <input type="text" class="form-control" name="ciudad">
                    </div>

                    <div class="col-md-6 mb-4">
                        <label class="form-label small fw-bold">Estado</label>
                        <input type="text" class="form-control" name="estado">
                    </div>
                </div>

                <div class="d-flex justify-content-end gap-2">
                    <button type="reset" class="btn btn-outline-secondary">Limpiar</button>
                    <button type="submit" class="btn btn-save px-4">Guardar Domicilio</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>