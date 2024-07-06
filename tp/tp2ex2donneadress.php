<?php
if(isset($_GET["ville"]) && isset($_GET["num"]) && isset($_GET["adress"])){
    echo "<h3> votre ville est : " . $_GET["ville"] ,"<br></h3>";
    echo "<h3> votre adress est : " . $_GET["adress"] ,"<br></h3>";
    echo "<h3> votre num postal est : " . $_GET["num"] ,"<br></h3>";

    
}
?>