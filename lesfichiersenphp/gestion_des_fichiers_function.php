<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo "<br>######################################################### reading file using readfile() function ################### <br>";
    $data = readfile("fichier.txt");
    
    echo "<br>############# reading file using fopen() function ################### <br>";

    $file= fopen("fichier.txt", "r") or die("Failed to open");
    // fread(return=>fopen,size=>sizeof)
    $data= fread($file,filesize("fichier.txt"));
    fclose($file);
    echo $data;
    echo "<br>############# reading file  line by line only single line ################### <br>";
    $file= fopen("fichier.txt", "r") or die("Failed to open");
    $data= fgets($file);
    fclose($file);
    echo $data;
    echo "<br>############# reading file  line by line  ################### <br>";
    $file= fopen("fichier.txt", "r") or die("Failed to open");
    while(!feof($file)){
        $data=fgets($file);
        echo $data. "<br>";
    } echo $data;
    fclose($file);
    echo "<br>############# reading file  char by char  ################### <br>";

// fgetc read char by char
    $file= fopen("fichier.txt", "r") or die("Failed to open");
    while(!feof($file)){
        $data=fgetc($file);
        echo $data."  ";
    } echo $data;
    fclose($file);

    echo "<br************** writing data in the file *********** <br>";
    $file= fopen("fichier.txt", "w");
    $les_donnes="El amiri ";
    // f write (return=>fopen,les donnes );
    fwrite($file,$les_donnes);
    fclose($file);
    echo "<br************** writing data using file_get_contents() *********** <br>";

    $get = file_get_contents("fichier.txt");
    echo $get;

    // echo "<br************** writing internet data  using file_get_contents() *********** <br>";

    // $get = file_get_contents("https://www.google.com");
    // echo $get;
    echo "<br************** writing data in to file_put_contents() *********** <br>";
    $get = file_put_contents("fichier.txt","writing data in to file_put_contents()");




    ?>
</body>
</html>