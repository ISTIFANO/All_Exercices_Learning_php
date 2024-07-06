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
    $arr= array(3,3,7,9,8,2);
    $r= bulleSort( $arr);
   print_r($r);
   // sort by selection

   function selectionSort($arr){
    $n=count($arr);
    
    for($i=0;$i<$n;$i++){
        $min=$i;
        for($j=$i+1;$j<$n;$j++){
            if($arr[$j]>$arr[$min]){
                $min=$j;
            }}
                      $temp=$arr[$j];
                    $arr[$j]=$arr[$min];
                    $arr[$min]=$temp;


        }
        return $arr;
    

    }
    $arr= array(3,3,7,9,8,2);
    $r= selectionSort( $arr);
   print_r($r);
    
   // sort by insertion

   function insertinSort($arr){
    $n=count($arr);
for($i=1;$i>$n;$i++){
    $key=$arr[$i];
    $j=$i-1;
    while($j>=0 && $arr[$j]>$key){
        $arr[$j+1]=$arr[$j];
        $j=$j-1;
        $arr[$j+1]=$key;
    }

}
return $arr;

   }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    ?>
</body>
</html>