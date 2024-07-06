<?php 
require_once("connexion.php");



// Récupération du code de l'étudiant à supprimer depuis les paramètres GET
$code = $_GET["Code"];

// Requête SQL pour sélectionner l'étudiant avec le code spécifié
$requete = "SELECT * FROM etudients WHERE Code = '$code'"; 

// Exécution de la requête de sélection
$resultat = $db->query($requete);

// Vérification si l'étudiant existe
if ($resultat->num_rows > 0) {
    $etudiant = $resultat->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier l'étudiant</title>
</head>
<body>
    <form action="modifierEtudint.php" method="post" enctype="multipart/form-data">

        <table border="1">
            <tr>
                <td>Nom:</td>
                <td><input type="text" name="nom" value="<?php echo $etudiant["Nom"]?>" id=""></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email" value="<?php echo $etudiant["Email"]?>" ></td>
            </tr>
            <tr>
                <td>Photo:</td>
                <td><input type="file" name="image"  height="70px" width="130px"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Modifier"></td>
            </tr>
        </table>
    </form>
    
</body>
</html>

<?php
} else {
    echo "Aucun étudiant trouvé avec ce code.";
}
?>
