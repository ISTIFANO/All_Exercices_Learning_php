<?php
require "connexion.php";

echo "<table border=1>";
echo "<tr>
    <th>Numero de vol</th>
    <th>Numero de pilote</th>
    <th>Numero d'avion</th>
    <th>Ville de depart</th>
    <th>Ville d'arrivee</th>
    <th>Heure de depart</th>
    <th>Heure d'arrivee</th>
    <th>Action</th>
    </tr>";
$requete="SELECT * FROM vol";
require "traitement.php";
executerSelect($requete);
echo '</table>';
?>