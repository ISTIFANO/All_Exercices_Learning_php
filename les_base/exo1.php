<?php
/*$title="<title>exercice php : les variables en php</title>";
$tite2="<h1>exercice php : les variables enphp</h1>";
$nom="amir";
$module="";
$message="Mon nom";
echo $title ;
echo $tite2;
echo $nom;


$title="<title>calculer sur les variables </title>";
$h3="<h3>calculer sur les variables </h3>";
$style="<style>
body{
    text-align: center;
    background-color: red;
    
}

</style>";
                                //echo gettype($style);
$ttc1="TTC";
$val=19;
$nbp=10;
$nb2c=150;
$price=$nbp*$nb2c;
$tva=0.19*$price;
// $ttc=$price+$tva;
// echo $title;
// echo $style;
// echo $h3;
//  echo "les valeurs ",$val ,"/% <br />",$nb2c ,"/. ",$nbp," la valeur ttc",$ttc1; 
// echo "le prix <br/>",$price,"TVA EST<br/>",$tva,"le ttc",$ttc;*/
// // 0=false null=false or false=false

// /*
// //ex 1

// $phrase="<h1>Aamir el amiri</h1>";
// echo strlen($phrase),"<br/>";
// echo strtoupper($phrase),"<br/>";
// echo strtolower($phrase),"<br/>";

// //ex2 
// $phrase2="btsetudient";

// echo substr($phrase2,1,7);

// //ex3

// echo substr_replace($phrase,"yassir",4,5);

// //ex4
// $phrase3="etudient";
// echo strrev($phrase3);



// */

// $noms="amer,aamir,amir,Aamir,elamir";
// $nb=1;

// echo strlen($noms);

// for($x=0;$x<strlen($noms);$x++){
//     if($noms[$x]==","){
//         $nb++;
        
//     }
//     }
    

// echo $nb;


// // DECLARATION D UN TABLE

// /*$fruits = array();
// $cars = array("Volvo", "BMW", "Toyota");
// $numbers = array(4, 6, 2, 22, 11);
// $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
 
// echo count($numbers);

// // */
// // sort()- trier les tableaux par ordre croissant
// // rsort()- trier les tableaux par ordre décroissant
// // asort()- trier les tableaux associatifs par ordre croissant, selon la valeur
// // ksort()- trier les tableaux associatifs par ordre croissant, selon la clé
// // arsort()- trier les tableaux associatifs par ordre décroissant, selon la valeur
// // // krsort()- trier les tableaux associatifs par ordre décroissant, selon la clé
// // *********
// // echo "<h1>3.tri des noms :<br></h1>";
// // sort($tab);
// // $i=1;
// // foreach($tab as $value){
// //     echo $i."- ".$value."<br>";
// //     ++$i; 
// // $colors = array("red", "green", "blue", "yellow");

// // foreach ($colors as $value) {
// //   echo "$value <br>";};

// //   $personne = array("amir"=>"35", "ayoub"=>"37", "rim"=>"12");

// // foreach($personne as $x => $val) {
// //   echo "<h1>$x = $val</h1><br>";
// // }

// // $noms="Amer,Khadija,Kmir,Kamir,Hlamir";
// // $nb=1;

// // error_de code cas a logic
// // echo strlen($noms),"<br>";   
// // substr_count               // 

// // for($x=0;$x<strlen($noms);$x++){
// //     if($noms[$x]==strtoupper($noms)){
// //         $nb++;

// //     }
// //     }


// // echo $nb;



// $noms = "Alice, Bob, Charlie, David, Eve";

// for ($i = strlen($noms) - 1; $i >= 0; $i--) {
// echo $noms[$i];

// // 1

// $lch = strlen($noms);
//  $nab = substr_count($noms,', ');
// $nb = str_word_count($noms);
// echo " Longueur : $lch<br>";
// print_r($nb) ;


// // Affichage des Noms



//     echo "2.Affichage des Noms :<br>";
//     $tab=explode(",",$nom);

