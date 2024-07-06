<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<h1>Choisir votre chambre</h1>

<form action="" method="post">

Chmabre 
<select name="typeCh" id="">
 <option value="XL">XL</option>
 <option value="XXLL">XXLL</option>
 <option value="LGG">LGG</option>
 <option value="MAX">MAX</option>


 </select>
arriver
<input type="time" name="arriver" id="">
depart
<input type="time" name="depart" id="">
<input type="submit" value="done">
</form>







<?php
include "connexion.php";
$typeCh  = $_POST["typeCh"];
$arriver  = $_POST["arriver"];
$depart  = $_POST["depart"];


$query = "INSERT  INTO  chambres VALUES('typeCh','$arriver','$depart') ";
if ($con->query($query) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $con->error;
}
$con->close();


?>

