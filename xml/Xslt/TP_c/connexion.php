<?php

$serveur = "localhost";
$user = "root";
$pwd = "";
$database = "librairie" ;

$con = new mysqli($serveur , $user ,$pwd , $database);

if($con->connect_error){
  die("erreur de connexion " . $con->connect_error);
}

?>