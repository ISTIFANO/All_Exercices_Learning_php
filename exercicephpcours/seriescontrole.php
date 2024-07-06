<?php
// ---------------------------------------------------------------- ex1 par1
function aliatoire($o){
    $n= rand(1, 100);
    echo "Devinez le nombre (entre 1 et 100) : ";
    $o= readline();
    if ($o == $n) {
        echo "Bravo ! Vous avez deviné le bon nombre : $n\n";
    } else {
        echo "Dommage ! Le nombre à deviner était : $n\n";
    }

}
aliatoire(8);
echo "<br/>";

// ---------------------------------------------------------------- ex2 par1


$string = "Helloworld";
$string2 = "";

for ($i = strlen($string) - 1; $i >= 0; $i--) {
    $string2 .= $string[$i];
}

echo $string2, "<br/>";

// ---------------------------------------------------------------- ex1 part2
function puicence($nb1,$nb2){
 $resultat =$nb1**$nb2;
 echo $nb1," la puicence  ",$nb2," equals ",$resultat ;
}
puicence(2,3);

echo "<br/>";
// ---------------------------------------------------------------- ex2 part2
function revmots() {
$noms = "Alice, Bob, Charlie, David, Eve";
$r=str_word_count($noms);
echo "nembre des noms dans arr sont ".$r, "<br/>";}
revmots();

echo "<br/>";
// ---------------------------------------------------------------- ex1 part3
$etud = array(
    array("nom" => "John Doe", "notes" => 90, "date" => "2023-01-01"),
    array("nom" => "Jane Smith", "notes" => 88, "date" => "2023-01-02"),
    array("nom" => "Bob Johnson", "notes" => 95, "date" => "2023-01-03")
);

foreach ($etud as $key) {
    echo "Student Name: " . $key["nom"], "<br/>" ;
   
    echo "Grades: " . $key["notes"] , "<br/>";
    
    echo "Date: " . $key["date"] , "<br/>";
    echo "<br/>";
}
// ---------------------------------------------------------------- ex2 part3
$arr = array(1, 2, 3, 4, 5);
print_r ($arr);
echo "<br/>";
foreach ($arr as $number) {
    if ($number % 2 == 0) {
        echo $number . "\n";
    } else {
        echo "inpair\n";
        
    }
}
// ---------------------------------------------------------------- ex1 part4
echo "<br/>";
function reveequality($sting,$str2){
    $str2= strrev($sting);
    if ($str2==$sting) {
        echo "equals\n";
    }
    else{echo "note_equals\n";} ;
}
reveequality("aaa","aaa");

// ---------------------------------------------------------------- ex2 part4
function repet($rpt) {
    $rep = array("elamet", "jdjjds");

    foreach ($rep as $key) {
        echo substr_count($key, $rpt) . "<br>";
    }
}


repet("j");
// ---------------------------------------------------------------- ex1 part5
// le trie 
function bubbleSort($arr) {
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    return $arr;
}
$nb3 = [4, 77, 3, 12, 242, 161, 90];
$solu = bubbleSort($nb3);
echo "le trie des nb sont : " . implode(", ", $solu);

// ---------------------------------------------------------------- ex2 part5
function Fibonacci($nb4){
    // chat gpt edition bcs i 
    $fib2;
    $fib1=1;
    $fib0=0; 
    for ($i = 2; $i <= $nb4; $i++) {
       $fib2=$fib1+$fib2;
       $fib0=$fib1;
       $fib1=$fib2;
    }
    return $fib2;
echo "The first 10 terms of the Fibonacci sequence are: ".Fibonacci(10);

// ---------------------------------------------------------------- ex1 part6

}
   



?>