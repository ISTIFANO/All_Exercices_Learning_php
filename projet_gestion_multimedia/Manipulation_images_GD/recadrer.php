<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Une variable static pour générer des noms de fichiers uniques lors du recadrage des images.
    static $i = 1;
    // Vérifier si le fichier a été téléchargé avec succès
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
    
        $x = $_POST["x"];
        $y = $_POST["y"];
        $largeur = $_POST["largeur"];
        $hauteur = $_POST["hauteur"];
        // Chemin temporaire du fichier téléchargé
        $tmpName = $_FILES['image']['tmp_name'];
        // Créer une nouvelle image à partir du fichier téléchargé
        $image = imagecreatefromstring(file_get_contents($tmpName));
        $nvImage = imagecrop($image, ['x' => $x, 'y' => $y, 'width' => $largeur, 'height' => $hauteur]);
        // Enregistrer l'image recadrée dans un fichier
        $chemin_img_reca = "./image_recadre $i.jpg";
        $i++;
        imagejpeg($nvImage, $chemin_img_reca);
        imagedestroy($image);
        imagedestroy($nvImage);
        echo "<script>alert('L\\'image a été téléchargée et recadrée avec succès');</script>";
        echo "<script>window.history.back();</script>";
    } else {
        echo "<script>alert('Une erreur s\\'est produite lors du téléchargement du fichier.');</script>";
        echo "<script>window.history.back();</script>";
    }
}

