<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recherche d'étudiants et d'UV</title>
</head>
<body>

<h2>Recherche d'étudiants et d'UV</h2>

<form action="recherche.php" method="post">
    <label for="tri">Trier par :</label>
    <select id="tri" name="tri">
        <option value="nom_etudiant">Nom de l'étudiant</option>
        <option value="nom_uv">Nom de l'UV</option>
    </select>
    <input type="submit" value="Rechercher">
</form>

<hr>

<?php
// Traitement du formulaire de recherche
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération de la valeur de tri choisie
    $tri = $_POST['tri'];

    // Chargement du fichier XML
    $xml = simplexml_load_file("iut.xml");

    // Trie des étudiants par nom
    if ($tri == 'nom_etudiant') {
        $etudiants = [];
        foreach ($xml->etudiant as $etudiant) {
            $etudiants[] = (string)$etudiant['nom'];
        }
        sort($etudiants);
        
        // Affichage des noms d'étudiants par ordre alphabétique
        echo "<h3>Noms des étudiants par ordre alphabétique :</h3>";
        echo "<ul>";
        foreach ($etudiants as $nom_etudiant) {
            echo "<li>$nom_etudiant</li>";
        }
        echo "</ul>";
    }
    // Liste des UV et leur nom
    else if ($tri == 'nom_uv') {
        // Affichage des UV et leur nom
        echo "<h3>Liste des UV et leur nom :</h3>";
        echo "<ul>";
        foreach ($xml->etudiant as $etudiant) {
            echo "<li><strong>Nom de l'étudiant :</strong> " . $etudiant['nom'] . "</li>";
            echo "<ul>";
            foreach ($etudiant->uv as $uv) {
                echo "<li><strong>Nom de l'UV :</strong> " . $uv->nom . "</li>";
                echo "<li><strong>Durée :</strong> " . $uv->durée . "</li>";
                echo "<li><strong>Note :</strong> " . $uv->note . "</li>";
            }
            echo "</ul>";
        }
        echo "</ul>";
    }
}
?>

</body>
</html>
