<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="styleform.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire</title>
</head>
<body>
    <script>
        document.getElementById("myAnchor").addEventListener("click", function(event){
        event.preventDefault()
});
    </script>
    <form action=<?= $_SERVER["PHP_SELF"]?> method="POST">
        <label for="Nom">Nom</label> <br>
        <input type="text" name="nom" id=""><br>
        <label for="pNom">prenom</label><br>
        <input type="text" name="prenom" id=""><br>
        <label for="adress">ville</label><br>
        <input type="text" name="ville" id=""><br>
         <label for="adress">Adress</label><br>
        <input type="text" name="Adress" id=""><br>
        <label for="cp">code postal</label><br>
        <input type="number" name="nom" id=""><br>
        <input type="submit" id="myAnchor" >
        <br>
    </form>

    <div>
    <?php
    // if(empty($_GET["nom"]) || empty($_GET["prenom"]) || 
    // empty($_GET["Adress"]) || empty($_GET["ville"]) || empty($_GET["cp"])) {
    //     echo" stp !saisie la case ";
    // } else {
    //if( isset($_GET["nom"]) && isset($_GET["prenom"]) && 
     //isset($_GET["Adress"]) && isset($_GET["ville"]) && isset($_GET["cp"])){

        echo "<table border=2>";
                    echo "<tr><td><mark>Nom</mark></td>". "<td>".$_POST["nom"]."</td></tr>";
                    echo "<tr><td><mark>prenom</mark></td>"."<td>".$_POST["prenom"]."</td></tr>";
                    echo "<tr><td><mark>ville</mark></td>"."<td>".$_POST["ville"]."</td></tr>";
                    echo "<tr><td><mark>adress</mark></td>"."<td>".$_POST["adress"]."</td></tr>";
                    echo "<tr><td><mark>code_postal</mark></td>"."<td>".$_POST["nom"]."</td></tr>";
         echo "</table>";
    //}
    ?>
  
    </div> 
    
</body>
</html>