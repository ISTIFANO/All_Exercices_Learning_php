<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex3 tp</title>
</head>
<body>
<form action="" methode="get">
<label for="name">ENTRE VOTRE NOM</label>
<input type="text" name="name" id=""><BR>
<INPUT TYPE="radio" NAME="sex1" id="sex1">Famme<BR>
<INPUT TYPE="radio" NAME="sex2" id="sex2">Homme<BR>
<button>submit</button>
<?php 


if(isset($_GET["sex1"]) && isset($_GET["name"])){
echo "<br>";
    echo "Bonjour Mme","   ",$_GET["name"];

}elseif( isset($_GET["sex2"]) && isset($_GET["name"])){
    echo "<br>";
    echo "Bonjour Mr","   ",$_GET["name"];

}


?>
</body>
</html>