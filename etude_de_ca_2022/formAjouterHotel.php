<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="insererHotel.php" method="post">
<h1>Ajouer Hotel</h1>

<label for="design">Designation : </label> 
<input type="text" name="design" id="">
<label for="adresse">adresse : </label>
 <input type="text" name="adresse" id="">
<label for="villes">ville : </label> 
<select name="villes" id="">
<?php
$data = fopen("villes.txt","r");
while(!feof($data)){
    echo "<option value=".fgets($data)."></option>";
}

fclose($data);
?>
</select>

</select>
<label for="CP">code postale : </label> 
<input type="text" name="CP" id="">
<label for="typeH">Type Hotel : </label><br>
 <select name="typeHotel" id="">
 <option value="yzdvhzdh">GGGGGG</option>
 <option value="yzdvhzdh">HHSHS</option>
 <option value="yzdvhzdh">AEARAT</option>
 <option value="yzdvhzdh">BDBD</option>


 </select>
<label for="NombreCh">Nombre Chambre: </label> 
<input type="text" name="NombreCh" id="">
<label for="TelHotel">TEl Hotel : </label> 
<input type="text" name="TelHotel" id="">
<label for="Email">E mail : </label> 
<input type="text" name="Email" id="">


<input type="submit" value="GG">
    </form>
</body>
</html>

