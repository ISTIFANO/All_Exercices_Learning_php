<?php 
if(isset($_POST['submit'])){

    foreach($_POST['produit'] as $kes){
        echo $kes;
    }

    // Inclure la bibliothèque FPDF
    require('C:\wamp64\www\php project\fpdf186\fpdf.php');
    
    class monPDF extends FPDF {
        function Header(){ 
            $this->SetFont('Arial', '', 12);
            $this->Image('curser.png', 10, 10, 30); 
            $this->Cell(0, 10, 'El amirri page', 0, 1, "C"); }
        function Footer(){ 
            $this->SetY(-15); 
            $this->SetFont('Arial', 'I', 12);
            $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, "C"); 
        }
    }
    
    $pdf = new monPDF();
    $pdf->AliasNbPages();
    $pdf->SetFont('Arial', '', 12);
    for ($i = 1; $i <= 6; $i++) {
        $pdf->AddPage();
        $pdf->Cell(0, 10, 'Contenu de la page ' . $i, 0, 1); 
    }
    
    $pdf->Output();
    
}
      ?>