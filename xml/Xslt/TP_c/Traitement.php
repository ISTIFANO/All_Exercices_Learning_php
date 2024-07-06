<?php 
include ("connexion.php");

$titre = $_POST['titre'];
$auteur = $_POST['auteur'];
$prix = $_POST['prix'];
$date= $_POST['date_publication'];

if (isset($titre) && isset($prix) && isset($date) && isset($auteur)){

    $query = "INSERT INTO livres (titre,auteur,prix,date_publication) VALUES ('$titre', '$auteur', '$prix','$date')";
    $con->query($query);

    $con->close();
}

?>