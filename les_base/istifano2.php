<?php 



// function addNumbers(float $a, float $b) : int {
//     return (int)($a + $b);
//   }
//   echo addNumbers(2.3, 5.2);

 
// $a= get_loaded_extensions();

// print_r($a);

// for($i=0;$i<sizeof($a);$i++){



// $function =get_extension_funcs($a[i]);


// // print_r($function[$i]);
// // }

// // exercice 2
// // part 1

// // function algo1(int $n){
// //     $S=0;
// //     for($i=0;$i<$n;$i++){


// //         $S+=$i;
// //     }

// //     echo $S;}


// function algo1($n){
// if($n==0){
// return 0;}

// return $n +algo1($n-1);


// }
// echo algo1(19);

// function algo2($a,$b){
//     if($b==0){
//         return 0;
//     }

//         $r = $a % $b;
//         $a =$b;
//         $b =$r;


//        return algo2($a,$b-1);

// }
// // algo2($a,$b-1);


// algo2(2,21);


// // <!--  calculer le factoreil d un nembre enter -->

// function Factoreil($nb){

//     if($nb ==0 || $nb ==1){
//          return 1;

       
//     } 
//     return $nb*Factoreil($nb-1);
//  }
//  echo  Factoreil(10);


// exercice 4
$nb = 0;
$solde = 0;


 function aficher(){
     global $solde;
     global $nb1;
     echo $solde;
     $nb1++;
 }

 function recoit($solde,$demi){
    // global $demi;
    global $nb1;
    if($solde !== 0){
        $nb1++;
   
    }else{
     $solde=-$demi;

    }
    echo $solde;
}

  

function augmenter($solde,$nb){
    global $nb1;
    // global $nb;
    if($solde > 0){

        $solde=+$nb;
        $nb1++;
    }

echo "<br/>", $solde;




 }

function test(){

    echo $nb1;

}

recoit(100,5);
augmenter(122,21);


// exercice 5



    echo '<script>
    
    function afficheAlerte() {
            alert("Chaine de caracteres");
        }
    </script>';


echo '<script> afficheAlerte()</script>';

// exercice 6

$tab = array(
    array("Nom" => "amir", "Âge" => 20, "Ville" => "kech"),
    array("Nom" => "rim", "Âge" => 19, "Ville" => "kech"),
    array("Nom" => "khadija", "Âge" => 19, "Ville" => "kech")
);

function affichearr() {

global $tab;
   
     
    echo "<table border='1' >";
    foreach ($tab as $key => $val) {
        echo "<tr>";
        foreach ($val as $k => $v) {
            echo "<td>  $v  </td>";
          

          
        }
       
        echo "</tr>";}
      
        echo "</table>";
    }
    
affichearr($tab);


// la calcule de factoreil 

function Factoreil($nb2){

    if($nb2 ==0){
         return 0;

       
    } 
    return $nb2*Factoreil($nb2-1);
 }

// exercice 7 



function somme($x,$n)

{
    //  $nb2;
    $somme=0;
    if($n == 0){

        return $x;
    } 
    for ($i = 0; $i <= $n; $i++) {
        $reg = (pow($x,2*$i+1)) / Factoreil($i);

     $somme+= $reg;

    return $somme;
    }
}


    echo somme(3,3);


    // exercice 8 




?>
