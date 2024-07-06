<?php

// Chemin du fichier texte
$filePath = "connexiondata.txt";

// Ouvrir le fichier en mode lecture
$file = fopen($filePath, "r");

// Vérifier si le fichier est ouvert avec succès
if ($file) {
    // Initialiser les variables pour les données de connexion
    $server = "";
    $user = "";
    $password = "";
    $database = "";

    // Lire chaque ligne du fichier
    while (($line = fgets($file)) !== false) {
        // Diviser chaque ligne en clé et valeur
        $parts = explode(":", $line);
        // Vérifier la clé et affecter la valeur correspondante
        if (count($parts) == 2) {
            $key = trim($parts[0]);
            $value = trim($parts[1]);
            switch ($key) {
                case "Server":
                    $server = $value;
                    break;
                case "user":
                    $user = $value;
                    break;
                case "passWord":
                    $password = $value;
                    break;
                case "Database":
                    $database = $value;
                    break;
                default:
                    // Clé inconnue, ignorer
                    break;
            }
        }
    }

    // Fermer le fichier
    fclose($file);

    // Connexion à la base de données MySQL
    $mysqli = new mysqli($server, $user, $password, $database);

    // Vérifier la connexion
    if ($mysqli->connect_error) {
        die("La connexion à la base de données a échoué: " . $mysqli->connect_error);
    } else {
        echo "Connexion réussie à la base de données.";
    }

    // Vous pouvez utiliser $mysqli pour exécuter des requêtes SQL maintenant

} else {
    // Gérer le cas où le fichier ne peut pas être ouvert
    die("Impossible d'ouvrir le fichier.");
}

?>