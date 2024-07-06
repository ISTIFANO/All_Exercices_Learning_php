<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    require "connexion.php";
    $nVol=(int) $_POST['nv'];
    $nPilote=(int) $_POST['np'];
    $nAvion=(int) $_POST['na'];
    $villeD=$_POST['vd'];
    $villeA=$_POST['va'];
    $heureD=$_POST['hd'];
    $heureA=$_POST['ha'];
    //echo $nVol." ".$nPilote.$nAvion.$villeD.$villeA.$heureD.$heureA;
    $motifDate="/^[0-9]{4}\-[0-9]{2}\-[0-9]{2}\s?[0-9]{2}\:[0-9]{2}\:[0-9]{2}$/";
    if(!preg_match($motifDate,$heureD)){
       echo "<script>alert('Heure de depart nest pas valide')</script>";
       echo "<script>window.history.back()</script>";
       //echo 'Heure de depart nest pas valide';
    }
    if(!preg_match($motifDate,$heureA)){
        echo "<script>alert('Heure darrivee nest pas valide')</script>";
        echo "<script>window.history.back()</script>";
    }
    
    $requete="INSERT INTO vol VALUES(".$nVol.",".$nPilote.",".$nAvion.",'".$villeD."','".$villeA."','".$heureD."','".$heureA."');";
    require "traitement.php";
    executerRequete($requete);
}




?>