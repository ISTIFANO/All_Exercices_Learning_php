<?php
// pour récupérer les données du formulaire
$nom_livre = htmlspecialchars($_POST['nom_livre']);
$auteur = htmlspecialchars($_POST['auteur']);
$annee = htmlspecialchars($_POST['annee']);

// pour cree le fichier XML
$nom_fichier = 'bibliographie.xml';
if (file_exists($nom_fichier)) {
    $xml = simplexml_load_file($nom_fichier);
} else {
    $xml = new SimpleXMLElement('<bibliographie></bibliographie>');
}

// Ajouter les données au fichier XML
$nouveau_livre = $xml->addChild('livre');
$nouveau_livre->addChild('nom', $nom_livre);
$nouveau_livre->addChild('auteur', $auteur);
$nouveau_livre->addChild('annee', $annee);

// Sauvegarder les modifications dans le fichier XML
$xml->asXML($nom_fichier);

// Afficher le contenu du fichier XML
echo "Contenu du fichier XML:<br>";
echo htmlentities(file_get_contents($nom_fichier));

?>