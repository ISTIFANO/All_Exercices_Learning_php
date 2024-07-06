<?php
// Inclusion du fichier de connexion à la base de données
require_once("connexion.php");

// Récupération du code de l'étudiant à supprimer depuis les paramètres GET
$code = $_GET["Code"];

// Requête SQL pour supprimer l'étudiant avec le code spécifié
$requete = "DELETE FROM etudients WHERE Code = '$code'"; 

// Exécution de la requête de suppression
$db->query($requete);

// Redirection vers une autre page après la suppression
header("Location: afficher_toutes.php");
?>

