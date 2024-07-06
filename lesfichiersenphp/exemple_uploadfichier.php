<?php
$cheminDefichier = 'C:\wamp64\www\php project\lesfichiersenphp\\';

// Types de fichiers autorisés
$typesAutorises = ['image/jpeg', 'image/jpg'];

if ($_FILES["fich"]["error"] == UPLOAD_ERR_OK) {
    // Vérification de la taille du fichier
    $tailleMax = ini_get('upload_max_filesize');
    if ($_FILES["fich"]["size"] <= $tailleMax) {
        // Vérification du type de fichier
        if (in_array($_FILES["fich"]["type"], $typesAutorises)) {
            // Tout est correct, le fichier peut être téléchargé
            echo "Téléchargement réussi";

            // Génération d'un nom unique pour le fichier téléchargé
            $nNom = uniqid('uploaded_', true) . '.' . $_FILES["fich"]["name"];
            $chemin1 = $cheminDefichier . $nNom;

            // Déplacement du fichier téléchargé vers le répertoire cible
            if (move_uploaded_file($_FILES["fich"]["tmp_name"], $chemin1)) {
                echo "Téléchargement réussi !";
            } else {
                echo "Erreur lors du déplacement du fichier !";
            }
        } else {
            echo "Erreur lors du téléchargement : Type de fichier non autorisé";
        }
    } else {
        echo "Erreur lors du téléchargement : Taille du fichier trop grande";
    }
} else {
    echo "Erreur lors du téléchargement du fichier !";
}
?>
