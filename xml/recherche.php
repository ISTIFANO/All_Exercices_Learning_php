<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <label>Choissir le type d information </label>
        <select name="option">
            <option>nom</option>
            <option>auteur</option>
            <option>annee</option>
        </select>
        <label>saisir pour la recherche</label>
        <input type="text" name="rech">
        <input type="submit" value="rechercher">
    </form>
</body>

</html>
<?php
if (isset($_POST["rech"], $_POST["option"])) {
    $rech = $_POST["rech"];
    $option = $_POST["option"];
    $xml = simplexml_load_file("biblio.xml");
    $xPATHR = '//livre[' . $option . '=' . "'$rech'" . ']';
    $resultat = $xml->xpath($xPATHR);
    if($resultat){
        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>nom</th><th>auteur</th><th>annee</th></tr>";
        foreach ($resultat as $r) {
            echo "<tr>";
            echo "<td>$r->nom</td>";
            echo "<td>$r->auteur</td>";
            echo "<td>$r->annee</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    else{
        echo "<script>alert('n existe pas')</script>";
    }
   
}
?>