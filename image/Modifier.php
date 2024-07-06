<?php


// Define the path to the directory
$type_ex = ['jpeg', 'jpg','png'];
$path = "C:\wamp64\www\php project\image\images";
$Files = opendir($path);
while ($file = readdir($Files)) {
    if($file !="." && $file !=".."){

        $type=substr($file,strpos($file,".")+1);
        if(in_array($type,$type_ex)){
            
            image_r($file,$type);
        }
    }
}
function image_r($file,$Type){
    
    if($Type == 'png'){
        $img=imagecreatefrompng($file );
    }else{
        $img=imagecreatefromjpeg($file);
    }
                $src_width = imagesx($img);
                $src_height = imagesy($img);
                $width = 200;
                $height = ($width / $src_width) * $src_height; 
                $new_img = imagecreatetruecolor($width, $height);
                imagecopyresampled($new_img, $img, 0, 0, 0, 0, $width, $height, $src_width, $src_height); 
              
                foreach($new_img as $key){
                    imagepng($key,'{$t}aamir.png');

                }
                    
                   
                echo "Successfully resized.";
                }

                        

                        



       ?>
