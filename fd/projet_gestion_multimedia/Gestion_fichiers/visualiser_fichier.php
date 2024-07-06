 <?php
    if (isset($_GET['fichier'])) {
        // Chemin vers le dossier contenant les fichiers
        $chemin = "C:\wamp64\www\mesSitesweb\projet_gestion_multimedia\Gestion_fichiers\Telechargements\\";
        $file = $_GET['fichier'];
        $fichier = $chemin . $file;
        // Vérifier si le fichier existe
        if (file_exists($fichier) && is_file($fichier)) {
            $extensions = array('jpg', 'jpeg', 'pdf'); // Extensions de fichiers autorisées
            $extension = pathinfo($fichier, PATHINFO_EXTENSION);
            if (in_array($extension, $extensions)) {
                //mime_content_type() : retourne le type de contenu MIME correspondant à un fichier donné
                $type = mime_content_type($fichier);
                // Définir les en-têtes appropriés pour le type de contenu
                header("Content-Type: $type");
                header("Content-Disposition: inline; filename=$file");
                // Lire le contenu du fichier et l'envoyer en réponse
                readfile($fichier);
            } else {
                echo "<script>alert('Type de fichier non autorisé');</script>";
                echo "<script>window.history.back();</script>";
            }
        } else {
            echo "<script>alert('Le fichier n\\'existe pas ou n'est pas accessible.');</script>";
            echo "<script>window.history.back();</script>";
        }
    } else {
        echo "<script>alert('Aucun fichier spécifié');</script>";
        echo "<script>window.history.back();</script>";
    }
    ?>
