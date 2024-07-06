<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aamir</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- 
    Créer un formulaire de saisie d’adresse e-mail contenant un champ caché 
    destiné à récupérer le type du navigateur de l’utilisateur. Le code PHP affiche l’adresse 
    mail et le nom du navigateur dans la même page après vérification de l’existence des données.
    La page de saisie du mail et de traitement des données (fichier ch6exo5.php)
-->

<!--  

****************************************$_SERVER***************************************
    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];
    echo "<br>";
    echo $_SERVER['HTTP_REFERER'];
    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT']; 
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME'];
    ?> 
-->
    <form action="" methode="get">
<label for="email">entre your email</label> <br>
<input type="email" name="l[]" >  <br>
<label for="text"> navigateur</label> <br>
<input type="text" name="l[]" value="<?php echo $_SERVER['HTTP_USER_AGENT']; ?>" >  <br>
<button>submit</button>
 <?php




    $tab = ["email", "navigateur",];
     if(isset($_GET["l"])){
        echo "<table border =1> <tr>";
           foreach($tab as $val){
            echo "<td>" . $val, "</td>";
        }
                echo "</tr>";
                  foreach($_GET["l"] as $kes){
                    echo "<td>" . $kes, "</td>";    
                      }
                       echo "</table> </tr>";}
                                                                    // echo $_SERVER['HTTP_USER_AGENT'];
                                                                    // echo "<br>"; 
                                                                    
                             ?>
    </form>
</body>
</html>