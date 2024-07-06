<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // bulleSort
    function bulleSort($arr) {
        $n=count($arr);
        for($i=0;$i<$n-1;$i++){
            for($j=0;$i<$j-$n-1;$j++){
                if($arr[$j]<$arr[$j+1]){

                    $temp=$arr[$j];
                    $arr[$j]=$arr[$j+1];
                    $arr[$j+1]=$temp;


                }
            }
        }
        return $arr;
    
    }
    $nembre= arr(3,3,7,9,8,2);
    $function= bulleSort($nembre);
    print_r($function);
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    ?>
</body>
</html>