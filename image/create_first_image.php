<?php

header('Content-Type: image/png');
$image = imagecreate(800, 400);

$blanc = imagecolorallocate($image, 255, 255, 255);
$rouge = imagecolorallocate($image, 255, 0, 0);

imagesetthickness($image,2);

for($x =0; $x <800; $x+=10){

imageline($image,400,399,$x,0,$rouge );
}
imagepng($image,"amir.png");
imagepng($image);
imagedestroy($image);	
?>