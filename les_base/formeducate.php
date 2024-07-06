<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles.css" /> <!-- Corrected the stylesheet link -->
    <title>Document</title>
</head>
<body>
    <div id="border"> <!-- Corrected the id name -->
        <form method="get" action=""> <!-- Corrected the method attribute and action file name -->
            <label for="text">Print your text please</label> <br>
            <input type="text" name="text" value="<?php 
                if(isset($_GET["text"])) { 
                    echo $_GET["text"];
                } else {
                    echo "Please write your text here";
                }
            ?>" /><br>
            <label for="email">Print your email, please</label> <br>
            <input type="email" name="email" value="<?php 
                if(isset($_GET["email"])) { 
                    echo $_GET["email"];
                } else {
                    echo "Please write your email";
                }
                if(empty($_GET["email"])) {
                    echo "Please enter your email";
                }
            ?>" /><br>
            <label for="website">Print your website, please</label> <br> <!-- Corrected the label and input names -->
            <input type="text" name="website" value="<?php 
                if(isset($_GET["website"])) { 
                    echo $_GET["website"];
                } else {
                    echo "Please write your website here";
                }
            ?>" /><br>
            <label for="num">num </label><br>
            <input type="number" name="num" /><br>
            <textarea name="comment" rows="5" cols="40"></textarea><br>
            <button type="submit">Submit</button> <!-- Corrected the button type -->
        </form>

        <?php 
            // Displaying each data
            if(isset($_GET["email"]) && isset($_GET["name"]) && isset($_GET["website"])) { 
                echo $_GET["email"];
                echo $_GET["name"];
                echo $_GET["website"];
            } else {
                echo "Some data does not exist.";
            }

            // Super global variables in PHP
            echo $_SERVER['PHP_SELF'];
            echo "<br>";
            echo $_SERVER['SERVER_NAME'];
            echo "<br>";
        ?>
    </div>
</body>
</html>
