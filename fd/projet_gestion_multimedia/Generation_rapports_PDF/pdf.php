<?php
require "./fpdf186/fpdf.php";
require "../Gestion_bases_donnees/connexion.php";

// Définir une classe monPDF qui hérite de la classe FPDF
class monPDF extends FPDF {
    // Fonction pour définir le contenu de l'en-tête du document
    function Header(){
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 10, "Rapport Sur les Fichiers", 0, 1, 'C');
    }

    // Fonction pour définir le contenu du pied de page du document
    function Footer(){
        $this->SetY(-15);
        $this->SetFont("Arial", 'I', 0);
        $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}

$fichiers = mysqli_query($connexion,"SELECT * FROM fichiers");
$nombreFichiers = mysqli_query($connexion,"SELECT COUNT(*) FROM fichiers");
$totalTaille = mysqli_query($connexion,"SELECT SUM(tailleFichier) FROM fichiers");

$pdf = new monPDF();// Création d'une instance de la classe monPDF
$pdf->AliasNbPages();// Alias pour le nombre total de pages
$pdf->SetFont('Arial', '', 12);// Définition de la police 
$pdf->AddPage();// Ajout d'une page au document
$pdf->ln(15);// Saut de ligne

$pdf->Cell(150, 10, "Le Nombre total de fichiers", 1, 0);
$pdf->SetTextColor(255, 0, 0); // Définition de la couleur du texte en rouge
$pdf->Cell(0, 10, mysqli_fetch_row($nombreFichiers)[0], 1, 1);
$pdf->SetTextColor(0, 0, 0); // Définition de la couleur du texte en noir

$pdf->Cell(150, 10, "La Taille moyenne ", 1, 0);
$pdf->SetTextColor(255, 0, 0);
$pdf->Cell(0, 10, mysqli_fetch_row($totalTaille)[0]." octets", 1, 1);
$pdf->SetFont('Arial','B',12); // Définition de la police en gras pour le prochain texte
$pdf->ln(20);

$pdf->Cell(0, 10, "Consultation des details des fichiers", 0, 1,"C");
$pdf->SetTextColor(0, 0, 0);
$pdf->ln(10);
$pdf->SetX(28);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(80, 10, "Nom", 1,0,"C");
$pdf->Cell(40, 10, "Type", 1,0,"C");
$pdf->Cell(40, 10, "Taille", 1,1,"C");

$pdf->SetFont('Arial', '', 12);
// Boucle pour afficher les détails de chaque fichier dans la base de données
while($ligne=mysqli_fetch_assoc($fichiers)){
    $pdf->SetX(28);
    $pdf->Cell(80, 10, $ligne['nomFichier'], 1,0,"C");
    $pdf->Cell(40, 10, $ligne['typeFichier'], 1,0,"C");
    $pdf->Cell(40, 10, $ligne['tailleFichier']." octets", 1,1,"C");
}

$pdf->Output("fichiers.pdf", "F");
?>
