<?php
include("connexion.php");

$xml =simplexml_load_file("v_ols.xml");
foreach ($xml as $value){
    $nom=$value->nom;
    $NA = $value->NA;
   
    $Localite=$value->Localite;
    $Capacite=$value->Capacite;
   
    $query = "INSERT INTO avion VALUES('$nom',$NA,$Capacite,$Localite);
$res = $db->query($query);
}

?>