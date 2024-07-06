<?php

//fonction pour supprimer un fichier de la base de donnees
function supprimer($id) {
    global $connexion;
    $sql = "DELETE FROM fichiers WHERE id=$id";
    if (mysqli_query($connexion, $sql)) {
        echo "<script>alert('Suppression réussie')</script>";
    } else {
        echo "<script>alert('Échec de la suppression')</script>";
    }
}

if(isset($_GET['id'])){
    $id=$_GET['id'];// Récupérer l'identifiant du fichier à supprimer.
    // Appeler la fonction "supprimer" pour supprimer le fichier correspondant à l'identifiant donné.
    supprimer($id);
    header("location:afficher.php");// Rediriger l'utilisateur vers la page d'affichage.
    exit();
}

?>