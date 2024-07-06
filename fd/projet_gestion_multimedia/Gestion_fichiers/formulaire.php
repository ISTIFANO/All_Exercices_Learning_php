<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        if(isset($_COOKIE['couleurFond'])){
            $couleurFond=$_COOKIE['couleurFond'];
            echo "<style> body{ background-color: " . $couleurFond . ";} </style>";
        }   
    ?>
    <link rel="stylesheet" href="../style.css">

</head>
<body>
    <div class="lien">
        <a href="../Sessions_et_Cookies/identification.php">Revenir a la page precedente</a>
    </div>
    <div class="formulaire">
        <h1><em>Télécharger des fichiers multimédias</em></h1>
        <form action="traitement.php" method="post" enctype="multipart/form-data">
            <input type="file" name="fichier"/><br><br>
            <input type="submit" name="telecharger" value="Telecharger"/>
            <input type="submit" name="afficher" value="Afficher">
            <input type="submit" name="redimensionner" value="Redimensionner"><br><br>
            <input type="submit" value="Gestion de base de donnees">
        </form>
    </div>
</body>
</html>
