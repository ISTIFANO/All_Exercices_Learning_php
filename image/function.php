<?php
header ("Content-type: image/png");
$idimg=imagecreate(800,400);
$fond=imagecolorallocate($idimg,255,255,51); 
$noir=imagecolorallocate($idimg,0,0,0); 
for($x=0;$x<800;$x++)
{
 $y=-200*sin($x/100)+200; 
 imagesetpixel($idimg,$x,$y,$noir);
 imagesetpixel($idimg,$x,$y+1,$noir); 
}
imagepng($idimg,"sinus.png"); 
imagepng($idimg); 
imagedestroy($idimg); 
?>