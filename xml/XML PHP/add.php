<?php
require("connexion.php");

// Récupération des données du formulaire
$id_etudiant = $_POST['id'];
$nom_etudiant = $_POST['nom'];
$nom_uv = $_POST['uv'];
$duree_uv = $_POST['duree'];
$note_uv = $_POST['note'];



    // Format du fichier XML
    $format = "<iut></iut>";

    // Chemin du fichier XML
    $file = "iut.xml";

    // Création du fichier XML s'il n'existe pas encore
    if (!(file_exists($file))) {
        $xml = new SimpleXMLElement($format);
        $xml->asXML($file);
    

    // Création d'un nouveau élément étudiant
    $nouvel_etudiant = new SimpleXMLElement("<etudiant></etudiant>");
    $nouvel_etudiant->addAttribute('id', $id_etudiant);
    $nouvel_etudiant->addAttribute('nom', $nom_etudiant);

    // Création d'un nouvel élément UV
    $nouvelle_uv = $nouvel_etudiant->addChild('uv');
    $nouvelle_uv->addChild('nom', $nom_uv);
    $nouvelle_uv->addChild('durée', $duree_uv);
    $nouvelle_uv->addChild('note', $note_uv);

    // Chargement du fichier XML existant
    $xml = simplexml_load_file($file);

    // Ajout du nouvel étudiant au fichier XML
    $nouvel_etudiant = $xml->addChild('etudiant');
    $nouvel_etudiant->addAttribute('id', $id_etudiant);
    $nouvel_etudiant->addAttribute('nom', $nom_etudiant);
    $uv = $nouvel_etudiant->addChild('uv');
    $uv->addChild('nom', $nom_uv);
    $uv->addChild('durée', $duree_uv);
    $uv->addChild('note', $note_uv);

    // Sauvegarde des modifications dans le fichier XML
    $xml->asXML($file);

    echo "Données insérées avec succès.";
} else {
    echo "Erreur lors de l'insertion des données.";
}

// Fermeture de la connexion à la base de données
$con->close();
?>
