<?php
    function objetDeConnexion($base) {
        
        include 'param_con.php';
   $conn = new mysqli(SERVEUR, UTILISATEUR, MOT_DE_PASSE, $base, PORT);

    if ($conn->connect_error) {
        die("echec de la connexion : " . $conn->connect_error);
    }

    return $conn;
}

objetDeConnexion($base);