<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="reserverChambre.php" method="post">


    ville :  <?php
$data = fopen("villes.txt","r");
while(!feof($data)){
    echo "<option value=".fgets($data).">".fgets($data)."</option>";
}

fclose($data);
?>

typeHotel :
</label><br>
 <select name="typeHotel" id="">
 <option value="yzdvhzdh">GGGGGG</option>
 <option value="yzdvhzdh">HHSHS</option>
 <option value="yzdvhzdh">AEARAT</option>
 <option value="yzdvhzdh">BDBD</option>


 </select>

 <input type="submit" value="Done">
    </form>



</body>
</html>
<?php
session_start();
include "connexion.php";
include "authentificationClient.php";
$idClient = $_SESSION["idClient"] ;
$query = "SELECT * FROM hotels";
$res = $con->query($query);

echo "<table border ='2'> ";
    echo   "<tr><td>GGGSGGS</td><td>GGGSGGS</td><td>GGGSGGS</td><td>GGGSGGS</td><td>GGGSGGS</td></tr>";
    while ($lign = $res->fetch_assoc()) {
        echo "<tr><td>{$lign['Designation']}</td><td>{$lign['adresse']}</td><td>{$lign['ville']}</td><td>{$lign['Codepostale']}</td><td>{$lign['TypeHotel']}</td><td><a href ='choixChambre.php?idClient=$idClient'>Choisir</a></td></tr>";
    }
    

?>