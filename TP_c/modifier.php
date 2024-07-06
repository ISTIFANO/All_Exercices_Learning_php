<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier</title>
</head>

<body>
    <form method="post" action="">
        <select name="Livres">
            <option value="titre">titre</option>
            <option value="auteur">auteur</option>
            <option value="prix">prix</option>
            <option value="date de publication">date de publication</option>
        </select><br>
        <label>Valeur</label><input type="text" name="valeur">
        <input type="submit" value="submit" >
    </form>
</body>

</html>
<?php
require("connexion.php");
$id  = $_GET['id'];
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $option = $_POST["Livres"];
 $valeur = $_POST["valeur"];
    $query = "UPDATE livres SET $option= '$valeur' WHERE id = $id";
    $resu = $con->query($query);
    if ($resu) {
        header("Location: bonus.php");
    }
}

?>