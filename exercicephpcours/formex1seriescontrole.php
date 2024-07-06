<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        
         
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

#borderr {
    background-color: #fff;
    padding: 20px;
    border: 1px solid;
    height: 300px;
    width: 200px;
    border-radius: 10px;

}


label {
    display: block;
    margin-bottom: 5px;
}



#button {

    background-color: #4caf50;
    color: #fff;
    padding: 10px;
    border: none; 
    border-radius: 4px;
    cursor: pointer;
    margin:32px;
}

#button:hover {
    background-color: #ec0000;
}

    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formex1</title>
</head>
<body>
    <div class="borderr">
    <form action="" methode="get">
        <label for="name">Nom:</label></br>
        <input type="text" name="nom" id=""> </br>
        <label for="email">Email:</label></br>
        <input type="email" name="pw" id=""></br>
        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" required>
        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea>
        <input type="submit" value="valider" id="button" >


    </form>
    </div>
    <?php
//      $from = "elamiriamir7@gamil.com";
// if (empty($_GET["nom"]) || empty($_GET["subject"]) || empty($_GET["message"]) || empty($_GET["pw"]) || !preg_match("/^[A-Za-z]+$/", $_GET["nom"])) {
//     echo "error";
// } elseif (isset($_GET["nom"]) && isset($_GET["subject"]) && isset($_GET["message"]) && isset($_GET["pw"]) && preg_match("/^[A-Za-z]+$/", $_GET["nom"])) {
//     echo "Your name is: " . $_GET["nom"] . "<br>";
//     echo "Your password is: " . $_GET["pw"] . "<br>";
//     echo "Your subject is: " . $_GET["subject"] . "<br>";
//     echo "Your message is: " . $_GET["message"] . "<br>";
// }
// mail($from,$_GET["subject"],$_GET["message"],$_GET["pw"]);
// 


$from = "elamiriamir7@gmail.com";

if (empty($_GET["nom"]) || empty($_GET["subject"]) || empty($_GET["message"]) || empty($_GET["pw"]) || !preg_match("/^[A-Za-z]+$/", $_GET["nom"])) {
    echo "error";
} else {
    echo "Your name is: " . $_GET["nom"] . "<br>";
    echo "Your password is: " . $_GET["pw"] . "<br>";
    echo "Your subject is: " . $_GET["subject"] . "<br>";
    echo "Your message is: " . $_GET["message"] . "<br>";
    // Syntax
    // mail(to,subject,message,headers,parameters);
    // $validation = mail($from, $_GET["subject"], $_GET["message"],"From: $_GET["pw"]);

    if ($validation) {
        echo "Email sent successfully";
    } else {
        echo "Error sending email";
    }
}
?>

</body>
</html>