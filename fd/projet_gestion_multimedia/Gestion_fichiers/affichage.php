<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    if (isset($_COOKIE['couleurFond'])) {
        $couleurFond = $_COOKIE['couleurFond'];
        echo "<style> body{ background-color: " . $couleurFond . ";} </style>";
    }
    ?>
    <style>
        table {
            border-collapse: collapse;
            width: 600px;
            margin: auto;
            background-color: white;
        }

        td,
        th {
            width: 20px;
            height: 20px;
            text-align: center;
        }

        a {
            background-color: white;
            text-decoration: none;
            color: brown;
        }

        h1 {
            text-align: center;
        }
    </style>
</head>

</html>

<?php
$repertoire = "C:\wamp64\www\mesSitesweb\projet_gestion_multimedia\Gestion_fichiers\Telechargements";
$fichiers = scandir($repertoire);
// Afficher un lien pour permettre à l'utilisateur de revenir à la page d'accueil.
echo "<a href='formulaire.php'>Revenir a la page d'accueil</a>";
echo "<div><h1><em>Tableau  des fichiers telecharges  avec des liens pour les visualiser et les supprimer.</em></h1>";
echo "<table border=1>
      <tr>
        <th>Les Fichiers</th><th>Visualiser</th><th>Supprimer</th>
      </tr>";
if ($fichiers !== false) { // Vérifier si le répertoire existe et peut etre ouvert
    foreach ($fichiers as $fichier) { // Parcourir les fichiers
        if ($fichier != '.' && $fichier != '..') { // Ignorer les racines
            echo "<tr>";
            echo "<td>" . $fichier . "</td>";
            //urlencode() : encode le nom du fichier pour que les caracteres speciaux soient transmis correctement dans l'URL
            echo '<td><a href="visualiser_fichier.php?fichier=' . urlencode($fichier) . '">Visualiser</a></td>';
            echo '<td><a href="supprimer_fichier.php?fichier=' . urlencode($fichier) . '">Supprimer</a></td>';
            echo "<tr>";
        }
    }
    echo "</table></div>";
} else {
    echo "<script>alert('Impossible d'ouvrir le repertoire.')<script>";
    echo "<script>window.history.back()</script>";
}
?>