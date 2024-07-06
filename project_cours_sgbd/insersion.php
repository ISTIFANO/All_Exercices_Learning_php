<?php 

if(isset($_POST['num_mo']) && isset($_POST['nom']) && isset($_POST['numero'])){
    include "connexion.php";
  
      
        $inputdata = $connexion->prepare("SELECT * FROM modele WHERE num_mo = ? AND nom = ? AND numero = ?");
        $inputdata->bind_Param('isi', $_POST['num_mo'], $_POST['nom'], $_POST['numero']);
        $inputdata->execute();
        $inputdata_resultat = $inputdata->get_result();

        if($inputdata_resultat->num_rows > 0){
     
            echo "Les donnees existent dans db";

          
            while($row = $inputdata_resultat->fetch_assoc()) {
                $num_mo = $row['num_mo'];
                $nom = $row['nom'];
                $numero = $row['numero'];

                // Faites ce que vous voulez avec ces valeurs...
            }
        } else {
       
            echo "Les donnees n'existent pas dans db ";
        }

       
        $inputdata->close();
        $connexion->close();
    }

?>
