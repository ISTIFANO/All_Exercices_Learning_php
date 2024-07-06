<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method = "POST">
        <label for="input">Numero</label>
        <input type="text" name="num" >
        <input type="submit" value="triee">
    </form>
</body>
</html>
<?php


if(isset($_POST["num"])){
    $num = $_POST["num"];
   
    $reg_Num = preg_match("/^(\d+\s*|\d+\s+)*\d+$/",$num);
    if($reg_Num){
       $num = str_replace(";"," ",$num)  ;  
       $tab = explode(" ",$num);  
       
         
    trie($tab);
         
        afficher($tab);
        
}

}
function trie(&$tab){
            for($i = 0 ; $i < count($tab) ;$i++){
                for($j = $i+1 ; $j < count($tab) ;$j++){
                if($tab[$i]>$tab[$j]){
                    $p = $tab[$i];
                    $tab[$i] = $tab[$j];
                    $tab[$j] = $p;
                }
                } 
                
            }
           
        }
 function afficher($tab){
            echo "<table border = '2'>";
            foreach ($tab as  $value) {
                echo " <tr><td> ".$value." </td></tr> ";
            }
            echo "</table>";
        }

        

        // 

        if(file_exists("nembre.txt")){
            $open = fopen("nembre.txt", "a+");
           	
         fwrite($open, $_POST["num"]);
         $liqne = fgets($open);
       
         fclose($open);
         
         $open = fopen("nembre.txt", "r");	
         $red=  explode(" ", $liqne);
         sort($red);
      
             while(! feof($open)) {
             $line = fgets($open);
             echo $line. "<br>";
         }

         echo copy("nembre.txt","resultat.txt");
         fclose($open);
    // $LINE=   $lines = file("nembre.txt", FILE_IGNORE_NEW_LINES);
    // sort($LINE);
        }
        

    

?>