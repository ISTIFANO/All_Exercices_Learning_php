<?php
    if(!isset($_GET["tab"])){
        header("location:http://localhost/OOO/BD/traitement.php?aff=afficher");
    }
    else{
        $tab=$_GET["tab"];
        $t=explode(";",$tab);
        $t2=[];
        for($i=0;$i<count($t)-1;$i++){
            $t2[]=explode(",",$t[$i]);
        }
        echo "<table border=1>";
        echo "<tr>
            <td>Numéro de vol</td>
            <td>Numéro de pilote</td>
            <td>Numéro d'avion</td>
            <td>Ville de départ</td>
            <td>Ville d'arrivée</td>
            <td>Heure de départ</td>
            <td>Heure d'arrivée</td>
            <td>supprimer</td>
        </tr>";
        $i=0;
        foreach($t2 as $v){
            echo "<tr>";
            foreach($v as $value){
                echo "<td>$value</td>";
            }
            echo "<td><a href='suppression_vol.php?d={$t2[$i][0]}'>supprimer</a></td>";
            $i++;
            echo "</tr>";
        }
        echo "<table>";
    }


?>