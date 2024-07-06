<?php
require("connexion.php");
$query = "SELECT * FROM livres";
$result = $con->query($query);
if ($result) {
    $format = "<librairie><livres></livres></librairie>";


    $file = "formation.xml";
    if (!(file_exists($file))) {

        $file = "formation.xml";
        $xml = new SimpleXMLElement($format);
        $xml->asXML($file);

    }
    $nouvLivre = new SimpleXMLElement($format);
    $nouvLivre->asXML($file);
    
    while ($ligne = $result->fetch_assoc()) {
        $xmlString = "<livre id='" . $ligne['id'] . "' titre='" . $ligne['titre'] . "'>
            <auteur>" . $ligne['auteur'] . "</auteur>
            <prix>" . $ligne['prix'] . "</prix>
            <date_publication>" . $ligne['date_publication'] . "</date_publication></livre>
            ";
        $x = simplexml_load_file($file);
        $nouvLv = new SimpleXMLElement($xmlString);
        $nouvLv = $x->addChild('livre');
        $nouvLv->addChild("auteur", $ligne['auteur']);
        $nouvLv->addChild("prix", $ligne['prix']);
        $nouvLv->addChild("titre", $ligne['titre']);
        $nouvLv->addChild("date_publication", $ligne['date_publication']);
        $nouvLv->addAttribute('id', $ligne['id']);
        $x->asXML($file);
    }
}
