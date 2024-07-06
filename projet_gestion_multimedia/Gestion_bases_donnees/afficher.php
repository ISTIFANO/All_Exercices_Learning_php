<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Title Here</title>
    <?php
        if(isset($_COOKIE['couleurFond'])){
            $couleurFond=$_COOKIE['couleurFond'];
            echo "<style> body{ background-color: " . $couleurFond . ";} </style>";
        } 
    ?>
    <style>
        table {
            border-collapse: collapse;
            width: 1000px;
            margin: auto;
            background-color: white;
            margin-top: 40px;
        }
        td, th {
            width: 20px;
            height: 20px;
            text-align: center;
        }
        a {
            background-color: white;
            text-decoration: none;
            color: brown;
        }
    </style>
</head>
<body>

<?php
require "connexion.php";

function afficher() {
    global $connexion;
    $requete = "SELECT * FROM fichiers";
    $resultat = mysqli_query($connexion, $requete);
    $files = array();
    while ($ligne = mysqli_fetch_assoc($resultat)) {
        $files[] = $ligne;
    }
    return $files;
}

$files = afficher();
?>

<a href='affichage.php'>Revenir a la page d'accueil</a>

<table border='1'>
    <tr>
        <th>Nom du fichier</th>
        <th>Type de fichier</th>
        <th>Taille de fichier</th>
        <th>Date de téléchargement</th>
        <th>Mettre à jour</th>
        <th>Supprimer</th>
    </tr>
    <?php foreach($files as $file): ?>
    <tr>
        <td><?php echo $file['nomFichier']; ?></td>
        <td><?php echo $file['typeFichier']; ?></td>
        <td><?php echo $file['tailleFichier']; ?></td>
        <td><?php echo $file['dateTelech']; ?></td>

        <td>  <a href="mettreJour.php?id=<?php echo $file['id']; ?>">Mettre à jour</a></td>

        <td><a href='supprimer.php?id=<?php echo $file['id']; ?>'>Supprimer</a></td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
