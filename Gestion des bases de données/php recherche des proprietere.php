<?php
// qs 10
// Récupération des données du formulaire
$marque = $_POST['marque'];
$modele = $_POST['modele'];

// Inclusion du fichier de connexion
require('connexion.php');

// Création de l'objet de connexion à la base de données
$connexion = ObjetDeConnexion('voitures');

// Requête SQL pour récupérer les données
$sql = "SELECT * FROM proprieter, marque, modele 
        WHERE marque.Nom = '$marque' AND modele.Nom = '$modele'";
$result = $connexion->query($sql);

// Affichage du résultat dans un tableau HTML
echo "<h2>LE RÉSULTAT DE LA RECHERCHE</h2>";
echo "<table> 
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prénom</th>
    </tr>";

while($ligne = $result->fetch_assoc()) {
    echo "<tr>
        <td>".$ligne['id']."</td>
        <td>".$ligne['nom']."</td>
        <td>".$ligne['prenom']."</td>
    </tr>";
}

echo "</table>";
?>
