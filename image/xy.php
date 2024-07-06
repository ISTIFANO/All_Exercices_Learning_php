<?php

header('Content-Type: image/png');
$image = imagecreate(800, 400);

$blanc = imagecolorallocate($image, 255, 255, 255);
$rouge = imagecolorallocate($image, 255, 0, 0);

imagesetthickness($image,2);

for($x =0; $x <800; $x+=10){

    imageline($image,400,399,$x,0,$rouge );
}

// Ajout des actes de x et de y de c dans l'image
$texte = "Acte de x et de y de c";
$blanc_texte = imagecolorallocate($image, 255, 255, 255);
imagestring($image, 5, 10, 10, $texte, $blanc_texte);

// Enregistrement de l'image dans un fichier
imagepng($image,"amir.png");

// Affichage de l'image
imagepng($image);

// Libération de la mémoire utilisée par l'image
imagedestroy($image); 

?>
