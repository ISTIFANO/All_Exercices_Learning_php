<?php

$serveur ="localhost";
$utilisateur = "root";
$motDePasse = "";
$db = "rapport";
$connexion = mysqli_connect($serveur, $utilisateur, $motDePasse, $db);
if (!$connexion) {
die("Échec de la connexion : " . mysqli_connect_error());

} 
?>
