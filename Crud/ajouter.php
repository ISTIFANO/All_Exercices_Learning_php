<?php 
require_once("connexion.php");

// Récupération des données du formulaire
$nom = $_POST["nom"];
$email = $_POST["email"];
$image = $_FILES["image"]["name"];
$image_size = $_FILES["image"]["size"];
$image_tmp = $_FILES["image"]["tmp_name"];
$size=10241024;

if( isset($image) && isset($image_tmp) && isset($email) && isset($nom)){
    $image = $_FILES["image"]["name"];
    $image_size = $_FILES["image"]["size"];
    $image_tmp = $_FILES["image"]["tmp_name"];
    
    if($image_size>$size){
move_uploaded_file($image_tmp, "./image/. $image" );
}

Setcookie("user",$nom,time()+3600);

// Requête SQL pour insérer les données dans la table
$query = "INSERT INTO etudients VALUES ('$nom', '$email', '$image')"; 

// Exécution de la requête SQL
if ($db->query($query) === TRUE) {
    echo "Enregistrement réussi.";
} else {
    echo "Erreur : " . $query . "<br>" . $db->error;
}
}?>
<!DOCTYPE html>
<html lang="fr">
<head>

    <title>Document</title>
</head>
<body>
    <table border="2">
        <tr>
            <td><?php echo $nom ?> </td>
        </tr>
        <tr>
            <td><?php echo $email ?></td>
        </tr>
        <tr>
            <td><img src="./image/<?php echo $image ?>"></td>
        </tr>
    </table>
    <button><a href="afficher_toutes.php">afficher tous les product</a></button>

 
</body>
</html>
