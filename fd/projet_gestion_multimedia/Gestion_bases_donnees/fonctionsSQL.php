<?php
require "connexion.php";

//fonction pour ajouter un fichier a la base de donnees
function ajouter($nom, $type, $taille) {
    global $connexion;
    //preparer la requete SQL en utilisant une requete preparee pour eviter les attaques par injection SQL
    $stmt = mysqli_prepare($connexion, "INSERT INTO fichiers (nomFichier, typeFichier, tailleFichier) VALUES (?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "ssi", $nom, $type, $taille);
    if (mysqli_stmt_execute($stmt)) {
        echo "<script>alert('Insertion réussie')</script>";
        echo "<script>window.history.back()</script>";
    } else {
        echo "<script>alert('Échec de l'insertion')</script>";
        echo "<script>window.history.back()</script>";
    }
    mysqli_stmt_close($stmt);
}

//fonction pour afficher tous les fichiers de la base de donnees
function afficher() {
    global $connexion;
    $requete = "SELECT * FROM fichiers";
    $resultat = mysqli_query($connexion, $requete);
    $files = array();
    while ($ligne = mysqli_fetch_assoc($resultat)) {
        $files[] = $ligne;
    }
    return $files;
}

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

//fonction pour mettre a jour un champ specifique dans la base de données
function mettreAJourChamp($id, $champ, $nouvelleValeur) {
    global $connexion;
   //preparer la requete SQL en utilisant une requete preparee pour eviter les attaques par injection SQL
    $stmt = mysqli_prepare($connexion, "UPDATE fichiers SET $champ = ? WHERE id = ?");
    //verifier si la preparation de la requete a reussi
    if ($stmt) {
        //lier les parametres et executer la requete
        mysqli_stmt_bind_param($stmt, "si", $nouvelleValeur, $id);
        if (mysqli_stmt_execute($stmt)) {
            echo "<script>alert('Le champ $champ a été mis à jour avec succès pour le fichier avec l'identifiant $id.')</script>";
            // echo "<script>window.history.back()</script>";
        } else {
            echo "<script>alert('Erreur lors de la mise à jour du champ $champ pour le fichier avec l'identifiant $id.')</script>";
            // echo "<script>window.history.back()</script>";
        }
        //fermer la requete preparee
        mysqli_stmt_close($stmt);
    } else {
        echo "<script>alert('Erreur lors de la preparation de la requete de mise a jour.')</script>";
        // echo "<script>window.history.back()</script>";
    }
}




?>
