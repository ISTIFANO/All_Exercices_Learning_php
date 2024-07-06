<?php
header ("Content-type: image/png");
$idimg=imagecreate(800,400);
$fond=imagecolorallocate($idimg,255,255,51);
$rouge=imagecolorallocate($idimg,255,0,0);
//Définition de l'épaisseur de trait de 3 pixels
imagesetthickness($idimg,3);
//Tracé des rectangles
for($i=3;$i<100;$i+=20)
{
 imagerectangle($idimg,$i,$i,800-$i,400-$i,$rouge); 
}
//Tracé d'un rectangle plein
imagefilledrectangle($idimg,100,100,700,300,$rouge); 
imagepng($idimg,"rectangles.png"); 
imagepng($idimg);
imagedestroy($idimg);
?>