<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(!(isset($_SESSION['nomComp']) && isset($_SESSION['email']))){
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $email=$_POST['email'];
        $_SESSION['nomComp']=$nom." ".$prenom;
        $_SESSION['email']=$email;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .formulaire{
            width:400px;
            margin: auto;
            background-color: black;
        }
        h1{
            text-align: center;
            color: white;
            padding-top: 20px;
        }
        input{
            margin-top: 20px;
            width: 200px;
            height:20px;
            background-color: white;
        }
        input[type="submit"]{
            width: 100px;
            height: 30px;
            background-color: blue;
        }
        .lien{
            text-align: center;
            display: flex;
            justify-content: space-between;
        }
        a{
            text-decoration: none;
            color: brown;
        }
    </style>
</head>
<body>
    <div class="lien">
        <a href="./identification.html">Revenir a la page precedente</a>
        <a href="../Gestion_fichiers/formulaire.php">La page suivante</a>
    </div>
    <div class="formulaire">
        <h1><em>Choisissez la couleur de fond</em></h1>
        <pre>
        <form action="" method="post">
            <input type="color" name="couleur" required />
            <input type="submit" value="Appliquer" name="app"/>
        </form>
        </pre>
    </div>
</body>
</html>
<?php
if(isset($_POST['app'])){
    $couleur=$_POST['couleur'];// Récupérer la couleur de fond choisie
    setcookie("couleurFond",$couleur,time()+3600, "/");// Créer un objet de cookie avec la couleur de fond choisie
    // echo $_COOKIE['couleurFond'];
    header("location:../Gestion_fichiers/formulaire.php");
    exit();
}
?>