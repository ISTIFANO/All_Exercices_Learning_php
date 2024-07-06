<?php
    if(isset($_GET["d"])){
        header("location:http://localhost/OOO/BD/traitement.php?sup=".$_GET["d"]);
    }
?>