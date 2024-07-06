<!DOCTYPE html>
<?php 
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
   



    
    

    if ($_SESSION["tmp"]) {
        $_SESSION["tmp"] = 0;
    } else {
            function calculeDevisite()
            {
        ;
                $tmp = $_SESSION["tmp"];
                $tmp = $tmp + 1;
                $_SESSION["tmp"] = $tmp;
            }
            calculeDevisite();
            echo "le nombre de vesites : " . $_SESSION["tmp"] . "<br>";
           
        }
    
        echo "<h1> Hi Mr ". $_SESSION["user"]."</h1>";
        echo "<table border=1> <tr><th> <a href='pagehtml.php'>pagephp</a></th><th>nb_visite</th></tr>" ;
        echo " <tr><th> <a href='pagephp.php'>pagehtml</a></th><th>".$_SESSION["tmp"]."</th></tr>" ;
    
        
    
    
    
    
    ?></body>
</html>