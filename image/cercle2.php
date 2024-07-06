<?php
header ("Content-type: image/png");
$idimg=imagecreate(800,400);
$fond=imagecolorallocate($idimg,255,255,51);
$noir=imagecolorallocate($idimg,0,0,0);
$rouge=imagecolorallocate($idimg,255,0,0);
//Tracé d'arcs 
imagearc($idimg,200,100,180,180,180,360,$noir); 
imagearc($idimg,200,100,140,140,180,360,$noir);
imagefilledarc($idimg,500,200,480,300,0,290,$rouge,IMG_ARC_PIE); 
//Tracé d'ellipses
imageellipse ($idimg,200,150,100,50,$noir); 
imagefilledellipse ($idimg,120,300,200,80,$rouge);
imagepng($idimg,"cercle.png");
imagepng($idimg);
imagedestroy($idimg);
?>