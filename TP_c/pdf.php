<?php
require "C:/wamp64/www/php project/TP_c/fpdf/fpdf186/fpdf.php";
require "connexion.php";
class PDF extends FPDF{
    function Header(){
        $this->SetFont('Arial','B',14);
        $this->Cell(0,10,"Un rapport PDF ",0,1,'C');
        $this->Cell(0,10,"Le 20/03/2024",0,1,'C');
    }
    function Footer(){
        $this->SetFont('Arial','I',10);
        $this->Cell(0,10,"Librairie AAMIR EL AMIRI",0,0,'C');
    }
}
$pdf=new PDF();
$pdf->AddPage();

    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(70,10,"Titre du livre",1);
    $pdf->Cell(70,10,"Auteur du livre",1);

$pdf->Cell(20,10,"Date de publication",1,1);
$livres=$con->query("SELECT * FROM livres");
while($livre=$livres->fetch_assoc()){
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(70,10,$livre['titre'],1);
    $pdf->Cell(70,10,$livre['auteur'],1);
    $pdf->Cell(70,10,$livre['date_publication'],1,1);
}

$pdf->Output();
?>