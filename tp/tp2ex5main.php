<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form_data">
        <label for="nom">Nom</label>
        <input type="text" name="l[]" id="inputnom">
        <label for="password">Mode de passe</label> 
        <input type="password" name="l[]" id="inputpass">
        <button type="submit">Submit</button> 
        <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            if (isset($_POST["l"]))  {
                foreach ($_POST["l"] as $key) {// trim() = no espace  htmlspecialchars() // 
                   
                    if (preg_match("/^[a-zA-Z]+$/", $key)) {
                        echo "<p>", htmlspecialchars(trim($key)), "</p><br>";
                    }else {
                        echo "<p>!!!!!!!!!!!!!!!!!!!!!!!!!!!!</p><br>";

                             }
            }
        }}
        ?>




<?php
$arry = array(1,2,3,3,44);
sort($arry);
rsort($arry);
// assosiative array 
ksort($arry);
krsort($arry);
asort($arry);// value 
arsort($arry);


?>
    </form>
</body>
</html>
