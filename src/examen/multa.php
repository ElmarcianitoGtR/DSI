<?php
require('../DSI30/assets/fpdf/fpdf.php');
require('../DSI30/assets/controlador.php');

// 1. Obtención de datos mediante el controlador
$idMultaDeseada = $_POST['idMulta'] ?? 1; 

$sql = "SELECT 
            c.nombre AS conductor_nombre,
            p.rfc AS propietario_rfc, 
            d.calle, d.numeroExterior, d.colonia, d.ciudad,
            m.fecha AS fecha_multa,
            m.folio AS folio_multa,
            pa.asignacion AS motivo_pago
        FROM multas m
        INNER JOIN licencias l ON m.idLicencia = l.idLicencia
        INNER JOIN conductores c ON l.idConductores = c.idConductor
        INNER JOIN domicilios d ON c.idDomicilio = d.idDomicilio
        INNER JOIN tarjetasC tc ON m.idTarjetaC = tc.idTarjetaC
        INNER JOIN propietarios p ON tc.idPropietario = p.idPropietario
        INNER JOIN pagos pa ON m.idPago = pa.idPago
        WHERE m.idMulta = ?";

// Tu función ejecutar() devuelve un mysqli_result, debemos extraer la fila [cite: 63, 91]
$resultado = ejecutar($sql, [$idMultaDeseada]);
$datos = mysqli_fetch_assoc($resultado); 

if (!$datos) {
    die("Error: No se encontró la multa solicitada.");
}

// 2. Función para manejar acentos y caracteres especiales (PHP 8.2+) [cite: 46, 54]
function clean($txt) {
    return mb_convert_encoding($txt, 'ISO-8859-1', 'UTF-8');
}

// Preparación de variables [cite: 84]
$valConductor = clean($datos['conductor_nombre']);
$valRFC       = clean($datos['propietario_rfc']);
$valDomicilio = clean($datos['calle'] . " #" . $datos['numeroExterior'] . ", " . $datos['colonia'] . ", " . $datos['ciudad']);
$valFecha     = $datos['fecha_multa'];
$valFechaLimite = date('Y-m-d', strtotime($valFecha . ' + 15 days'));
$valImporte   = "$1,244.00"; 
$valMotivo    = clean($datos['motivo_pago'] . " - FOLIO: " . $datos['folio_multa']);

// 3. Generación del PDF
class PDF extends FPDF {
    function Footer() {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, clean('Página ') . $this->PageNo(), 0, 0, 'C');
    }
}

$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 14);

// --- ENCABEZADO ---
$pdf->Cell(100, 10, 'COMPROBANTE DIGITAL DE PAGO', 0, 1, 'L');
$pdf->Ln(10);
// $pdf->Image('assets/logo.png', 150, 5, 45); // Asegúrate de que la ruta exista [cite: 10]

// --- SECCIÓN 1: DATOS DEL CONDUCTOR ---
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(235, 235, 235); // Fondo gris para encabezados [cite: 29]

$pdf->Cell(45, 8, 'CONDUCTOR', 1, 0, 'L', true);
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(145, 8, $valConductor, 1, 1, 'L');

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(45, 8, 'RFC', 1, 0, 'L', true);
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(145, 8, $valRFC, 1, 1, 'L');

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(45, 8, 'DOMICILIO', 1, 0, 'L', true);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(145, 8, $valDomicilio, 1, 1, 'L');

$pdf->Ln(5);

// --- SECCIÓN 2: DETALLES DEL PAGO ---
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(55, 8, 'FECHA', 1, 0, 'L', true);
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(40, 8, $valFecha, 1, 1, 'C');

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(55, 8, clean('FECHA LÍMITE DE PAGO'), 1, 0, 'L', true);
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(40, 8, $valFechaLimite, 1, 1, 'C');

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(55, 8, 'IMPORTE/MONTO', 'LTB', 0, 'L', true);
$pdf->SetTextColor(255, 0, 0); 
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(135, 8, $valImporte, 'TRB', 1, 'R');
$pdf->SetTextColor(0, 0, 0); 

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(55, 8, 'CAUSA/MOTIVO', 1, 0, 'L', true);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(135, 8, $valMotivo, 1, 1, 'L');

// Limpiar el buffer para evitar el error "Output already started" 
ob_end_clean();
$pdf->Output('I', 'Comprobante_Multa.pdf');
?>