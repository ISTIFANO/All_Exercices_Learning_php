<?php
require "fonctionsSQL.php";

if(isset($_GET['id'])){
    $id=$_GET['id'];// Récupérer l'identifiant du fichier à supprimer.
    // Appeler la fonction "supprimer" pour supprimer le fichier correspondant à l'identifiant donné.
    supprimer($id);
    header("location:afficher.php");// Rediriger l'utilisateur vers la page d'affichage.
    exit();
}

?>