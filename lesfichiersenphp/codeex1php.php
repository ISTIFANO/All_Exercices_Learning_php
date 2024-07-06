<!-- <?php 
// $chemindefichier='C:\wamp64\www\php project\lesfichiersenphp';
//$path = pathinfo($_FILES['fich']['name'],PATHINFO_EXTENTION);
// $sezee= ini_get('upload_max_filesize');
// $type =['image/jpeg','image/png','image/jpg','application/pdf'];
// if($_FILES["fich"]["error"]=='UPLOADE_ERR_OK'){
//     if($_FILES["fich"]["size"]<$sezee){
//      }else{ echo "error uploadingfile!!";}
//         if(in_array($_FILES["fich"]["type"], $type)){

//             echo "Uploading successfully";
//         }else
        
//         {echo "error uploadingfile!!";}

//     }
   
//     $nNom = uniqid('uploaded_',true).'.'.$_FILES["fich"]["name"];
//     $chemin1=$chemindefichier.$nNom;

//     if (move_uploaded_file($_FILES["fich"]["tmp_name"], $chemin1)) {
//         echo "Uploading successfully!!!!!!!!!!!!!";
//     }else{
//         echo "error uploadingfile!!!!!!!!!!!";
//     }

// header("Location:$chemin")

$chemindefichier = 'C:\wamp64\www\php project\lesfichiersenphp';
// Double backslashes pour échapper le caractère \

$path = pathinfo($_FILES['fich']['name'], PATHINFO_EXTENSION);
$sezee = ini_get('upload_max_filesize');
// size server 
$type = ['image/jpeg', 'image/png', 'image/jpg', 'application/pdf'];
if ($_FILES["fich"]["error"] == UPLOAD_ERR_OK) {
    if ($_FILES["fich"]["size"] < $sezee) {
        if (in_array($_FILES["fich"]["type"], $type)) {
            // Tout est correct, le fichier peut être téléchargé 
            echo "Téléchargement réussi";
             $nNom = uniqid('uploaded_', true) . '.' . $_FILES["fich"]["name"];
            $chemin1 = $chemindefichier . $nNom;
            // Uploaded_amir.jpej 
            if (move_uploaded_file($_FILES["fich"]["tmp_name"], $chemin1)) {
            echo "Téléchargement réussi !";
            } else {
                echo "Erreur lors du déplacement du fichier !";
            }
        } else {
            echo "Erreur lors du téléchargement : Type de fichier non autorisé";
        }
    } else {
        echo "Erreur lors du téléchargement : Taille du fichier trop grande";
    }
} else {
   
    echo "Erreur lors du téléchargement du fichier!";

}

?>




