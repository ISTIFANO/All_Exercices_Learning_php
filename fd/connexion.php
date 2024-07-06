<?php
$nomUtilisateur='root';
$nomServeur='localhost';
$mtp='';
$nomBaseDonne='vols';
$connexion=new mysqli($nomServeur,$nomUtilisateur,$mtp,$nomBaseDonne);
//$connexion=new mysqli("localhost", "root", "", "salaries", "3306");
if($connexion->connect_error){
 die('Echec de la connexion : '.$connexion->connect_error); 
}
// echo 'Connexion reussi';
?>

