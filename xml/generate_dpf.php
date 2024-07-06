<?php 
require('C:\wamp64\www\php project\fpdf186\fpdf.php');
$pdf = new FPDF();
$pdf->AddPage('P','A5');
$pdf->SetFont('Arial','B',14);
$pdf->Cell(40,10,'Hello world !!!!!!!!!!!!');
$pdf->AddPage('L','A5');
$pdf->SetFont('Arial','B',14);
$pdf->MultiCell(50,20,'Hello world
Hello world  !!!!!!!!!!!!',0,1);
$pdf->AddPage('P','A5');
$pdf->SetFont('Arial','B',14);
$pdf->Cell(40,10,'Hello world !!!!!!!!!!!');
$pdf->Output('example.pdf','F');








?>