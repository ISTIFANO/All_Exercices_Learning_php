<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        if(isset($_COOKIE['couleurFond'])){
            $couleurFond=$_COOKIE['couleurFond'];
            echo "<style> body{ background-color: " . $couleurFond . ";} </style>";
        } 
    ?>
    <style>
        table{
            border-collapse: collapse;
            width:1000px;
            margin: auto;
            background-color: white;
            margin-top: 40px;
        }
        td,th{
            width:20px;
            height:20px;
            text-align: center;
        }
        a{
            background-color: white;
            text-decoration: none;
            color:brown;
        }
    </style>
</head>
</html>
<?php
require "fonctionsSQL.php";

$files = afficher();
echo "<a href='../Gestion_fichiers/formulaire.php'>Revenir a la page d'accueil</a>";
echo "<table border='1'>
      <tr>
        <th>Nom du fichier</th>
        <th>Type de fichier</th>
        <th>Taille de fichier</th>
        <th>Date de téléchargement</th>
        <th>Mettre à jour</th>
        <th>Supprimer</th>
      </tr>";
foreach($files as $file){
    echo "
      <tr>
        <td>{$file['nomFichier']}</td>
        <td>{$file['typeFichier']}</td>
        <td>{$file['tailleFichier']}</td>
        <td>{$file['dateTelechargement']}</td>
        <td><a href='mettreJour.php?id={$file['id']}'>Mettre à jour</a></td>
        <td><a href='supprimer.php?id={$file['id']}'>Supprimer</a></td>
      </tr>";
}
echo "</table>";

?>