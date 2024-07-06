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
        div{
            background-color: black;
            margin: auto;
            color:white;
            width: 400px;
            height: 250px;
            text-align: center;
        }
        h1{
            padding-top: 10px;
        }
        a{
            width: 200px;
            background-color: white;
            text-align: center;
            text-decoration: none;
            color: brown;
        }
        input[type="submit"]{
            background-color: blue;
        }
        select{
            width: 100px;
        }
    </style>
</head>
<body>
    <a href="afficher.php">Revenir a la page precedente</a>
    <div>
    <h1>Mettre a Jour</h1>
    <form action="" method="post">
    Choisir le champ a modifier : <br><br><select name="champ">
        <option value="nomFichier">Nom</option>
        <option value="typeFichier">Type</option>
    </select><br><br>
    Nouvelle valeur : <br><br><input type='text' name='nvValeur'><br><br>
    <input type="submit" value="Modifier" name="modifier">
    </form>
    </div>
</body>
</html>
<?php
if(isset($_POST['modifier'])){
    require "fonctionsSQL.php";
    $id = $_GET['id'];
    $champ = $_POST['champ'];
    $nvValeur = $_POST['nvValeur'];
    mettreAJourChamp($id, $champ, $nvValeur);

}
?>