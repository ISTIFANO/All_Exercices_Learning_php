<?php

include "connexion.php";
$requete = 'select * from model order by num_mo';
$resultat = $conn->query($requete);

if (!$resultat) {
    echo "erreur d'affichage ";
} else {
    echo "<table border=1>";
    echo "<tr>";

    $ligne = $resultat->fetch_fields();

    foreach ($ligne as $key) {
        echo "<th>" . $key->orgname . "</th>";
    }

    echo "</tr>";

    while ($colonne = $resultat->fetch_array()) {
        echo "<tr>";

        foreach ($colonne as $cle => $valeur) {
            echo "<td>" . $valeur . "</td>";
        }

        echo "</tr>";
    }

    echo "</table>";
}

?>
