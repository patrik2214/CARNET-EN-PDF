<?php
require('fpdf.php');

session_start();
$nombre=$_SESSION['txtnombres'];
$apellidomaterno=$_SESSION['txtapellidoM'];
$apellidopaterno=$_SESSION['txtapellidoP'];
$documento=$_SESSION['txtdni'];
$uni=$_SESSION['txtuniversidad'];
$escu=$_SESSION['txtescuela'];


$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(130, 50, 'Aca debe de ir una Imagen', 1);
$pdf->Ln(50);
$pdf->SetFont('Arial', 'I', 12);
$pdf->Cell(50, 10, 'Nombres', 1);
$pdf->Cell(80, 10, $nombre, 1);
$pdf->Ln(10);
$pdf->SetFont('Arial', 'I', 12);
$pdf->Cell(50, 10, 'Apellido Paterno', 1);
$pdf->Cell(80, 10, $apellidopaterno, 1);
$pdf->Ln(10);
$pdf->SetFont('Arial', 'I', 12);
$pdf->Cell(50, 10, 'Apellido Materno', 1);
$pdf->Cell(80, 10, $apellidomaterno, 1);
$pdf->Ln(10);
$pdf->SetFont('Arial', 'I', 12);
$pdf->Cell(50, 10, 'Escuela Pro.', 1);
$pdf->Cell(80, 10, $escu, 1);
$pdf->Ln(10);
$pdf->SetFont('Arial', 'I', 12);
$pdf->Cell(50, 10, 'Universidad', 1);
$pdf->Cell(80, 10, $uni, 1);
$pdf->Output();
?>