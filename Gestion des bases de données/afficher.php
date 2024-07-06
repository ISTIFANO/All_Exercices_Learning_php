<?php
// qs 6
require('connexion.php');
$connexion=ObjetDeconnexion('voitures');
$requet="select * form modele";
$result=$connexion->query($requet);
echo "<table> <tr>";
$meta=$result->fetch_fiels();
foreach($meta as $champ){
    echo "<th>".$champ->orgname."<th>";
}
while($ligne=$result->fetch_array(mysqli_assoc())){
    

}
?>