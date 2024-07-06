<?php
    $prenom=$_GET["prenom"]??"d";
    $nom=$_GET["nom"]??"d";
    $adresse=$_GET["adresse"]??"d";
    $ville=$_GET["ville"]??"d";
    $cPostal=$_GET["cPostal"]??"d";
    echo "Consultation de :<br>";
    echo"-<a href='nP.php?prenom=$prenom&nom=$nom' target='_blank'>votre etat civil</a><br>";
    echo"-<a href='adresse.php?adresse=$adresse&ville=$ville&cPostal=$cPostal' target='_blank'>votre adresse</a>";
?>
