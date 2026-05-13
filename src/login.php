<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body class="d-flex align-items-center justify-content-center vh-100">

    <div class="login-card shadow-lg p-4 p-md-5">
        <div class="text-center mb-4">
            <h2 class="fw-bold">Bienvenido</h2>
            <p class="text-muted">Ingresa tus credenciales para continuar</p>
        </div>

        <form>
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control custom-input" id="email" placeholder="nombre@ejemplo.com"
                    required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control custom-input" id="password" placeholder="••••••••" required>
            </div>

            <div class="d-flex justify-content-between mb-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember">
                    <label class="form-check-label text-muted" for="remember">Recuérdame</label>
                </div>
                <a href="#" class="text-decoration-none small">¿Olvidaste tu contraseña?</a>
            </div>

            <button type="submit" class="btn btn-primary w-100 btn-login fw-bold">Iniciar Sesión</button>
        </form>
        <!-- ... (debajo del botón de login principal) -->

        <div class="text-center my-3 text-muted">
            <small>— O —</small>
        </div>

        <div class="d-grid">
            <!-- Input oculto -->
            <input type="file" id="keyFile" accept=".key" style="display: none;" onchange="handleFileSelect(this)">

            <!-- Botón disparador -->
            <button type="button"
                class="btn btn-outline-secondary d-flex align-items-center justify-content-center gap-2"
                onclick="document.getElementById('keyFile').click()">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key"
                    viewBox="0 0 16 16">
                    <path
                        d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 7.465 10H7a.5.5 0 0 1-.5-.5c0-.13.016-.257.046-.38A4.002 4.002 0 0 1 0 8m4-3a3 3 0 1 0 0 6 3 3 0 0 0 0-6" />
                </svg>
                Acceder con Llave (.key)
            </button>
            <div id="fileNameDisplay" class="text-center mt-2 small text-primary" style="display:none;"></div>
        </div>

    </div>
    <script>
        function handleFileSelect(input) {
            const file = input.files[0];
            const display = document.getElementById('fileNameDisplay');

            if (file) {
                // Mostrar feedback visual del archivo cargado
                display.innerText = `Archivo seleccionado: ${file.name}`;
                display.style.display = 'block';

                // Ejemplo: Leer el contenido del archivo si es necesario
                const reader = new FileReader();
                reader.onload = function (e) {
                    const content = e.target.result;
                    console.log("Contenido de la llave cargado");
                    // Aquí podrías disparar una función de validación o login
                };
                reader.readAsText(file);
            }
        }
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>