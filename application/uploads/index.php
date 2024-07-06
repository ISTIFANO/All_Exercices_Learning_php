<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="votre_url_de_gestion_du_formulaire.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fichier" multiple /> 
        <input type="submit" name="button" value="Submit">
        <input type="submit" name="nxbutton" class="buttons" value="afficher">
    </form>

    <?php
    $size = ini_get('upload_max_filesize');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Vérifications du fichier ici...

        $chemin = uniqid('uploaded_', true) . $_FILES["fichier"]["name"];
        move_uploaded_file($_FILES["fichier"]["tmp_name"], $chemin);

        $file = fopen($chemin, "r") or die("Failed to open");

        $content = fread($file, filesize($chemin));
        fclose($file);
    }

    $files = opendir("uploads");
    $file1 = readdir($files);
    while ($file1) {
        if ($file1 != "." && $file1 != "..") {
            echo "<div style='border: 5px solid red; height: 40px; width:500px;'>  ", $file1 . "</div>\n";
            
            echo "<form action='your_action_url_here' method='post'>\n";
            echo "<input type='submit' name='button' value='supprimer'>\n";
            echo "<input type='submit' name='sxbutton' class='buttons' value='supprimer'>\n";
            echo "<input type='submit' name='rxbutton' class='buttons' value='renommer'>\n";
            echo "</form>\n";
        }
        $file1 = readdir($files);
    }
    closedir($files);
    ?>
</body>
</html>
