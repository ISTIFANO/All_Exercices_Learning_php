<!DOCTYPE html>
<?php 
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>accueil</title>
</head>
<body>
    <form action="" method="post">
        <label for="user">Enter votre nom</label>
        <input type="text" name="nom" id="">
        <label for="user">Enter votre mot de passe</label>
        <input type="password" name="password" id=""> <br>
<input type="submit" value="submit">
    </form>
    
<?php 
$regex="/^[A-Za-z\d]+$/";
$regex2="/^[A-Z][a-z]+$/";

$inputPassword="123amir";
$inputUser="Amir";



if(!empty($_POST["nom"]) && !empty($_POST["password"])){
    
    if(preg_match($regex2,$_POST["nom"])&& preg_match($regex,$_POST["password"])){


        $_SESSION["user"]=$_POST["nom"];
        $_SESSION["password"]=$_POST["password"];


if(!($_SESSION["user"]==$inputPassword) && !($_SESSION["password"]==$inputPassword) ){

    echo "<script> alert('password and login not correct ');</script>";



}
    
else{

    
                     echo "<h1> Hi Mr ". $_SESSION["user"]."</h1>";
                     echo "<table border=1> <tr><th> <a href='pagehtml.php'>pagehtml</a></th><th><th>nb_visite</th></tr>" ;
                     echo " <tr><th> <a href='pagephp.php'>pagehtml</a></th></tr>" ;


    




}}
}









?>
</body>
</html>