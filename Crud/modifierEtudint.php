<?php 
require_once("connexion.php");

// Récupération des données du formulaire
$nom = $_POST["nom"];
$email = $_POST["email"];
$image = $_FILES["image"]["name"];
$image_tmp = $_FILES["image"]["tmp_name"];
move_uploaded_file($image_tmp, "./image/$image");

// Requête SQL pour insérer les données dans la table
$code = $_GET["Code"]; // Assurez-vous de récupérer également le code du formulaire
$query = "UPDATE etudients SET Code=$code, Nom='$nom', Email='$email', Photo='$image' WHERE Code=$code";

// Exécution de la requête SQL
if ($db->query($query) === TRUE) {
    echo "Mise à jour réussie.";
} else {
    echo "Erreur : " . $query . "<br>" . $db->error;
}
// header("Location: afficher_toutes.php");
?>
