<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    if (isset($_COOKIE['couleurFond'])) {
        $couleurFond = $_COOKIE['couleurFond'];
        echo "<style> body{ background-color: " . $couleurFond . ";} </style>";
    }
    ?>
    <link rel="stylesheet" href="../style.css">
    <style>
        .formulaire {
            height: 150px;
        }
    </style>
</head>

<body>
    <div class="lien">
        <a href="../Gestion_fichiers/formulaire.php">Revenir a la page precedente</a>
    </div>
    <div class="formulaire">
        <form action="" method="post">
            <h1>Choisez l'une des options</h1>
            <select name="choix" id="">
                <option value="redimensionner">Redimensionner</option>
                <option value="recadrer">Recadrer</option>
            </select>
            <input type="submit" value="Submit" name="sub">
        </form>
    </div>
</body>

</html>

<?php
if (isset($_POST['sub'])) {
    $choix = $_POST['choix'];
    if ($choix == "redimensionner") {
        header("location:redimensionner.html");
        exit();
    } else {
        header("location:recadrer.html");
        exit();
    }
}

?>