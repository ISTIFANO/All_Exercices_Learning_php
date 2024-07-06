<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex6</title>
</head>
<body>
    <form action="" method="get">
             <label for="t[]">TH</label>
            <input type="number" name="th" id="th">
            <label for="t[]">Taux</label>
            <input type="number" name="taux" id="taux"><br>
            <label for="t[]">ttc</label>
            <input type="number" name="ttc" id="ttc" ><br>
            <button id="butt">submit</button>

    </form>
<?php 
// $script= "<script>
// document.addEventListener('DOMContentLoaded', function() {
//     var taux = document.getElementById('taux').value;
//     var th = document.getElementById('th').value;
    
//     var ttc = taux * th;
//     document.getElementById('ttc').value = ttc;
// });
// </script>";
if (isset($_GET["th"]) && isset($_GET["taux"])) {
$th= isset($_GET["th"]);
$taux= isset($_GET["taux"]);
$ttc = $th * $taux;


echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('ttc').value = $ttc;
        });
        </script>";
    }

?>
</body>
</html>