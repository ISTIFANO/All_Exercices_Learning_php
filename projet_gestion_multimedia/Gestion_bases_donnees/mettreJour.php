<!DOCTYPE html>
<html lang="en">
<head>
    <?php
include 'connexion.php';
    //fonction pour mettre a jour un champ specifique dans la base de données
function mettreAJourChamp($id, $champ, $nouvelleValeur) {
    global $connexion;
   //preparer la requete SQL en utilisant une requete preparee pour eviter les attaques par injection SQL
    $stmt = mysqli_prepare($connexion, "UPDATE fichiers SET $champ = ? WHERE id = ?");
    //verifier si la preparation de la requete a reussi
    if ($stmt) {
        //lier les parametres et executer la requete
        mysqli_stmt_bind_param($stmt, "si", $nouvelleValeur, $id);
        if (mysqli_stmt_execute($stmt)) {
            echo "<script>alert('Le champ $champ a été mis à jour avec succès pour le fichier avec l'identifiant $id.')</script>";
            // echo "<script>window.history.back()</script>";
        } else {
            echo "<script>alert('Erreur lors de la mise à jour du champ $champ pour le fichier avec l'identifiant $id.')</script>";
            // echo "<script>window.history.back()</script>";
        }
        //fermer la requete preparee
        mysqli_stmt_close($stmt);
    } else {
        echo "<script>alert('Erreur lors de la preparation de la requete de mise a jour.')</script>";
        // echo "<script>window.history.back()</script>";
    }
}



        if(isset($_COOKIE['couleurFond'])){
            $couleurFond=$_COOKIE['couleurFond'];
            echo "<style> body{ background-color: " . $couleurFond . ";} </style>";
        }   
    ?>
    <style>
        div{
            background-color: black;
            margin: auto;
            color:white;
            width: 400px;
            height: 250px;
            text-align: center;
        }
        h1{
            padding-top: 10px;
        }
        a{
            width: 200px;
            background-color: white;
            text-align: center;
            text-decoration: none;
            color: brown;
        }
        input[type="submit"]{
            background-color: blue;
        }
        select{
            width: 100px;
        }
    </style>
</head>
<body>
    <a href="afficher.php">Revenir a la page precedente</a>
    <div>
    <h1>Mettre a Jour</h1>
    <form action="" method="post">
    Choisir le champ a modifier : <br><br><select name="champ">
        <option value="nomFichier">Nom</option>
        <option value="typeFichier">Type</option>
    </select><br><br>
    Nouvelle valeur : <br><br><input type='text' name='nvValeur'><br><br>
    <input type="submit" value="Modifier" name="modifier">
    </form>
    </div>
</body>
</html>
<?php
if(isset($_POST['modifier'])){
 
    $id = $_GET['id'];
    $champ = $_POST['champ'];
    $nvValeur = $_POST['nvValeur'];
    mettreAJourChamp($id, $champ, $nvValeur);

}
?>