<?php
require "../Gestion_bases_donnees/fonctionsSQL.php";


//fonction pour ajouter un fichier a la base de donnees
function ajouter($nom, $type, $taille) {
    global $connexion;
    //preparer la requete SQL en utilisant une requete preparee pour eviter les attaques par injection SQL
    $stmt = mysqli_prepare($connexion, "INSERT INTO fichiers (nomFichier, typeFichier, tailleFichier) VALUES (?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "ssi", $nom, $type, $taille);
    if (mysqli_stmt_execute($stmt)) {
        echo "<script>alert('Insertion réussie')</script>";
        echo "<script>window.history.back()</script>";
    } else {
        echo "<script>alert('Échec de l'insertion')</script>";
        echo "<script>window.history.back()</script>";
    }
    mysqli_stmt_close($stmt);
}

if(isset($_POST['telecharger'])){
    // Récupérer les informations sur le fichier envoyé via le formulaire.
    $fichier=$_FILES['fichier'];
    // Définition de la taille maximale autorisée pour le fichier
    $taille=2*1024*1024;
    // Définition des extensions de fichiers autorisées pour les téléchargements.
    $extensions=["jpeg","jpg","mp3","mp4","pptx","docx","pdf"];
    // Extraire l'extension du nom de fichier.
    $extension=pathinfo($fichier['name'],PATHINFO_EXTENSION);
    // Répertoire de stockage des fichiers.
    $stockage="C:\wamp64\www\php project\projet_gestion_multimedia\Gestion_fichiers\Telechargements\\";
    if($fichier['error']==UPLOAD_ERR_OK){
        if(in_array($extension,$extensions)){
            if($fichier['size']<$taille){
                // Générer un identifiant unique pour le nouveau nom de fichier.
                $nvNom=uniqid("Fichier",true);
                $stockage.=$nvNom.".".$extension;
                if(move_uploaded_file($fichier['tmp_name'],$stockage)){
                    echo "<script>alert('Le fichier a ete telecharge avec succes')</script>";
                    // Ajouter le fichier a la base de donnee après le téléchargement.
                    // Selon l'extension du fichier, détermine le type de fichier
                    // et ajoute-le à la base de données avec son nouveau nom et sa taille.
                    if($extension=="jpeg" || $extension=="jpg"){
                        ajouter($nvNom,"image",$fichier['size']);
                    } else if($extension=="mp3" || $extension=="mp4"){
                        ajouter($nvNom,"vidéo",$fichier['size']);
                    } else{
                        ajouter($nvNom,"document",$fichier['size']);
                    }
                    // window.history.back() : permet de revenir a la page precedente dans l'historique du navigateur
                    echo "<script>window.history.back()</script>";
                } else{
                    echo "<script>alert('Echec de téléchargement')</script>";
                    echo "<script>window.history.back()</script>";
                }
            } else{
                echo "<script>alert('La taille est dépassée $taille')</script>";
                echo "<script>window.history.back()</script>";
            }
        } else{
            echo "<script>alert('L'extention n'est pas valide')</script>";
            echo "<script>window.history.back()</script>";
        }
    } else{
        echo "<script>alert('Le transfert du fichier a échoué')</script>";
        echo "<script>window.history.back()</script>";
    }
} else if(isset($_POST['afficher'])){
    header("location:affichage.php");
    exit();
} else if(isset($_POST['redimensionner'])){
    header("location:../Manipulation_images_GD/choix.php");
    exit();
} else{
    header("location:../Gestion_bases_donnees/afficher.php");
    exit();
}
?>