<?php
require "connexion.php"; //inclure le fichier de connexion

//function qui execute les requetes sur la base de donnees vols telle que insertion,suppression,modification,...
function executerRequete($requete) {
    global $connexion;//utilisation de la variable connexion depuis le fichier connexion.php
    $resultat = $connexion->query($requete);// query permet d'executer des requetes SQL sur une base de donnees MySQL
    if (!$resultat) {//si la variable resultat est vide
        die("Erreur d'execution de la requete : " . $connexion->error);//donc la requete nest pas executee
    }
    return $resultat;//sinon returner l'execusion de la requete 
    $resultat->free();//liberer la memoire associee au resultat
}

//function qui execute la requete de selection
function executerSelect($requete){
    global $connexion;
    $resultat=$connexion->query($requete);
    if ($resultat) {
     while ($ligne = $resultat->fetch_assoc()) {//parcourir les resultats de la requete SELECT ligne par ligne dans une boucle
    //     return $ligne[$nomColone];
            echo "<tr>
                <td>{$ligne['NV']}</td>
                <td>{$ligne['NP']}</td>
                <td>{$ligne['NA']}</td>
                <td>{$ligne['VD']}</td>
                <td>{$ligne['VA']}</td>
                <td>{$ligne['HD']}</td>
                <td>{$ligne['HA']}</td>
                <td><form method=get action='suppression_vol.php'><input type=hidden value=$ligne[NV] name=nv><input type=submit value=Supprimer name=butt></form></td>
              </tr>";
     }
    
    } else {
    die("Erreur d'execusion: " . $connexion->error) ;
  }
  $resultat->free();
}

?>