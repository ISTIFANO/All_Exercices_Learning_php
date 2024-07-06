<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>td for:https://mrproof.blogspot.com/2012/10/les-formulaires-en-php-exercices.html</title>
</head>
<body>
    <form action="" methdoe="get">
<label for="name"> entre votre nom</label> <br>
<input type="text" name="l[]" id=""><br>
<label for="name"> entre votre prenom</label><br>
<input type="text" name="l[]" id=""><br>
<label for="name"> entre votre aderess</label><br>
<input type="text" name="l[]" id=""><br>
<label for="name"> entre votre num postal</label><br>
<input type="number" name="l[]" id=""><br>
<button>submit</button>
    </form>

    <?php
    // ex1
/* Créer un formulaire comprenant un groupe de champs ayant pour titre "Adresse client".
 Le groupe doit permettre la saisie du nom, du prénom, de l’adresse, de la ville
  et du code postal. Les données sont ensuite traitées par un fichier PHP séparé récupérant 
  les données et les affichant dans un tableau HTML.*/
// ex2 
// Améliorer le script précédent en vérifiant l’existence des données et
//  en affichant une boîte d’alerte JavaScript si l’une des données est manquante.
$table =["nom","prenom","localisation","numpost",];
$j=false;
foreach ($_GET['l'] as $key) {     
    if (empty($key)) { 
    $j=true;
    break;
}}
if ($j) { echo " <script> alert('not exest');</script>" ; }
elseif (isset($_GET['l'])) {
    echo  "<table border =1>";
    echo " <tr>" ;
    foreach ($table as  $val)  {
        
        echo  "<th>",$val , "</th>"  ;  
}
    echo "</tr>";
    foreach ($_GET['l'] as $key) {     
                
        echo  "<th>",$key , "</th>" ;
}
    echo "</tr></table>";
}
?>

</body>
</html>