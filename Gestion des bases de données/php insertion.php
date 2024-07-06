<?php
// qs7
// Inclusion du fichier de connexion
require('connexion.php');

// Récupération des données du formulaire
$id_modele = $_POST['idm'];
$nom_modele = $_POST['nom'];
$num_modele = $_POST['num'];

// Création de l'objet de connexion à la base de données
$connexion = ObjetDeConnexion('modele');

// Requête SQL d'insertion dans la table "model"
$sql_insert_modele = "INSERT INTO model VALUES ($id_modele, '$nom_modele', $num_modele)";
$result_insert_modele = $connexion->query($sql_insert_modele);

// Vérification de la réussite de l'insertion
if ($result_insert_modele) {
    echo "Insertion réussie";
} else {
    echo "Échec d'insertion";
}
?>
