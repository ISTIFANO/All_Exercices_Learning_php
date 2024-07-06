<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier et supprimer</title>
</head>

<body>
    <?php
    require("connexion.php");
    $query = "SELECT * FROM livres ORDER BY id";
    $result = $con->query($query);
    if ($result) {
        echo "<table border=1>
        <tr><th>ID</th>
        <th>Titre</th>
        <th>Auteur</th>
        <th>Prix</th>
        <th>Date de Publication</th>
        <th>Modifier</th>
        <th>Supprimer</th>
        </tr>";
        while ($ligne = $result->fetch_assoc()) {
            echo "<tr>
            <td>" . $ligne['id'] . "</td>
            <td>" . $ligne['titre'] . "</td>
            <td>" . $ligne['auteur'] . "</td>
            <td>" . $ligne['prix'] . "</td>
            <td>" . $ligne['date_publication'] . "</td>
            <td><a href='modifier.php? id=" . $ligne['id'] . "'>Modifier</a></td>
            <td><a href='supprimer.php? id=" . $ligne['id'] . "'>Supprimer</a></td>
            </tr>";
        }
        echo "</table>";
    }
    ?>
</body>

</html>