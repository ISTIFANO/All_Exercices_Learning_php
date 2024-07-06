 <?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>choisi couleur</title>
    <style>
        #formC{
            display: <?php
                    if(isset($_COOKIE["colorP"])){
                        echo "none";
                    }
                    else{
                        echo "block";
                    }
                ?>;
        }
        #formD{
            display: <?php
                    if(isset($_COOKIE["login_info"])){
                        echo "none";
                    }
                    else{
                        echo "block";
                    }
                ?>;
        }
        #formDec{
            display: <?php
                    if(!isset($_COOKIE["login_info"])){
                        echo "none";
                    }
                    else{
                        echo "block";
                    }
                ?>;
        }
        #changerC{
            display: <?php
                    if(!isset($_COOKIE["colorP"])){
                        echo "none";
                    }
                    else{
                        echo "block";
                    }
                ?>;
        }
    </style>
</head>
<body>
    <form method="Post"  id="formC" action=<?php $_SERVER["PHP_SELF"]?>>
        <label >Choisi un couleur</label>
        <select name="color">
            <option value="red">rouge</option>
            <option value="black">noire</option>
            <option value="green">vert</option>
        </select>
        <input type="submit">
    </form>

<?php
    if(!isset($_COOKIE["colorP"])){
        if(isset($_POST["color"])){
            setcookie("colorP",$_POST["color"],time()+1234);
        }
    }
    else{
        echo '<h1 style=color:'.$_COOKIE["colorP"].'>Bienvenue</h1>';
    } 
?>
<?php
if (isset($_POST["connecter"])) {
    if (!isset($_COOKIE['login_info'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $expiry = $_POST['expiry'];
    setcookie('login_info[nom]', $username, time() + $expiry);
    setcookie('login_info[pass]', $password, time() + $expiry);
    setcookie('login_info[expiry]', $expiry, time() + $expiry);
}}

if (isset($_COOKIE['login_info'])) {
        echo "Bienvenue, ".$_COOKIE['login_info']['nom'];
} else {
        echo "Informations d'identification invalides!";
}
if(isset($_POST["Deconnecter"])){
    setcookie('login_info[nom]', '', time() -$_COOKIE['login_info']['expiry']);
    setcookie('login_info[pass]', '', time()-$_COOKIE['login_info']['expiry']);
    setcookie('login_info[expiry]', '', time() - $_COOKIE['login_info']['expiry']);
    header("location:http://localhost/OOO/COOKIES/EX4.php");
}
if(isset($_POST["changerC"])){
    setcookie("colorP",'',time()-1234);
    header("location:http://localhost/OOO/COOKIES/EX4.php");
}
?> 
    <form method="post" id="formD" action=<?php $_SERVER["PHP_SELF"]?>>
    <h2>Formulaire de Connexion</h2>
        <label>Nom d'utilisateur:</label>
        <input type="text" id="username" name="username" required><br>
        <label>Mot de passe:</label>
        <input type="password" id="password" name="password" required><br>
        <label >Durée(secondes):</label>
        <input type="number" id="expiry" name="expiry" required><br>
        <input type="submit" value="Se connecter" name="connecter">
    </form>
    <form method="post" id="formDec" action=<?php $_SERVER["PHP_SELF"]?>>
        <input type="submit" value="deconnecter" name="Deconnecter">
    </form>
    <form method="post" id="changerC" action=<?php $_SERVER["PHP_SELF"]?>>
        <input type="submit" value="changer color preferer" name="changerC">
    </form>
</body>
</html>
