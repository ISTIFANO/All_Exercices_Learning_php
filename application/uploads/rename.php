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
        <input type="text" name="newname"value ="<?=$_GET["sub"]?>" id="">
        <input type="hidden" name="namee" value ="<?=$Nname?>">
        <input type="button"name="sub"  value="raname">
        </form>
        <?php 
        
        if(isset($_POST["sub"])){
                
            $Nname = "./uploads/" . $_GET["Nname"];
            $Oname = $_POST["Ooldame"];
    
           if( coppy($Oname,$Nname)){
                unlink($Oname);
            }
    
    
        }    
        
        
        
        
        
        ?>
    </form>
</body>
</html>