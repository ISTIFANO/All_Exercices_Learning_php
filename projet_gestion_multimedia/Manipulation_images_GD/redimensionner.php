<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Une variable static pour générer des noms de fichiers uniques lors du redimensionnement des images.
    static $i = 1;
    // Vérifier si le fichier a été téléchargé avec succès
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {

        $largeur = $_POST['largeur'];
        $hauteur = $_POST['hauteur'];
        // Chemin temporaire du fichier téléchargé
        $tmpName = $_FILES['image']['tmp_name'];
        // Créer une nouvelle image à partir du fichier téléchargé
        $image = imagecreatefromstring(file_get_contents($tmpName));
        // Obtenir les dimensions actuelles de l'image
        $largeurActuelle = imagesx($image);
        $hauteurActuelle = imagesy($image);
        // Créer une nouvelle image avec les dimensions spécifiques
        $nouvelleImg = imagecreatetruecolor($largeur, $hauteur);
        // Redimensionner l'image d'origine vers la nouvelle image
        imagecopyresampled($nouvelleImg, $image, 0, 0, 0, 0, $largeur, $hauteur, $largeurActuelle, $hauteurActuelle);
        // Enregistrer l'image redimensionnée dans un fichier
        $chemin_img_redi = "./image_redimensionne $i.jpg";
        $i++;
        imagejpeg($nouvelleImg, $chemin_img_redi);
        imagedestroy($image);
        imagedestroy($nouvelleImg);
        echo "<script>alert('L\\'image a été téléchargée et redimensionnée avec succès');</script>";
        echo "<script>window.history.back();</script>";
    } else {
        echo "<script>alert('Une erreur s\\'est produite lors du téléchargement du fichier.');</script>";
        echo "<script>window.history.back();</script>";
    }
}
