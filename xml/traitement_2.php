<?php 
if(isset($_POST["nom"]) && isset($_POST["Auteur"]) && isset($_POST["Annee"])) {
    $nomlivre = htmlspecialchars($_POST["nom"]);
    $auteur = htmlspecialchars($_POST["Auteur"]);
    $annee = htmlspecialchars($_POST["Annee"]);
    
    $fichier = "biblio.xml";
    $value = "
    <livre>
        <nom>$nomlivre</nom>
        <auteur>$auteur</auteur>
        <annee>$annee</annee>
    </livre>
    ";

if (!file_exists($fichier)) {
        $contenue = '<?xml version="1.0" encoding="UTF-8" ?>
    <bibliographie>
        ' . $value . '
    </bibliographie>';
        file_put_contents($fichier, $contenue);
    } else {
        $file = fopen($fichier, 'r');
        $contenue2 = "";
        while (!feof($file)) {
            $contenue2 .= fgets($file);
        }
        fclose($file);
        
        $file = fopen($fichier, "w");
        $contenue2 = str_replace("</bibliographie>", "", $contenue2);
        fwrite($file, $contenue2 . $value . "</bibliographie>");
        fclose($file);
    }
    
    echo $nomlivre . " de " . $auteur . " date de " . $annee;
}

$xml = simplexml_load_file($fichier);
echo "<table border='1'>";
echo "<tr><th>nom</th><th>auteur</th><th>annee</th></tr>";
foreach ($xml->children() as $livre) {
    echo "<tr>";
    echo "<td>$livre->nom</td>";
    echo "<td>$livre->auteur</td>";
    echo "<td>$livre->annee</td>";
    echo "</tr>";
}
echo "</table>";
?>