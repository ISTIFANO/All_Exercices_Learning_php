<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agence Immobilière</title>
</head>
<body>

<h2>Choisissez une option :</h2>

<form action="traitement.php" method="post">
    <input type="submit" name="vendre" value="Vendre">
    <input type="submit" name="acheter" value="Acheter">
    <input type="submit" name="louer" value="Louer">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["vendre"])) {
        header("Location: vendre.php");
        exit;
    } elseif (isset($_POST["acheter"])) {
        header("Location: acheter.php");
        exit;
    } elseif (isset($_POST["louer"])) {
        header("Location: louer.php");
        exit;
    }
}
?>

</body>
</html>
