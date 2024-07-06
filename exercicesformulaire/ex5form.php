<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="styleform.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <label for="email">Email</label><br>
        <input type="email" name="email"><br>

        <label for="mozilla">Mozilla</label>
        <input type="checkbox" name="nav[]" value="Mozilla"><br>

        <label for="microsoftedge">Microsoft Edge</label>
        <input type="checkbox" name="nav[]" value="Microsoft Edge"><br>

        <label for="chrome">Chrome</label>
        <input type="checkbox" name="nav[]" value="Chrome"><br>

        <input type="submit" value="Submit"><br>
    </form>

    <?php 
    // echo $_SERVER['PHP_SELF'];
    // echo "<br>";
    // echo $_SERVER['SERVER_NAME'];
    // echo "<br>";
    // echo $_SERVER['HTTP_HOST'];
    // echo "<br>";
    // echo $_SERVER['HTTP_REFERER'];
    // echo "<br>";
    // echo $_SERVER['HTTP_USER_AGENT'];
    // echo "<br>";
    // echo $_SERVER['SCRIPT_NAME'];
    if(isset($_POST["email"]) && isset($_POST["nav"])) {
        echo "Votre <mark>Email</mark> est " . htmlspecialchars($_POST["email"]) . "<br>";

        foreach($_POST["nav"] as $key) {
          
            echo "Votre <mark>navigateur</mark> est " .$key . "<br>". $_SERVER['HTTP_USER_AGENT'];;
        }
    }
   
    ?>
</body>
</html>
