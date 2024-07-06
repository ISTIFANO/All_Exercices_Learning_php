<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo $_SERVER['PHP_SELF'];
     echo "<br>";
     echo $_SERVER['SERVER_NAME'];
     echo "<br>";
     echo $_SERVER['HTTP_HOST'];
     echo "<br>";
     echo $_SERVER['HTTP_REFERER'];
     echo "<br>";
     echo $_SERVER['HTTP_USER_AGENT'];
     echo "<br>";
     echo $_SERVER['SCRIPT_NAME'];
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
function repet($rpt) {
    $rep = array("elamet", "jdjjds");

    foreach ($rep as $key) {
        echo substr_count($key, $rpt) . "<br>";
    }
}


repet("d");
     ?>
</body>
</html>