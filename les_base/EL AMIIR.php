<?php
    $nom="Alice,Bob,Carlie,David,Eve";
    echo "1.longueur et nombre d :<br>";
    $longDeNom=strlen($nom);
    $numDeNom=substr_count($nom,',')+1;
    echo "la longueur de la chaine est : $longDeNom <br>";
    echo "le nombre des noms est : $numDeNom <br><br>";
    echo "2.Affichage des Noms :<br>";
    $tab=explode(",",$nom);
    $nom="John,Arthur,Alice,Bob,Carlie,David,Eve,Jahn";
    $numDesChar=0;
    $numDesMots=0;  
    $tab=[];
    $indiceTab=0;
    while($nom[$numDesChar]!==''){
        if($nom[$numDesChar]!=','){
            $tab[$indiceTab].=$nom[$numDesChar];
        }      
        $numDesChar++;
        if($nom[$numDesChar]==','){
            $numDesMots++;

            $indiceTab++;
        }
    }
    $numDesMots++;
    echo "<h3>1.longueur et nombre de noms :<br></h3>";
    echo "la longueur de la chaine est :$numDesChar<br>";
    echo "le nombre des noms est : $numDesMots<br><br>";
    echo "<h3>2.Affichage des Noms :<br></h3>";
    for($i=0;$i<=$indiceTab;$i++){
        echo $i+1,"-" ,$tab[$i]."<br>";
    }
    echo "<h3>3.tri des noms :<br></h3>";
    var_dump( $tab[4][0]<$tab[0][0]);
    $tabTri=$tab;
    $per;
    for($i=0;$i<$indiceTab;$i++){
        for($j=$i+1;$j<=$indiceTab;$j++){
            if($tabTri[$i][0]>$tabTri[$j][0]){
                $per=$tabTri[$i];
                $tabTri[$i]=$tabTri[$j];
                $tabTri[$j]=$per;
            }
            else if($tabTri[$i][0]==$tabTri[$j][0]){
                $indiceMots=1;
                while($tabTri[$i][$indiceMots]!==''&&$tabTri[$i][$indiceMots]!==''){
                    if($tabTri[$i][$indiceMots]>$tabTri[$j][$indiceMots]){
                        $per=$tabTri[$i];
                        $tabTri[$i]=$tabTri[$j];
                        $tabTri[$j]=$per;
                        break;
                    }
                    else if($tabTri[$i][$indiceMots]==$tabTri[$j][$indiceMots]){
                        $indiceMots++;
                    }
            }
        }
    }}
    for($i=0;$i<=$indiceTab;$i++){
        echo $i+1,"-" ,$tabTri[$i]."<br>";
    }
    echo "<br><h3>6-Extraction des Noms</h3><br>";
    $prenom=explode(',',$nom);
    print_r($prenom);
    echo "<br><h3>7-Inversement des Noms</h3><br>";
    $tabRev=$tab;
    for($i=count($tab)-1;$i>=0;$i--){
        $tabRev[count($tab)-1-$i]=$tab[$i];
    }
    $i=1;
    foreach($tabRev as $value){
        echo $i."- ".$value."<br>";
        ++$i; 
    }


<?php
    $N=",";
    $i=1;
    foreach($tab as $value){
        echo $i."- ".$value."<br>";
        ++$i; 
    }
    echo "3.tri des noms :<br>";
    sort($tab);
    $i=1;
    foreach($tab as $value){
        $nom="Alice,Bob,Carlie,David,Eve";
        echo "1.longueur et nombre de noms :<br>";
        //calcule longeur
        $longNom=strlen($nom);
        //calcule nom
        $numNom=substr_count($nom,',')+1;
        //affichage
             echo "la longueur de la chaine est : $longNom <br>";
             echo "le nombre des noms est : $numNom <br><br>";
        echo "2.Affichage des Noms :<br>";
  //cree un tableau separer par ,
        $tab=explode(",",$nom);
        $i=1;
  //affichage
        foreach($tab as $value){
             echo $i."- ".$value."<br>";
             ++$i; 
        }
        echo "3.tri des noms :<br>";
  //trier tableau
        sort($tab);
        $i=1;
        //affichage des nom triee
        foreach($tab as $value){
             echo $i."- ".$value."<br>";
            ++$i; 
        }
        echo "4-Recherche de noms <br>";
        echo '
        <html>
            <form action="" method="POST">
                <label for="nom">Noms:</label>
                <input type="text" id="nom" name="leNom" >
                <input type="submit" value="chercher">
            </form>
        </html>';  
        $j=0;
        // pour recuperer le nom 
        $nomChercher=$_POST["leNom"] ?? "";
        // pour vérifier si le nom est présent
        foreach($tab as $value){
            if($value===$nomChercher){
                $j++;
                break; 
            }
        }
        // Afficher les résultat de la recherche
        if($j!=0){
            echo "le nom ".$nomChercher." est trouve dans la liste<br>";
        } 
        else{
            echo "le nom ".$nomChercher." ne se trouve pas dans la liste<br>";
        }
       
    
    
        echo $i."- ".$value."<br>";
        ++$i; 
    }
    echo "4-Recherche de noms <br>";
    echo '
    <html>
        <form action="" method="POST">
            <label for="nom">Noms:</label>
            <input type="text" id="nom" name="leNom" >
            <input type="submit" value="chercher">
        </form>
    </html>';  
   


?>