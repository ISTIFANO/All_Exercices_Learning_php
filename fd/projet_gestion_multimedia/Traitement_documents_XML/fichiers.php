<?php
require "../Gestion_bases_donnees/connexion.php";

$resultat=mysqli_query($connexion,"SELECT * FROM fichiers");
if($resultat){
    $xmlContenu="<?xml version='1.0' encoding='UTF-8' ?>
    <fichiers>\n";
    while($ligne=mysqli_fetch_assoc($resultat)){
        $xmlContenu.="<fichier id='$ligne[id]'>\n";
        $xmlContenu.="<nom>$ligne[nomFichier]</nom>\n";
        $xmlContenu.="<type>$ligne[typeFichier]</type>\n";
        $xmlContenu.="<taille>$ligne[tailleFichier]</taille>\n"; 
        $xmlContenu.="<date_telechargement>$ligne[dateTelechargement]</date_telechargement>\n";        
        $xmlContenu.="</fichier>\n";     
    }
    $xmlContenu.="</fichiers>";
    $check=file_put_contents('fichiers.xml',$xmlContenu);
   }

?>
