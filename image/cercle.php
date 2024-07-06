<?php 
header("Content-type: image/png");
$idimg = imagecreate(800, 400);
$fond = imagecolorallocate($idimg, 255, 255, 51);
$rouge = imagecolorallocate($idimg, 255, 0, 0);
$centre_x = 400; // Coordonnée x du centre du cercle
$centre_y = 200; // Coordonnée y du centre du cercle
$rayon = 100; // Rayon du cercle

// Dessine le cercle

imageellipse($idimg, $centre_x , $centre_y, $rayon * 2, $rayon * 2, $rouge);

imagepng($idimg, "cercle.png");
imagepng($idimg);
imagedestroy($idimg);








?>