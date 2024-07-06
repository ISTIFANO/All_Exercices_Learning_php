<?php
    include('connexion.php');
    if(isset($_GET["NV"],$_GET["NP"],$_GET["NA"],$_GET["VD"],$_GET["VA"],$_GET["HD"],$_GET["HA"])){
        $NV=$_GET["NV"];
        $NP=$_GET["NP"];
        $NA=$_GET["NA"];
        $VD=$_GET["VD"];
        $VA=$_GET["VA"];
        $HD=$_GET["HD"];
        $HA=$_GET["HA"];
        $query="INSERT INTO vol VALUES($NV,$NP,$NA,'$VD','$VA','$HD','$HA')";
        $res=$connexion->query($query);
        $connexion->close();
        header("location:http://localhost/OOO/BD/ajout_vol.html?erreur=ok");
        if(empty($res)){
           header("location:http://localhost/OOO/BD/ajout_vol.html?erreur=err");
        }
    }
    if(isset($_GET["aff"])){
        $query="SELECT * FROM vol";
        $res=$connexion->query($query);
        $t="";
        while($row = $res->fetch_assoc()) {
            $t.=$row["NV"].",".$row["NP"].",".$row["NA"].",".$row["VD"].",".$row["VA"].",".$row["HD"].",".$row["HA"].";";
        }
        $connexion->close();
        header("location:http://localhost/OOO/BD/liste_vols.php?tab=$t");
    }
    if(isset($_GET["sup"])){
        $a=$_GET["sup"];
        $query="DELETE FROM vol where NV=$a";
        $connexion->query($query);
        $connexion->close();
        header("location:http://localhost/OOO/BD/ajout_vol.html?erreur=ok");
    }
    

?>