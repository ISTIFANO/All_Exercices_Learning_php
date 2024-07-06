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
    
    <form action="ex_1.php" method="post">
        <label for="text_font">Couleur texte: </label>
        <input type="color" name="text_font" id="text_font">
        <label for="bg">Couleur fond: </label>
        <input type="color" name="bg" id="bg">
        <input type="submit" value="Envoyer">
    </form>
    <?php 
    if(isset($_POST['text_font']) && isset($_POST['bg'])) {
        $text1=$_POST['text_font'];
        $text2=$_POST['bg'];
        $_SESSION['text_font'] = $text1;
        $_SESSION['bg'] = $text2;

        echo '<style>
            body {
                background: ' .$_SESSION["color"]["text_font"] . ';
                color: ' . $_SESSION["color"]["bg"] . ';
            }
        </style>';
    } 
    ?>
    // ex2 
    if (!$_SESSION["time"]) {
    $_SESSION["time"] = time();
}
if (!$_SESSION["tmp"]) {
    $_SESSION["tmp"] = 0;
} else {
        function calculeDevisite()
        {
            $_SESSION["totaltemp"] = time() - $_SESSION["time"];
            $tmp = $_SESSION["tmp"];
            $tmp = $tmp + 1;
            $_SESSION["tmp"] = $tmp;
        }
        calculeDevisite();
        echo "le nombre de vesites : " . $_SESSION["tmp"] . "<br>";
        echo "les seconde :" . $_SESSION["totaltemp"] . "<br>";
    }


    

</body>
</html>
