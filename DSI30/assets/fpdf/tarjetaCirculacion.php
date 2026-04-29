<?php
require_once '../controlador.php'; // Tu controlador con la función ejecutar()
require_once 'fpdf.php';   // Ruta a tu librería FPDF

// Función auxiliar para compatibilidad con PHP 8.2+
function c($texto) {
    return mb_convert_encoding($texto, 'ISO-8859-1', 'UTF-8');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['idTarjetaC'])) {
    $id = $_POST['idTarjetaC'];

    // Consulta SQL uniendo tus tablas según tu esquema [cite: 7, 9, 13, 14]
    $sql = "SELECT t.*, v.*, p.nombre AS nombre_propietario, p.rfc, d.ciudad, d.estado 
            FROM tarjetasC t
            INNER JOIN vehiculos v ON t.numSerie = v.numSerie
            INNER JOIN propietarios p ON t.idPropietario = p.idPropietario
            INNER JOIN domicilios d ON p.idDomicilio = d.idDomicilio
            WHERE t.idTarjetaC = ?";
    
    // Usamos tu función ejecutar() pasando el ID en el arreglo de datos
    $res = ejecutar($sql, [$id]);
    $datos = $res->fetch(PDO::FETCH_ASSOC);

    if ($datos) {
        crearPDF($datos);
    } else {
        echo "Error: Tarjeta no encontrada.";
    }
}

function crearPDF($d) {
    $pdf = new FPDF('L', 'mm', array(86, 54));
    $pdf->SetAutoPageBreak(false);
    
    // --- ANVERSO (FRENTE) ---
    $pdf->AddPage();
    $pdf->Rect(1, 1, 84, 52); // Marco oficial
    $pdf->Line(1, 10, 85, 10);

    // Encabezado usando datos de la DB [cite: 2]
    $pdf->SetFont('Arial', 'B', 5);
    $pdf->SetXY(2, 3);
    $pdf->Cell(82, 3, c('ESTADOS UNIDOS MEXICANOS'), 0, 1, 'C');
    $pdf->SetFont('Arial', '', 4);
    $pdf->Cell(82, 2, c('ESTADO DE ' . strtoupper($d['estado'])), 0, 1, 'C');

    // Datos del Propietario [cite: 1]
    $pdf->SetFont('Arial', '', 3.5);
    $pdf->SetXY(2, 11); $pdf->Cell(0, 2, c('NOMBRE DEL PROPIETARIO / R.F.C.'), 0);
    $pdf->SetFont('Arial', 'B', 5);
    $pdf->SetXY(2, 13); $pdf->Cell(0, 4, c($d['nombre_propietario'] . " - " . $d['rfc']), 0);

    $pdf->Line(1, 18, 85, 18);

    // Datos del Vehículo [cite: 7]
    $pdf->SetFont('Arial', '', 3.5);
    $pdf->SetXY(2, 19); $pdf->Cell(20, 2, 'MARCA:', 0);
    $pdf->SetXY(2, 21); $pdf->SetFont('Arial', 'B', 5); $pdf->Cell(20, 3, c($d['marca']), 0);

    $pdf->SetXY(25, 19); $pdf->Cell(20, 2, 'MODELO:', 0);
    $pdf->SetXY(25, 21); $pdf->Cell(20, 3, c($d['modelo']), 0);

    // Sección Derecha (NIV y Placa) 
    $pdf->Line(50, 18, 50, 35);
    $pdf->SetXY(51, 19); $pdf->Cell(20, 2, 'NIV (SERIE):', 0);
    $pdf->SetXY(51, 21); $pdf->Cell(20, 3, $d['numSerie'], 0);

    $pdf->Line(1, 35, 85, 35);

    // Pie de tarjeta con Folio y Placa [cite: 9]
    $pdf->SetXY(2, 36); $pdf->Cell(20, 2, 'FOLIO:', 0);
    $pdf->SetXY(2, 38); $pdf->SetFont('Arial', 'B', 6); $pdf->Cell(20, 3, $d['folio'], 0);

    $pdf->SetXY(51, 36); $pdf->Cell(20, 2, 'PLACA:', 0);
    $pdf->SetXY(51, 38); $pdf->SetFont('Arial', 'B', 7); $pdf->Cell(20, 3, $d['placa'], 0);

    // --- REVERSO (VUELTA) ---
    $pdf->AddPage();
    $pdf->Rect(1, 1, 84, 52);
    $pdf->SetXY(5, 5);
    $pdf->SetFont('Arial', 'B', 6);
    $pdf->Cell(0, 4, c('VIGENCIA: ' . $d['vigencia']), 0, 1);
    $pdf->Cell(0, 4, c('TIPO DE SERVICIO: ' . $d['tipoServicio']), 0, 1);
    $pdf->Cell(0, 4, c('USO: ' . $d['uso']), 0, 1);

    // Limpieza de buffer para evitar errores de "Output already started"
    if (ob_get_contents()) ob_end_clean();
    $pdf->Output('I', 'Tarjeta_' . $d['placa'] . '.pdf');
}