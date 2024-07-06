<?php 
// connexion
$user ="root";
$serverName = "localhost";
$pass="";
$database ="v_ols";
$fichier = "v_ols.xml";

$db = new mysqli($serverName,$user,$pass,$database);

if($db->connect_error()){
    die("Error connecting to database") . $serverName ->connect_error();
}
// // Create requetue database
// $query = "SELECT * FROM avion ";

// $res = $db->query($query);
// // 
// if (file_exists($fichier)) {
//     $creeXml = new SimpleXMLElement("<vols></vols>");
//     $creeXml->asXML($creeXml);
// // l afichage des donnees
// if($res){

//     while($ligne = $res->fetch_assoc()){
// //  $xml="<avion id=$ligne["NA"]>;

//  echo"<nom>".$ligne["nom"]."</nom> 
//  <Localite>".$ligne["Localite"]."</Localite>
//  </avion>";
   
//  $avion = new SimpleXMLElement($xml);
//  $avion=$xml->addChild("avion");
//  $avion=


//         // Nom	
//         // Capacite	
//         // Localite
//         // NA
//     }}


// }


?>