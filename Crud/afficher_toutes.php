<?php
require_once("connexion.php");

$requete = "SELECT * FROM etudients"; 

$resultat = $db->query($requete);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des étudiants</title>
</head>
<body>
    <table border="2">
        <tr>
            <th>Code:</th>
            <th>Nom:</th>
            <th>Email:</th>
            <th>Photo:</th>
        </tr>
        <?php while($row = $resultat->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row["Code"] ?></td>
                <td><?php echo $row["Nom"] ?></td>
                <td><?php echo $row["Email"] ?></td>
                <td><img src="./image/<?php echo $row["Photo"] ?>" alt=""></td> 
                <td><a href="suprimer.php?Code=<?php echo $row["Code"] ?>">suprimer</a></td>
                        <td><a href="modifier.php?Code=<?php echo $row["Code"]?>">modifier</a></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
