<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>les fichiers</title>
</head>
<body>
    <form method="post" action="<?php $_SERVER["PHP_SELF"]; ?>">
    <label for="text">Nom</label>
    <input type="text" name="nom" id="name">
    <textarea name="text" id="" cols="30" rows="10">// ajouter comentaire</textarea>
    <input type="submit" value="submit">
    </form>

    <?php 
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        if(isset($_POST["nom"]) && isset($_POST["text"])){

                if(file_exists("comentaire.txt")){
                    $fil=file("comentaire.txt");
                    if(is_array($fil)){
                    $open = fopen("comentaire.txt", "a+");	
                 fwrite($open, "nom:".$_POST["nom"].$_POST["text"]."<br>");
                 sort($fil);
                 fclose($open);
                 $open = fopen("comentaire.txt", "r");	

                //  $tex2t=  fwrite($open, "comentaire:".$_POST["text"]);
                 //   fille_gets_centents( $text2." ".$tex2t);
                 
                     while(! feof($open)) {
                     $line = fgets($open);
                     echo $line. "<br>";
                 }
                 fclose($open);

                }
    }} }
    
    
    
    
    
    
    
    ?>
</form>
</body>
</html>