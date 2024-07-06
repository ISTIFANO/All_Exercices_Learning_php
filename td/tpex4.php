<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="get">
    <label for="nb"> number 1</label><br>
<input type="number" name="num" id="num11"><br>
<label for="nb"> number 2</label><br>

<input type="number" name="num1" id="num12"> <br>
<button>submit</button>

</form>

<?php
 $result=0;
 $numm= $_GET["num"];
if(isset($_GET["num"])){
    echo "le num est ", $numm;
    for ($i = 0; $i <= 10; $i++) { 
       $result =$i*$_GET["num"];
       echo $i,"*",$_GET["num"],"=",$result,"<br>";
    }}else if(isset($_GET["num1"])){
     
        for ($i = 0; $i <= 10; $i++) { 
            $result =$i*$_GET["num"];
            echo $i,"*",$_GET["num1"],"=",$result2;
            echo $result2;
            break;
        }


    };
     ?>
</body>
</html>