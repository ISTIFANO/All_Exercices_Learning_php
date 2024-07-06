<?php
    $dir = "C:/wamp64/www/OOO/IMageD/ch/";
    $arrayType = ["png", "jpg", "jpeg"];
    if ($d = opendir($dir)) {
        while (($photo = readdir($d)) !== false) {
            if ($photo != "." && $photo != "..") {
                //prndre extension de  photo
                $type = substr($photo, strpos($photo, ".") + 1);
                if (in_array($type, $arrayType)) {
                    //selectionner le neauveau width
                    $new_w = 200;
                    //appel au fonction resize qui prend comme parametre
                    resize($photo, $type, $new_w);
                }
            }
        }
    }
    function resize($photo, $type, $new_w)
    {
        $dir = "C:/wamp64/www/OOO/IMageD/ch/";
        if ($type == "png") {
            // header("Content-Type: image/png");
            $image = imagecreatefrompng(($dir . $photo));
        } else if ($type == "jpeg" || $type = "jpg") {
            // header("Content-Type: image/jpeg");
            $image = imagecreatefromjpeg(($dir . $photo));
        }
        $w = imagesx($image);
        $h = imagesy($image);

        $new_h = ($new_w / $w) * $h;
        $new_image = imagecreatetruecolor($new_w, $new_h);
        imagecopyresampled($new_image, $image, 0, 0, 0, 0, $new_w, $new_h, $w, $h);
        imagepng($new_image, "image_res.png");
        $t= substr($photo,0, strpos($photo, ".") );
        if ($type == "png") {
            imagepng($new_image, "{$t}_res.png");
        } else {
            imagejpeg($new_image, "{$t}_res.jpeg");
        }
        imagedestroy($image);
        imagedestroy($new_image);
    }
?>