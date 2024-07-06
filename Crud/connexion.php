<?php 
$user = "root";
$server = "localhost";
$motpass = "";
$database = "schools";

// Connexion à la base de données
$db = new mysqli($server, $user, $motpass, $database);

// Vérification de la connexion
if ($db->connect_error) {
    die("Erreur de connexion : " . $db->connect_error);
}
?>