<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styleform.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <label for="text">saisir votre text svp</label>
    <input type="password" name="taexz" id=""> <br>
    <input type="submit" value="submit">
    </form>

    <?php 
    // $regex="/^[a-zA-Z\d\.]+@[a-zA-Z\d]+\.[a-zA-Z]{2,3}+$/"; for email addresses
    // $regex="/^[0][6-7-5]+[\d]{8}+$/"; for phone nember 
    // $regex="/^[\d]{5}+$/"; for code postal
   // $regex="/^[A-Z][a-z]+$/"; pr lettre majusculle (Aamir)
//    $regex="/^[A-Z]{2}[a-z]+$/"; prenom 2 pr lettre majusculle (ELamiri)
// $regex="/^[A-Za-z\d]+$/"; password Amir123 (des lettre majuscule et des lettre muniscule et des nb)

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['taexz']) && preg_match($regex,$_POST['taexz'])){
            echo "valide";
        } else{
                echo"invalide";
            } 

        }
    
    
    
    
    
    
    
    
    
    ?>
</body>
</html>