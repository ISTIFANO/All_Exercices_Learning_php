<?php
header ("Content-type:image/png");
$idimg=imagecreate(800,400);
$fond=imagecolorallocate($idimg,255,255,51);
$noir=imagecolorallocate($idimg,0,0,0);
$orange=imagecolorallocate($idimg,255,128,0);
imagefilledrectangle($idimg,50,100,220,390,$orange);
//Texte avec les polices PHP
imagestring($idimg,5,55,100,"RECTANGLE ORANGE",$noir); 
imagestring($idimg,4,55,120,"RECTANGLE ORANGE",$noir); 
imagestring($idimg,3,55,140,"RECTANGLE ORANGE",$noir); 	
imagestring($idimg,2,55,160,"RECTANGLE ORANGE",$noir); 
imagestring($idimg,1,55,180,"RECTANGLE ORANGE",$noir); 
imagestringup($idimg,5,195,300,"RECTANGLE ORANGE",$noir);
//Texte avec des polices TrueType
imagettftext ($idimg, 30,0,300,100,$noir, "elephant.ttf", utf8_decode("PHP 5 et MySQL") ); 
imagettftext ($idimg,35,0,300,240,$noir, "elephant.ttf", " EYROLLES" );
imagettftext ($idimg, 30,10,300,200,$noir, "elephant.ttf", " Engels" ); 

imagepng($idimg);
imagedestroy($idimg);
?>