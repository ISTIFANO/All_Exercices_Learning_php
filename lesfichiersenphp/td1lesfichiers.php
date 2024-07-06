<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>les fichier </title>
</head>
<body>
    <form action="codeex1php.php" method="get" enctype="multipart/form-data">
        <!-- <label for="text">nom</label>  -->
     <!-- <textarea name="text" id="" cols="30" rows="10"></textarea> -->
    <input type="file" name="fich" accept="image/png, image/jpeg" multiple size="50"/>
    <!-- <input type="file" name="fich"  accept=".jpg, .jpeg, .png" multiple size="50"/> -->

    <input type="submit" value="submit">
    <!-- <input type="button" value="button"> -->
    </form>


    <?php
    echo reArrayFiles();
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['fich'])) {
        $file = $_GET['fich'];
        echo $file; 
        echo $file['name']; 
    } else {
        echo "Error: 'fich' parameter not set.";
    }
} else {
    echo "Error: Invalid request method.";
}
echo $_FILES[""];

?>


</body>
</html>