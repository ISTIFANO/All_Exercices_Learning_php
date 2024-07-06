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
<input type="number" name="num" id="num11">
<input type="number" name="num1" id="num12"> <br>
<INPUT TYPE="radio" NAME="rad" VALUE="-"id="rad3">-<BR>
<INPUT TYPE="radio" NAME="rad" VALUE="*"id="rad2">*<BR>
<INPUT TYPE="radio" NAME="rad" VALUE="/"id="rad4">/ <BR>
<INPUT TYPE="radio" NAME="rad" VALUE="+" id="rad1"CHECKED>+<BR>
<br>
   <button onclick="calculate()" > submit</button>
    </form>

    <?php 
    
    $script= "<script>
    function calculate() {
        var rad1 = document.getElementById('rad1').checked;
        var rad2 = document.getElementById('rad2').checked;
        var rad3 = document.getElementById('rad3').checked;
        var rad4 = document.getElementById('rad4').checked;
        var num1 = document.getElementById('num11').value;
        var num2 = document.getElementById('num12').value;
        var result;

        if (rad1) {
            result = parseFloat(num1) + parseFloat(num2);
        }
        else if(rad2) {
            result = parseFloat(num1) * parseFloat(num2);

        }
        else if(rad3) {
            result = parseFloat(num1) - parseFloat(num2);

        }
        else if(rad4) {
            result = parseFloat(num1) / parseFloat(num2);

        }

        alert('Result: ' + result);}
    
</script>";
    if(isset($_GET["rad"]) && isset($_GET["num"]) && isset($_GET["num1"])){
        echo "<ul>";
        echo "<br>";
            echo "<li>ton choix de opérande =   </li>",$_GET["num"];
            echo "<br>";
            echo "<li>ton choix de opérande =  </li>",$_GET["num1"];
    echo "<br>";
            echo "<li>ton choix de opération c est </li> ",$_GET["rad"];

            echo $script;
            echo "<br>";
            echo "</ul>";


        }
    
        $res = 0;
    switch ($_GET["rad"]) {
        case "+":
            $res = $_GET["num"] + $_GET["num1"];
            break;
        case "*":
            $res = $_GET["num"] * $_GET["num1"];
            break;
        case "-":
            $res = $_GET["num"] - $_GET["num1"];
            break;
        case "/":
            $res = $_GET["num"] / $_GET["num1"];
            break;
    }

    echo "<br>";
    echo "<li>Resultat est : $res </li>";

    echo $script;
    echo "<br>";
    echo "</ul>";

    ?>
</body>
</html>