<?php
require('./fpdf/fpdf.php');

$pdf = new FPDF('L');
$pdf->AddPage('P','Legal',180);
$pdf->SetFont('Courier','IUB',16);
$pdf->Setxy(60,60);
$pdf->Cell(45,10,'Hello World!',1,1 ,'C');

$pdf->Setxy(100,100);
$pdf->Cell(45,10,'Hello World!',1,1 ,'C');
$pdf->Image('./olas.jpeg',20,20,50,50);

$pdf->Multicell(3,3,'Hello sadmmfkmkfdmmmmmmmmmmmmmmmmmmmmmmmmmmmmmdkmkvmkdfvdv',1,1 ,'C');
$pdf->Output();
?>