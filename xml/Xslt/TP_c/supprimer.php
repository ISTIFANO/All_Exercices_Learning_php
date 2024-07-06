<?php
    require("connexion.php");
    $id =$_GET['id'];
    $query = "DELETE FROM livres WHERE id=$id";
    $result = $con->query($query);
    if($result){
        header("Location: bonus.php");
    }
    ?>