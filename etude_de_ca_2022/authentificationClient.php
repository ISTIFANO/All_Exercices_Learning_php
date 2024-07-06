<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">


    login <input type="text" name="login" id="">
    Password <input type="password" name="pss" id="">

    <input type="submit" value="Done">
    </form>
</body>
</html>
<?php

if(isset($_POST["login"])){
    $_SESSION["idClient"] = $_POST["login"];
//    header("location:choixChambre.php");
}
else{
    echo "enter ur name";
}


?>