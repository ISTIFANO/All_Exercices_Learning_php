<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <label for="file">Sélectionner un fichier ZIP (max 1 Mo) :</label>
    <input type="file" name="file" id="file" accept=".zip" required>
    <br>
    <input type="submit" value="Envoyer">
</form>

   
<?php
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     $file = $_FILES["file"];
    //     $fileName = $file["name"];
    //     $fileSize = $file["size"];
    
    //     // Vérifier la taille du fichier (1 Mo)
    //     if ($fileSize <= 1048576) {
    //         // Déplacer le fichier vers un répertoire de destination (ajustez le chemin selon vos besoins)
    //         $destination = "uploads/" . $fileName;
    //         move_uploaded_file($file["tmp_name"], $destination);
    
    //         // Afficher les détails du fichier
    //         echo "Fichier reçu : $fileName <br>";
    //         echo "Taille du fichier : $fileSize octets <br>";
    //         echo "Confirmation de réception : Transfert réussi.";
    //     } else {
    //         echo "Erreur : La taille du fichier dépasse 1 Mo.";
    //     }
    // }
   
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $file = $_FILES["file"];
    $fileName = $file["name"];
    $fileSize = $file["size"];
    $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
    

    // Valider le type de fichier (seul .zip est autorisé)
    if ($fileType != "zip") {
        echo "Erreur : Seuls les fichiers ZIP sont autorisés.";
        exit;
    }

    // Valider la taille du fichier (1 Mo)
    if ($fileSize > 1048576) {
        echo "Erreur : La taille du fichier dépasse 1 Mo.";
        exit;
    }

    // Déplacer le fichier vers un répertoire de destination (ajustez le chemin selon vos besoins)
    $destination = "uploads/" . $fileName;
    move_uploaded_file($file["tmp_name"], $destination);

    // Afficher les détails du fichier
    echo "Fichier reçu : $fileName <br>";
    echo "Taille du fichier : $fileSize octets <br>";
    echo "Confirmation de réception : Transfert réussi.";
}
?>

    
    
   
</body>
</html>