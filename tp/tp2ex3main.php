<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ex3</title>
</head>
<body>
    <form action="" method="get">
        <h1> entrer les nembres</h1>
        <label for="num"></label>
        <input type="number" name="num" id=""><br>
        <p>est compris entre</p>
        <label for="num"></label>
        <input type="number" name="num1" id=""><br>
        <p>et</p>
        <label for="num"></label>
        <input type="number" name="num2" id=""> <br>
        <button type="submit" name="submit">valide</button>
    </form>
   
<?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        
        
            if (isset($_GET['num']) && isset($_GET['num1']) && isset($_GET['num2'])) {

                echo"<h1> resultaa du test :</h1>"; 

                if ($_GET["num1"] <= $_GET["num"] && $_GET["num2"] >= $_GET["num"]) {
                    echo "<mark>Oui</mark>";
                    echo $_GET["num"]." est compris entre ".$_GET["num1"]." et ".$_GET["num2"];
                } else {
                    echo "<mark>Non</mark>";
                    echo $_GET["num"]." n'est pas compris entre ".$_GET["num1"]." et ".$_GET["num2"];
                }

            }
        }
    
?>


    
</body>
</html>