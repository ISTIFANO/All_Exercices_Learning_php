<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="fichier" multiple /> 
        <input type="submit" name="button" value="Submit">
        <input type="submit" name="nxbutton"  id="buttons"value="aficher">
    </form>

    <?php
    $size = ini_get('upload_max_filesize');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if ($_FILES["fichier"]["error"] == UPLOAD_ERR_OK) {
            if ($_FILES["fichier"]["type"] != "text/plain") {
                echo "Seuls les fichiers txt sont autorisés.";
                exit;
            }

            if ($_FILES["fichier"]["size"] > $size) {
                echo "La taille du fichier dépasse la limite autorisée.";
                exit;
            }

            $chemin = uniqid('uploaded_', true)  . $_FILES["fichier"]["name"];
            move_uploaded_file($_FILES["fichier"]["tmp_name"], $chemin);

            // $file = fopen($chemin, "r") or die("Failed to open");

            
            // $content = fread($file, filesize($chemin));
           

            // fclose($file);
        }
    }

   
        $files = opendir("uploads");
        $file1= readdir($files);
        while ($file1) {
            if ($file1 != "." && $file1 != "..") {
               
                echo "<div style='border: 5px solid red; height: 40px; width:500px;'>  ",$file1 ."</div>" ."\n";
            
                echo "<form action='your_action_url_here' method='post'>\n"; // Replace 'your_action_url_here' with the actual form action URL

                echo "<input type='submit' name='button' value='supprimer'>\n";
                echo "<input type='submit' name='sxbutton' id='buttons' value='suppression'>\n";
                echo "<input type='submit' name='rxbutton' id='buttons' value='rename'>\n";
                echo"</form>";
        
            }
            $file1= readdir($files);
        }
       
        closedir($files);




            // }
            // $chem = uniqid('uploaded_', true)  . $_FILES["fichier"]["name"];
            // move_uploaded_file($_FILES["fichier"]["tmp_name"], $chem);





            

        
    ?>

</body>
</html>
