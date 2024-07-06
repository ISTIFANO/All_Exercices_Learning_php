<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Recherche de Proprietaires</title>
</head>
<body>
    <h2>Recherche de Proprietaires</h2>

    <form action="" method="POST">
        <label for="marque">Marque du vehicule :</label>
        <input type="text" name="marque" required><br>

        <label for="modele">Modele du vehicule :</label>
        <input type="text" name="modele" required><br>

        <input type="submit" value="Rechercher">
    </form>
</body>
</html>

<?php
// Connexion a la base de donnees (utilisez votre propre logique de connexion)
require_once('connexion.php');

// Recuperation des paramètres de recherche
$marque = $_POST['marque'];
$modele = $_POST['modele'];
$query = "SELECT proprietaire.nom, proprietaire.prenom
          FROM possede
          INNER JOIN vehicule ON possede.matricule = vehicule.matricule
          INNER JOIN proprietaire ON possede.num = proprietaire.num
          INNER JOIN model ON vehicule.num_m = model.numero
          INNER JOIN marque ON model.numero = marque.numero
          WHERE marque.nom = '$marque' AND model.nom = '$modele' ";

$result = mysqli_query($connexionOrienteeObjet, $query);


echo "<h3>Resultats de la recherche :</h3>";
echo "<table border='1'>
    <tr>
        <th>Nom</th>
        <th>Prenom</th>
    </tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
        <td>" . $row['nom'] . "</td>
        <td>" . $row['prenom'] . "</td>
    </tr>";
}

echo "</table>";

// Fermeture de la connexion a la base de donnees
mysqli_close($connexionOrienteeObjet);
?>
