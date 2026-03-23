<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Vehicular - Centros de Verificación</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        :root {
            --bs-primary: #1e3a8a; /* Un azul más institucional */
        }
        body {
            background-color: #f1f5f9;
        }
        .form-card {
            background: white;
            border-top: 5px solid var(--bs-primary);
            border-radius: 8px;
        }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-9 col-lg-7">
            
            <div class="form-card shadow-sm p-4 p-md-5">
                <div class="d-flex align-items-center mb-4">
                    <i class="bi bi-building-check fs-1 text-primary me-3"></i>
                    <div>
                        <h1 class="h3 mb-0">Centros de Verificación</h1>
                        <p class="text-muted small">Registro y actualización de unidades de inspección</p>
                    </div>
                </div>

                <form action="entidades/ICentrosV.php" method="post">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="IdCentroV" class="form-label fw-bold text-secondary">ID del Centro</label>
                            <input type="number" class="form-control bg-light" name="IdCentroV" id="IdCentroV" placeholder="Auto-incremental">
                        </div>

                        <div class="col-md-6">
                            <label for="Numero" class="form-label fw-bold text-secondary">Número Oficial</label>
                            <input type="text" class="form-control" name="Numero" id="Numero" placeholder="Ej: CV-05">
                        </div>

                        <div class="col-12">
                            <label for="Nombre" class="form-label fw-bold text-secondary">Nombre del Establecimiento</label>
                            <input type="text" class="form-control" name="Nombre" id="Nombre" placeholder="Verificentro de Querétaro S.A.">
                        </div>

                        <div class="col-12">
                            <label for="Direccion" class="form-label fw-bold text-secondary">Dirección Completa</label>
                            <input type="text" class="form-control" name="Direccion" id="Direccion" placeholder="Calle, número, colonia y municipio">
                        </div>

                        <div class="col-md-6">
                            <label for="Num_lineas" class="form-label fw-bold text-secondary">Número de Líneas</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-gear-wide-connected"></i></span>
                                <input type="number" class="form-control" name="Num_lineas" id="Num_lineas" min="1" placeholder="Líneas de servicio">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label for="Horario" class="form-label fw-bold text-secondary">Horario de Atención</label>
                            <input type="text" class="form-control" name="Horario" id="Horario" placeholder="08:00:00">
                        </div>
                    </div>

                    <div class="mt-5 d-flex gap-3">
                        <button type="submit" class="btn btn-primary w-100 py-2 fw-bold">
                            <i class="bi bi-save me-2"></i>Registrar Centro
                        </button>
                        <button type="reset" class="btn btn-outline-danger w-100 py-2">
                            Cancelar
                        </button>
                    </div>
                </form>
            </div>
            
            <p class="text-center mt-4 text-muted small">Sistema de Control Vehicular - UAQ 2026</p>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>