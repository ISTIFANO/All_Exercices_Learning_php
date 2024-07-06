<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Écrire un formulaire qui demande le Nom et l’âge de l’utilisateur. Le bouton submit 
    de ce formulaire provoquera l’affichage d’une page qui saluera l’utilisateur avec cette phrase :
         « Bienvenu …………., vous avez ….. ans. » (avec les bonnes valeurs, bien entendu). -->

         <form action="" methode="get">
<label for="name">ENTRE VOTRE NOM</label>
<input type="text" name="name" id="">
<label for="age">ENTRE VOTRE AGE</label>
<input type="number" name="age" id=""> <br>
<button type="submit">submit</button>

         </form>

         <?php
         
         if (isset($_GET['name']) && isset($_GET['age'])){
        echo "Bienvenu".$_GET['name'] , "<br>";
        echo "vous avez  :".$_GET['age'] ,"     ans", "<br>";

         }
         
         
         
         ?>
</body>
</html>