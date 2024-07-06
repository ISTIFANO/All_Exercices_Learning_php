<?php
//connexion a la base de donnees
$connexion = mysqli_connect("localhost", "root", "", "gestionFichiers") or 
            die("Connection failed: " . mysqli_connect_error()) ;
?>