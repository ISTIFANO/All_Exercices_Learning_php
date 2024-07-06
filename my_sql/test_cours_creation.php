<?php

$serveur = "localhost";
$mp = "";
$utilisateur = "root"; // Utiliser 'root' en minuscules pour MySQL
$nom_base_de_donnees = "testcreation";

try {
    // Créer une connexion sans spécifier la base de données
    $connexion = new mysqli($serveur, $utilisateur, $mp, $nom_base_de_donnees);

    // Vérifier la connexion                                                                        
    if ($connexion->connect_error) {
        die("Erreur de connexion à la base de données : " . $connexion->connect_error);
    } else {
        echo "Connexion réussie !";
    }
} catch (Exception $e) {
    die("Erreur lors de la création de la base de données : " . $e->getMessage());
}

// rename a table RENAME TABLE $nom_base_de_donnees.$ancien_nom_table TO $nom_base_de_donnees.$nouveau_nom_table

try {
    // Utilisation de PDO pour la manipulation de la base de données
    $connexionPDO = new PDO("mysql:host=$serveur;dbname=$nom_base_de_donnees", "$utilisateur", "");
    
    // Préparer la requête d'insertion
    $requete = $connexionPDO->prepare("INSERT INTO table22 (id, nom, prenom, adresse, ville) VALUES (:id, :nom, :prenom, :adresse, :ville)");

    // Binder les paramètres
    $requete->bindParam(':id', $_REQUEST['id']);
    $requete->bindParam(':nom', $_REQUEST['nom']);
    $requete->bindParam(':prenom', $_REQUEST['prenom']);
    $requete->bindParam(':adresse', $_REQUEST['adresse']);
    $requete->bindParam(':ville', $_REQUEST['ville']);

    // Exécuter la requête
    $requete->execute();
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}


// Code commenté pour insertion de données
try {
    $inser = 'INSERT INTO $nom_base_de_donnees (id, nom,prenom, adresse, ville) VALUES (9, "amir","el amir", "loudaya", "marrakech")';
    $connexion->query($inser);
} catch (Exception $e) {
    die("Erreur lors de l'insertion de données : " . $e->getMessage());
}

// Code commenté pour création de table
try {
    $table='CREATE TABLE $nom_base_de_donnees(
        id int not null,
        nom varchar(255) not null,
        prenom varchar(255) not null,
        adresse varchar(255),
        ville   varchar(255) not null
    );';

    $connexion->query($table);
} catch(Exception $e) {
    die("Erreur lors de la création de la base de données : " . $table->getMessage());
}


?>
