<?php

$serveur = "localhost" ;
$user = "root" ;
$pwd = "" ;
$database = "Examen2022" ;

$con = new mysqli($serveur , $user ,$pwd , $database);

if($con->connect_error){
  die("erreur de connexion " . $con->connect_error);
}

?>