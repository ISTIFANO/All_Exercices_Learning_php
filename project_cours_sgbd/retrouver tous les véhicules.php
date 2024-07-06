<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Recherche de Vehicules par Proprietaire</title>
</head>
<body>
    <h2>Recherche de Vehicules par Proprietaire</h2>

    <form action="traitement_recherche_vehicules.php" method="POST">
        <label for="nom">Nom du proprietaire :</label>
        <input type="text" name="nom" required><br>

        <label for="prenom">Prenom du proprietaire :</label>
        <input type="text" name="prenom" required><br>

        <input type="submit" value="Rechercher">
    </form>
</body>
</html>


<?php
// Connexion a la base de donnees (utilisez votre propre logique de connexion)
require_once('connexion.php');

// Recuperation des parametres de recherche
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];

// Requete SQL pour recuperer les vehicules possedes par la personne specifiee
$query = "SELECT vehicule.matricule, vehicule.nb_place, vehicule.puissance, vehicule.annee_s, model.nom AS modele, marque.nom AS marque
          FROM possede
          INNER JOIN vehicule ON possede.matricule = vehicule.matricule
          INNER JOIN proprietaire ON possede.num = proprietaire.num
          INNER JOIN model ON vehicule.num_m = model.numero
          INNER JOIN marque ON model.numero = marque.numero
          WHERE proprietaire.nom = '$nom' AND proprietaire.prenom = '$prenom'";

$result = mysqli_query($connexionOrienteeObjet, $query);

// Affichage des resultats sous forme de tableau HTML
echo "<h3>Resultats de la recherche :</h3>";
echo "<table border='1'>
    <tr>
        <th>Matricule</th>
        <th>Nombre de places</th>
        <th>Puissance</th>
        <th>Annee de sortie</th>
        <th>Modele</th>
        <th>Marque</th>
    </tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
        <td>" . $row['matricule'] . "</td>
        <td>" . $row['nb_place'] . "</td>
        <td>" . $row['puissance'] . "</td>
        <td>" . $row['annee_s'] . "</td>
        <td>" . $row['modele'] . "</td>
        <td>" . $row['marque'] . "</td>
    </tr>";
}

echo "</table>";

// Fermeture de la connexion  a la base de donnees
mysqli_close($connexionOrienteeObjet);
?>
