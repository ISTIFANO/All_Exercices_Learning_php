<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styleform.css">
    <style>
        /* code css */
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex6</title>
</head>
<body>
    <form action="" method="get">
        <label for="th">TH</label>
        <input type="number" name="th" id=" ">
        <label for="taux">Taux</label>
        <input type="number" name="taux" id="taux"><br>
        <label for="ttc">TTC</label>
        <input type="number" name="ttc" id="ttc" readonly><br>
        <button type="submit" id="butt">Submit</button>
    </form>

    <?php 
    if (isset($_GET["th"]) && isset($_GET["taux"])) {
        $th = $_GET["th"];
        $taux = $_GET["taux"];
        $ttc = $th * (1 + ($taux / 100));
       

        echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    document.getElementById('ttc').value = $ttc.toFixed(2);
                });
              </script>";
    }
    ?>
</body>
</html>
