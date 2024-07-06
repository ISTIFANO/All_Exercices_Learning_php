<?php

// Inclure la bibliothèque FPDF
require('C:\wamp64\www\php project\fpdf186\fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 12);
$pdf->SetX(60);
$pdf->SetY(50);
$pdf->setTextColor(255,0,0);
$pdf->setFillColor(205,205,30);
$pdf->MultiCell(0, 12, "MultiCell(largeur de la cellule, hauteur de chaque ligne, contenu du texte, bordure,\nalignement du texte, remplissage booléen). Un exemple serait 25,6, \"Voici un peu de texte à afficher\", 'LRT', 'L', 0); Dans l'exemple ci-dessus, la largeur de MultiCell\nest fixée à 25 unités qui ont été spécifiées dans l'appel initial à FPDF.", 1, 'C', true);
$pdf->setDrawColor(0,0,255);
$pdf->Image("curser.png",12,53,26,0); // Utilisation de la fonction Image() au lieu de image()

$pdf->Rect(54,15,70,30,"F");

$pdf->Line(54,15,70,30); // Utilisation de la fonction Line() au lieu de line()
$pdf->Line(84,15,70,30);
$pdf->Line(54,30,70,30);
$pdf->Line(84,30,70,30);

// Tableau

$arry = array(
    array('Nom', 'Prénom', 'Âge'),
    array('Amir', 'El Amiri', '20'),
    array('Aamir', 'Él Amiri', '20'),
    array('Amer', 'Émiri', '20')
);

$largeur = 30; 
$hauteur = 12; 

for ($i = 0; $i < count($arry); $i++) {
    for ($j = 0; $j < count($arry[$i]); $j++) {
    
        $pdf->SetXY(10 + $j * $largeur, 168 + $i * $hauteur);

        $pdf->SetFont("Arial", "", 12);

        $pdf->MultiCell(0, 10, mb_convert_encoding($arry[$i][$j], 'ISO-8859-1', mb_detect_encoding($arry[$i][$j])));
    }
}

$pdf->Output();

?>
