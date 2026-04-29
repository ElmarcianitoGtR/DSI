<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Vehicular - Licencias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #e9ecef; }
        .card { border-radius: 1rem; border: none; }
        .header-custom { 
            background: #0d6efd; 
            color: white; 
            border-radius: 1rem 1rem 0 0; 
            padding: 20px;
        }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow">
                <div class="header-custom text-center">
                    <h2 class="mb-0">Gestión de Licencias</h2>
                    <small>Sistema de Control Vehicular</small>
                </div>
                <div class="card-body p-4">
                    <form action="entidades/ILicencia.php" method="post">
                        
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label for="idlicencia" class="form-label fw-semibold">ID Licencia</label>
                                <input type="number" class="form-control" name="idlicencia" id="idlicencia" placeholder="0000">
                            </div>

                            <div class="col-md-4">
                                <label for="idconductor" class="form-label fw-semibold">ID Conductor</label>
                                <input type="number" class="form-control" name="idconductor" id="idconductor" placeholder="ID Chofer">
                            </div>

                            <div class="col-md-4">
                                <label for="tipo" class="form-label fw-semibold">Tipo</label>
                                <select class="form-select" name="tipo" id="tipo">
                                    <option selected>Seleccionar...</option>
                                    <option value="A">Tipo A (Automovilista)</option>
                                    <option value="B">Tipo B (Servicio Público)</option>
                                    <option value="C">Tipo C (Carga)</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="fechaexpedicion" class="form-label fw-semibold">Fecha de Expedición</label>
                                <input type="date" class="form-control" name="fechaexpedicion" id="fechaexpedicion">
                            </div>

                            <div class="col-md-6">
                                <label for="fechavencimiento" class="form-label fw-semibold">Fecha de Vencimiento</label>
                                <input type="date" class="form-control" name="fechavencimiento" id="fechavencimiento">
                            </div>

                            <div class="col-md-4">
                                <label for="antiguedad" class="form-label fw-semibold">Antigüedad (Años)</label>
                                <input type="number" class="form-control" name="antiguedad" id="antiguedad" step="1" min="0">
                            </div>

                            <div class="col-md-8">
                                <label for="restricciones" class="form-label fw-semibold">Restricciones</label>
                                <input type="text" class="form-control" name="restricciones" id="restricciones" placeholder="Ej: Lentes, Audífonos, Vehículo Automático">
                            </div>
                        </div>

                        <hr class="my-4">

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="button" class="btn btn-light me-md-2">Cancelar</button>
                            <button type="submit" class="btn btn-primary px-5">Registrar Licencia</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>