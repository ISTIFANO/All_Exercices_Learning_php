<?php 

$user="root";
$server ="localhost";
$pw="";
$dbname="v_ols";

$db = new mysqli($server,$user,$pw,$dbname);

if($db->connect_error){
    die("Could not connect to db".$db->connect_error);
}

?>