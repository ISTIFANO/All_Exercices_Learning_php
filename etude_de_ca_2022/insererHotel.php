<?php
include ("connexion.php");

$design  = $_POST["design"];
$adresse  = $_POST["adresse"];
$villes = $_POST["villes"];
$CP  = $_POST["CP"];
$typeH  = $_POST["typeHotel"];
$NombreCh  = $_POST["NombreCh"];
$TelHotel  = $_POST["TelHotel"];
$Email  = $_POST["Email"];


$query = "INSERT  INTO  hotels VALUES($design,'$adresse','$villes',$CP,'$typeH','$NombreCh','$TelHotel','$Email') ";
if ($con->query($query) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $con->error;
}
$con->close();
?>