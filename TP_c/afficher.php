<?php 
include ("connexion.php");

$query2 = "SELECT * FROM livres";
$req = $con->query($query2);


echo "<table border='1'>";
echo "<tr><th>Titre</th><th>Auteur</th><th>Prix</th><th>Date de publication</th></tr>";
while($ligne = $req->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$ligne["titre"]."</td>";
    echo "<td>".$ligne["auteur"]."</td>";
    echo "<td>".$ligne["prix"]."</td>";
    echo "<td>".$ligne["date_publication"]."</td>";
    echo "</tr>";
}
echo "</table>";

$con->close();
?>