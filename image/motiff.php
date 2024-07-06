<?php
header ("Content-type: image/png");
$idimg=imagecreate(800,400);
$fond=imagecolorallocate($idimg,255,255,51);
$noir=imagecolorallocate($idimg,0,0,0);
//Tracé d'arcs 
imagearc($idimg,50,200,180,180,270,90,$noir);
imagearc($idimg,150,200,180,180,90,270,$noir);
//Remplissage en noir de la zone
imagefill($idimg,100,200,$noir); 	
//Tracé de camembert rempli avec une image
$idlogo=imagecreatefromgif("motif.jpej"); 

$motif=imagesettile($idimg,$idlogo); 
imagefilledarc($idimg,500,200,480,300,30,290,IMG_COLOR_TILED,IMG_ARC_PIE); 
imagepng($idimg,"remplissage.png");
imagepng($idimg);
imagedestroy($idimg);
?>