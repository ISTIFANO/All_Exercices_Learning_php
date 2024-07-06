<?php

if (isset($_GET["nom"]) && isset($_GET["prenom"])){

    echo "<h3> votre nom est : " . $_GET["nom"] ,"<br></h3>";
    echo "<h3> votre prenom est : " . $_GET["prenom"] ,"<br></h3>";

} 
?>