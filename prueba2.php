<?php
require('fpdf.php');
require_once('conexion.php');

session_start();
$dni=$_SESSION['dni'];

$sql="SELECT * FROM asistente WHERE dni='$dni'";

$result = $cnx->query($sql);
while($reg = $result->fetchObject()){
        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 16);
        //Ver en que formato esta la imagen PNG,JPG
        //$pdf->Cell(130, 50,$pdf->Image($reg->href, $pdf->GetX(), $pdf->GetY(),0), 1);
        $pdf->Cell(100, 60,$pdf->Image($reg->href,20, 10,0), 1);
        $pdf->Ln(60);
        $pdf->SetFont('Arial', 'I', 12);
        $pdf->Cell(50, 10, 'Nombres', 1);
        $pdf->Cell(50, 10,$reg->nombres, 1);
        $pdf->Ln(10);
        $pdf->SetFont('Arial', 'I', 12);
        $pdf->Cell(50, 10, 'Apellido Paterno', 1);
        $pdf->Cell(50, 10,$reg->apellidopaterno, 1);
        $pdf->Ln(10);
        $pdf->SetFont('Arial', 'I', 12);
        $pdf->Cell(50, 10, 'Apellido Materno', 1);
        $pdf->Cell(50, 10, $reg->apellidomaterno, 1);
        $pdf->Ln(10);
        $pdf->SetFont('Arial', 'I', 12);
        $pdf->Cell(50, 10, 'Escuela Pro.', 1);
        $pdf->Cell(50, 10, $reg->escuela, 1);
        $pdf->Ln(10);
        $pdf->SetFont('Arial', 'I', 12);
        $pdf->Cell(50, 10, 'Universidad', 1);
        $pdf->Cell(50, 10, $reg->universidad, 1);
        $pdf->Output(); 
}
?>