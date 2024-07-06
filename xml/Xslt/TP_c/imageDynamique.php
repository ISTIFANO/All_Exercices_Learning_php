<?php
require("connexion.php");
header("Content-Type: image/png");
$image = imagecreate(700, 500);
$blanc = imagecolorallocate($image, 255, 255, 255); // color img
imagefill($image, 0, 0, $blanc);
$amounth = array("jan", "Fev", "Mars", "Avr", "Mai", "Juin", "Jull", "Aout", "Sept", "Oct", "Nvr", "Dec");
$blue = imageColorAllocate($image, 0, 0, 255);
$noir = imageColorAllocate($image, 0, 0, 0);
imageline($image, 20, 20, 20, 400, $blue);
imageline($image, 20, 400, 550, 400, $blue);
$i = 0;
for ($i = 0; $i < 12; $i++) {
    $query = "SELECT SUM(prix) as Sumprix FROM livres WHERE MONTH(date_publication) =( $i+1)";
    $resul = $con->query($query);
    if ($resul) {
        $sell = $resul->fetch_assoc();
        
        imagefilledrectangle($image, $i * 40 + 30, 400, $i * 40 + 60, 400 - $sell['Sumprix'] / 12, $noir);
        imagestring($image, 10, $i * 40 + 30, 400, $amounth[$i], $noir);
    }
}
imagepng($image);
imagedestroy($image);
