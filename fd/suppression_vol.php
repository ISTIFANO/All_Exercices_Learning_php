<?php
require 'connexion.php';
require 'traitement.php';
if(isset($_GET['butt'])){
    $nvSupp=$_GET["nv"];
    $requete="DELETE FROM vol where NV=$nvSupp";
    executerRequete($requete);
}
?>