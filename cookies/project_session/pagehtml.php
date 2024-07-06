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
    

    if (!$_SESSION["visit"]) {
        $_SESSION["visit"] = 0;
    } else {
            function calculeDevisite()
            {
        ;
                $tmp = $_SESSION["visit"];
                $tmp = $tmp + 1;
                $_SESSION["visit"] = $tmp;
            }
            calculeDevisite();
            echo "le nombre de vesites : " . $_SESSION["visit"] . "<br>";
           
        }
    
        echo "<h1> Hi Mr ". $_SESSION["user"]."</h1>";
        echo "<table border=1> <tr><th> <a href='pagehtml.php'>pagephp</a></th><th>nb_visite</th></tr>" ;
        echo " <tr><th> <a href='pagephp.php'>pagehtml</a></th><th>".$_SESSION["visit"]."</th></tr>" ;
    
        
    
    
    
    
    ?></body>
</html>