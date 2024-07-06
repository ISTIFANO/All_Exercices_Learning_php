<?php
if(isset($_GET['fichier'])) {
    $fichier = $_GET['fichier'];
    $stockage = "C:\wamp64\www\mesSitesweb\projet_gestion_multimedia\Gestion_fichiers\Telechargements\\";
    $stockage.=$fichier;
    
    if (file_exists($stockage)) {// Vérifier si le fichier existe
        if (unlink($stockage)) {// Supprimer le fichier
            echo "<script>alert('Le fichier $fichier a ete supprime avec succes')</script>";
            header("location:affichage.php");// Rediriger l'utilisateur vers la page d'affichage.
            exit();
        } else {
            echo "<script>alert('Erreur lors de la suppression du fichier $fichier')</script>";
            //window.history.back() : permet de revenir a la page precedente dans l'historique du navigateur
            echo "<script>window.history.back()</script>";
        }
    } else {
        echo "<script>alert('Le fichier $fichier n'existe pas')</script>";
        echo "<script>window.history.back()</script>";
    }
} else {
    echo "<script>alert('Aucun fichier spécifié')</script>";
    echo "<script>window.history.back()</script>";
}
?>