//     $i=1;
//     foreach($tab as $i => $value){
//         echo $i."=".$value."<br>";
//         ++$i; 
//     }

//     echo "3.tri des noms :<br>";
//     sort($tab);
//     $i=1;
//     foreach($tab as $value){
//         echo $i."- ".$value."<br>";
//         ++$i; 
//     }
//     echo "3.tri des noms :<br>";
//     //trier tableau
//     sort($tab);
//     $i=1;
//     //affichage des nom triee
//     foreach($tab as $value){
//          echo $i." = ".$value."<br>";
//         ++$i; 
//     }
//     echo "4-Recherche de noms <br>";
//         echo '
//         <html>
//             <form action="">
//                 <label for="nom">Noms:</label>
//                 <input type="text" id="nom" name="leNom" >
//                 <input type="submit" value="chercher">
//           </form>
    

// $t = date("H");

// if ($t < "20") {
//   echo "Have a good day!";
// } else {
//   echo "Have a good night!";
// }


//  $age =19;
// if ($age < 18) {
//     $categorie = "Mineur";
// } elseif ($age >= 18 && $age <= 65) {
//     $categorie = "Adulte";
// } else {
//     $categorie = "Senior";
// }

 
//  elseif {
//     echo "<p>erreur d'âge .</p>";
//     echo "<p> d'âge : $categorie</p>";}
// }





// switch 

// $poids = readline("entrer le poi")?? 0; ;
// $poids = 9;
// switch ($poids) {
//     case ($poids<2):
//         echo "5dh";
//         break;
//   case (5):
//     echo "8 dh";
//     break;
//   case (2 && 5) :
//     echo "8 dh";
//     break;
//   case (5 && 10):
//     echo "12 dh";
//     break;
//     case (10 && 11):
//         echo "15 dh";
//   default:
//     echo " ty \<3 ";
// }

// Tableau mult associatif
$personne = array(
    'youness' => array(
        'prenom' => 'ys',
        'ville'=> 'mhamide',
        'age' => 20
    ), 'aamir' => array(
        'prenom' => 'istifano',
        'ville' => 'loudaya',
        'age' => 20
    ), 'rim' => array(
        'prenom' => 'rema',
        'ville' => 'doha',
        'age' => 19
    ), 'yassir' => array(
        'prenom' => 'ys',
        'ville' => 'dawdiyat',
        'age' => 20
    ),);
    
  

    // echo "Nom: youness\n";

    // echo "Prénom: " . $personnes['youness']['prenom'] . "<br>";

    // echo "ville: " . $personnes['youness']['ville'] . "<br>";

    // echo "age: " . $personnes['youness']['age'] . "<br>";
   //foeach
//     foreach ($personne as $nom => $val) {
//         echo "$nom";
//         foreach ($val as $key => $ue) {
//          echo"$key","=";
//             echo "$ue" ;

//             echo "<br>"   ;

// //  }}
//     // while	
//     $var = sizeof($personne);
// $var2 =0;
// while ($var2<= $var) {

    
//     echo "prenom=".$personnes['prenom'],"<br>" ;
//     echo "ville=".$personnes['ville'],"<br>";
//     echo "age=".$personnes['age'],"<br>";
// $var2++;

// }



 $personnes = [
    "aamir"=>[ "loudaya", "marrakech", 20],
    "aamir"=>[ "loudaya", "marrakech", 20],
    "youness"=>["mhamid","marrakech", 20],
   
    "sekks"=>["taya", "casa",24]];

 $keys= array_keys($personnes);
 $j=0; 
 
 while($j!= sizeof($personnes)){
 echo"<br>";


 echo $personnes[$keys[$j]][0]."<br>";
echo $personnes[$keys[$j]][1]. "<br>";
echo  $personnes[$keys[$j]][2]. "<br>";
//  echo $personnes[$keys [$j］]［$j1］."<br>"；

 

 echo "<br>";
}