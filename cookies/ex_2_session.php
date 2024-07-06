<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=f, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $visite= $_SESSION["visite"];
    $time= time()-$_SESSION["time"] ;
echo "<h1>
    nb de visite : ". $visite."
</h1>";
$visite++;
echo "<h1>
    le temps : ". $time."
</h1>";

?>
</body>

</html>