<?php
header ("Content-type: image/png");
$idimg=imagecreate(800,400);
$fond=imagecolorallocate($idimg,255,255,51);
$noir=imagecolorallocate($idimg,0,0,0);
$blanc=imagecolorallocate($idimg,255,255,255);
//Définition de l'épaisseur de trait de 3 pixels
imagesetthickness($idimg,3);
//Coordonnées du quadrilatère
$tab=array (10,40,500,100,750,300,50,350); 
//Tracé du quadrilatère
imagepolygon($idimg,$tab,4,$noir); 
//Tracé du triangle plein
imagefilledpolygon($idimg,array(14,80,30,150,250,300,22,22),4,$blanc); 	
imagepng($idimg,"polygon.png");
imagepng($idimg);
imagedestroy($idimg);
?>