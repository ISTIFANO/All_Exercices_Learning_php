<!DOCTYPE html>
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
        $text1 = $_POST['text_font'];
        $text2 = $_POST['bg'];
        setcookie("color[text_font]", $text1, time() + 3600);
        setcookie("color[bg]", $text2, time() + 3600);

        echo '<style>
            body {
                background: ' . $_COOKIE["color"]["text_font"] . ';
                color: ' . $_COOKIE["color"]["bg"] . ';
            }
        </style>';
    } 
    ?>
</body>
</html>
