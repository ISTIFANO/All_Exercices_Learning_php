<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!(isset($_SESSION['nomComp']) && isset($_SESSION['email']))) {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $_SESSION['nomComp'] = $nom . " " . $prenom;
        $_SESSION['email'] = $email;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
            background-color: black;
        }


        h1 {
            text-align: center;
            color: white;
            padding-top: 20px;
        }

        input {
            margin-top: 20px;
            width: 200px;
            height: 20px;
            background-color: white;
        }

        input[type="submit"] {
            width: 100px;
            height: 30px;
            background-color: blue;
        }

        .lien {
            text-align: center;
            display: flex;
            justify-content: space-between;
        }

        a {
            text-decoration: none;
            color: brown;
        }
    </style>
</head>
<body>
<div class="lien">
    <a href="./identification.html">Go back to the previous page</a>
    <a href="../Gestion_fichiers/formulaire.php">The next page</a>
</div>
<div class="formulaire">
    <h1><em>Choose the background color</em></h1>
    <form action="" method="post">
        <input type="color" name="couleur" required />
        <input type="submit" value="Apply" name="app"/>
    </form>
</div>
</body>
</html>

<?php
if (isset($_POST['app'])) {
    $couleur = $_POST['couleur']; // Get the chosen background color
    setcookie("couleurFond", $couleur, time() + 3600, "/"); // Create a cookie object with the chosen background color
    header("location: ../Gestion_fichiers/formulaire.php");
    exit();
}
?>
