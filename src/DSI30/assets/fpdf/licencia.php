<?php
require_once '../controlador.php';
require_once 'fpdf.php';
function c($t) { return mb_convert_encoding($t, 'ISO-8859-1', 'UTF-8'); }

$ancho = 86; $alto = 54;
$pdf = new FPDF('L', 'mm', array($ancho, $alto));
$pdf->SetAutoPageBreak(false);

$pdf->AddPage();
$pdf->SetDrawColor(230, 235, 230);
for($i=0; $i<$ancho; $i+=4) $pdf->Line($i, 0, $i+5, $alto);

$pdf->SetFillColor(0, 102, 51);
$pdf->Rect(0, 0, $ancho, 10, 'F');
$pdf->SetTextColor(255);
$pdf->SetFont('Arial', 'B', 7);
$pdf->SetXY(0, 2);
$pdf->Cell($ancho, 3, c('ESTADOS UNIDOS MEXICANOS'), 0, 1, 'C');
$pdf->SetFont('Arial', 'B', 5);
$pdf->Cell($ancho, 3, c('PODER EJECUTIVO DEL ESTADO DE QUERÉTARO'), 0, 1, 'C');

$pdf->SetDrawColor(180);
$pdf->Rect(4, 12, 20, 25);
$pdf->SetXY(4, 38);
$pdf->SetFont('Arial', 'I', 4);
$pdf->SetTextColor(50);
$pdf->Cell(20, 3, '____________________', 0, 1, 'C');
$pdf->Cell(20, 2, c('    FIRMA    '), 0, 0, 'C');

$pdf->SetTextColor(0);
$pdf->SetXY(28, 12); $pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(0, 4, c('JUAN PÉREZ GARCÍA'), 0, 1);

$pdf->SetFont('Arial', '', 5);
$pdf->SetX(28); $pdf->Cell(25, 3, c('FECHA DE NACIMIENTO:'), 0);
$pdf->SetFont('Arial', 'B', 5); $pdf->Cell(20, 3, '15/05/1998', 0);

$pdf->SetXY(28, 18); $pdf->SetFont('Arial', '', 5);
$pdf->Cell(10, 3, c('GÉNERO:'), 0);
$pdf->SetFont('Arial', 'B', 5); $pdf->Cell(15, 3, 'MASCULINO', 0);
$pdf->SetX(55); $pdf->SetFont('Arial', '', 5); $pdf->Cell(10, 3, 'SANGRE:', 0);
$pdf->SetFont('Arial', 'B', 5); $pdf->Cell(10, 3, 'O+', 0);

$pdf->SetXY(28, 22); $pdf->SetFont('Arial', '', 4.5);
$pdf->MultiCell(55, 2.5, c('DOMICILIO: AV. CIENCIAS S/N, JURIQUILLA, QUERÉTARO, QRO. CP 76230'), 0, 'L');

$pdf->SetFillColor(240, 240, 240);
$pdf->Rect(28, 30, 54, 12, 'F');
$pdf->SetXY(30, 31); $pdf->SetFont('Arial', '', 5); $pdf->Cell(15, 3, 'TIPO:', 0);
$pdf->SetFont('Arial', 'B', 7); $pdf->SetTextColor(150, 0, 0); $pdf->Cell(10, 3, 'A', 0); 

$pdf->SetTextColor(0);
$pdf->SetXY(30, 34); $pdf->SetFont('Arial', '', 4.5); $pdf->Cell(15, 3, 'FOLIO:', 0);
$pdf->SetFont('Arial', 'B', 5); $pdf->Cell(20, 3, 'QRO-998234', 0); 

$pdf->SetXY(55, 31); $pdf->SetFont('Arial', '', 4.5); $pdf->Cell(15, 3, 'ANTIGÜEDAD:', 0);
$pdf->SetFont('Arial', 'B', 5); $pdf->Cell(10, 3, '2020', 0); 

$pdf->SetXY(28, 44); $pdf->SetFillColor(150, 0, 0); $pdf->Rect(28, 44, 54, 5, 'F');
$pdf->SetTextColor(255); $pdf->SetFont('Arial', 'B', 5);
$pdf->SetXY(28, 44); $pdf->Cell(54, 5, c('VENCE: 27/04/2030'), 0, 0, 'C'); 

// --- REVERSO (VUELTA) ---
$pdf->AddPage();
$pdf->Rect(1, 1, 84, 52);

// Restricciones
$pdf->SetTextColor(0);
$pdf->SetXY(5, 5); $pdf->SetFont('Arial', 'B', 6);
$pdf->Cell(0, 4, c('RESTRICCIONES Y OBSERVACIONES:'), 0, 1);
$pdf->SetFont('Arial', '', 5);
$pdf->MultiCell(76, 3, c('1. ' . 'USO DE LENTES CORRECTORES' . "\n2. DONADOR DE ÓRGANOS: SÍ\n3. TEL. EMERGENCIA: 442-123-4567"), 0, 'L'); // licencias.restricciones 

// Datos de Pago/Control (pagos [cite: 11])
$pdf->SetXY(5, 25); $pdf->SetFont('Arial', 'B', 5);
$pdf->Cell(0, 3, c('AUTORIDAD EMISORA: DEPTO. DE TRÁNSITO'), 0, 1);
$pdf->SetFont('Arial', '', 4);
$pdf->Cell(0, 3, c('CONTROL DE PAGO: ' . 'REC-88293-2026'), 0, 1);

// Código QR Simulado
$pdf->SetFillColor(0);
$pdf->Rect(65, 35, 12, 12, 'F');
$pdf->SetXY(65, 48); $pdf->SetFont('Arial', '', 3.5);
$pdf->Cell(12, 2, 'VALIDAR', 0, 0, 'C');

if (ob_get_contents()) ob_end_clean();
$pdf->Output('I', 'Licencia_QRO.pdf');