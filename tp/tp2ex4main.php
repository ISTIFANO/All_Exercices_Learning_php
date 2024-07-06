<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
</head>
<body>



<form action="localdata.php" method="get">
    <p>Number of Rows (L)</p>
    <label for="rows"></label>
    <input type="number" name="a" id="rows" required><br>

    <p>Border Size (B)</p>
    <label for="border"></label>
    <input type="number" name="b" id="border" required><br>

    <p>Number of Columns (C)</p>
    <label for="columns"></label>
    <input type="number" name="c" id="columns" required><br>

    <button type="submit">Submit</button>
</form>

</body>
</html>
