<?php 
if (isset ($_POST['titre'])) {

    $titre = $_POST["titre"];

    $xml = simplexml_load_file("livres.xml");

    $expr = "/livres/livre[titre={$titre}]";


    $result = $xml->xpath($expr);

    if (count($result) > 0) {
        foreach ($result as $val){
            echo "Id de livre :" . $val->id . "<br>";
            echo "Titre du Livre : " . $val->titre . "<br>";
            echo "Auteur du Livre : " . $val->auteur . "<br>";
            echo "Date de Publication : " . $val->date_publication . "<br>";
            echo "<br>";

        }
    }}
    ?>