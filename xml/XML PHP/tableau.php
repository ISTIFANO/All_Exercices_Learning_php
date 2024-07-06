<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Données de l'IUT</title>
</head>
<body>

<table border="1">
    <thead>
        <tr>
            <th>etudiant ID</th>
        	     <th>Nom etudiant</th>
            <th>UV</th>
                    <th>Duree</th>
            <th>Note</th>
        </tr>
    </thead>
    <tbody>
   
        <?php
        $xml = simplexml_load_file("iut.xml") ;
        foreach ($xml->etudiant as $etudiant) {
            $id = $etudiant['id'];
            $nom = $etudiant['nom'];
            
            foreach ($etudiant->uv as $uv) {
                           $nom_uv = $uv->nom;
                $duree = $uv->durée;
     $note = $uv->note;
                
                echo "<tr>";

                echo "<td>$id</td>";
            

        echo "<td>$nom</td>";

                echo "<td>$nom_uv</td>";

         echo "<td>$duree</td>";

                echo "<td>$note</td>";

                echo "</tr>";
            }
            

        
        }
        ?>
    </tbody>
</table>

</body>
</html>
