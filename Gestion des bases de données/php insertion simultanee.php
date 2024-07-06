<?php
// Les données du propriétaire
$id_proprietaire = $_POST['id'];
$nom_proprietaire = $_POST['nom'];
$prenom_proprietaire = $_POST['prenom'];

// L'ID du modèle
$id_modele = $_POST['idmod'];

// La marque
$num_marque = $_POST['num_marque'];
$nom_marque = $_POST['nom_marque'];

// Inclusion du fichier de connexion
require('connexion.php');
$connexion = ObjetDeConnexion('voitures');

// Insertion des données du propriétaire dans la table "proprietere"
$sql_insert_pro = "INSERT INTO proprietere VALUES ($id_proprietaire, '$nom_proprietaire', '$prenom_proprietaire')";
$result_insert_pro= $connexion->query($sql_insert_pro);

// Sélection du nom du modèle en fonction de l'ID de la marque
$sql_select_modele = "SELECT nomM FROM modele, marque WHERE Num_mar = $num_marque AND modeles.Num_mar = $num_marque";
$result_select_modele = $connexion->query($sql_select_modele);
?>
