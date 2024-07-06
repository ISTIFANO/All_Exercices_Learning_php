<?php
require "C:/wamp64/www/php project/xml/TP2/fpdf/fpdf186/fpdf.php"; 
require "connexion.php";

class PDF extends FPDF {   // fpdf  superclaass 
    function Header() {
        $this->SetFont('Arial','B',14); 
        $this->Cell(0,10,"Un rapport des notes forma  PDF ",1,1,'C'); //c = center
        $this->Cell(0,10,"Le 02/04/2024",0,1,'C');
        $this->Image('images/logo-infiniblog.jpg',8,2,80);
//    Image file path: 'images/logo-infiniblog.jpg'
// X-coordinate: 8
// Y-coordinate: 2
// Width: 80
       
         $this->Ln(20);
    }
    //    function Header() {
        // Logo
        // 
        // $this->
        // Image('images/logo-infiniblog.jpg',8,2,80);
        // Saut de ligne
    //     $this->Ln(20);
    // }

    function Footer() {
        $this->SetFont('Arial','I',10);
        $this->Cell(0,10,"rapport  AAMIR EL AMIRI",0,0,'C');
    }
}

$pdf = new PDF(); //
$pdf->AddPage();

$pdfs->SetFont('Arial','B',14); 
$pdf->Cell(0,10,"num client " ,1,1,'C'); //c = center
$pdf->Cell(0,15,$ligne['id'] ,1,1,'C'); //c = center
$pdf->ln(20);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(50,10,"Nom",1);
$pdf->Cell(50,10,"Prenom",1);
$pdf->Cell(50,10,"Matiere",1);
$pdf->Cell(30,10,"Note",1,1);

$donnees = $connexion->query("SELECT *FROM Etudiant");
while($ligne = $donnees->fetch_assoc()) {
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(50,10,$ligne['nom'],1);
    $pdf->Cell(50,10,$ligne['prenom'],1);
    $pdf->Cell(50,10,$ligne['matiere'],1);
    $pdf->Cell(30,10,$ligne['note'],1,1);
}

$pdf->Output();
?>
