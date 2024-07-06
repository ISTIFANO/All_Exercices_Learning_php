<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>SONDAGE</h1>
    <form action="" method="post">
    numero de la carte nationale
    <input type="text" name="carte" id="">
    password 
    <input type="password" name="pass" id="">
    <h2>voter ici</h2>
       <select name="sondage" id="">
        <option value="AKHENOUSH">AKHENOUSH</option>
        <option value="BENKIRRAN">BENKIRRAN</option>
        <option value="7izbAkhar">7izbAkhar</option>

       </select>
       <input type="submit" value="vote">
    </form>
</body>
</html>
<?php

if((isset($_POST["carte"]))&&(isset($_POST["pass"]))&&isset($_POST["sondage"])){
        
    if($_COOKIE['carte'] == $_POST["carte"]){
            echo "you can't vote twice Mr.".$_COOKIE["carte"];
            echo "<br> votre vote  est:".$_COOKIE["sondage"];
        }
        else{
            setcookie("carte",$_POST["carte"],time()+3600,"/");
            setcookie("sondage",$_POST["sondage"],time()+3600,"/");
            echo "votre vote de ".$_COOKIE["sondage"]."a ete ajouter";
                
        }
}
?>