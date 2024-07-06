<?php
include("connexion.php");

$xml = simplexml_load_file("rapport_notes.xml");// 


foreach ($xml->children() as $child) {

    $nom = $child->nom;

    $prenom = $child->prenom;
    
    $matieres = $child->matieres;

    foreach ($matieres->children() as $matiere) {
        $nom_mat = $matiere->nom;
        $note_mat = $matiere->note;

        $query = "INSERT INTO Etudiant (nom,prenom,matiere, note)
            VALUES ('$nom', '$prenom', '$nom_mat', '$note_mat')";
    
        $re= mysqli_query($connexion, $query);
        
      
        if (!$re) {
            echo "Error: " . mysqli_error($connexion);
        }
    }
}
?>
