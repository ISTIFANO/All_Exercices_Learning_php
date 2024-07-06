<?php
    $nomServeur='localhost';
    $nomUtilisateur='root';
    $mtp='';
    $nomBaseDonne='bdvols';
    $connexion=new mysqli($nomServeur,$nomUtilisateur,$mtp,$nomBaseDonne);
    if($connexion->connect_error){
    die('Echec de la connexion : '.$connexion->connect_error);
    }
?>