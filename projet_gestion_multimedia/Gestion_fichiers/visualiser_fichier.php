<?php
if (isset($_GET['fichier'])) {
    // Path to the folder containing the files
    $chemin = "C:\wamp64\www\php project\projet_gestion_multimedia\Gestion_fichiers\Telechargements\\";
    $file = $_GET['fichier'];
    $fichier = $chemin . $file;
    // Check if the file exists
    if (file_exists($fichier) && is_file($fichier)) {
        $extensions = array('jpg', 'jpeg', 'pdf'); // Allowed file extensions
        $extension = pathinfo($fichier, PATHINFO_EXTENSION);
        if (in_array($extension, $extensions)) {
            // Get the MIME type of the file
            $type = mime_content_type($fichier);
            // Set appropriate headers for the content type
            header("Content-Type: $type");
            header("Content-Disposition: inline; filename=$file");
            // Read the file content and send it as response
            readfile($fichier);
            exit; // Terminate script after sending file
        } else {
            echo "<script>alert('File type not allowed');</script>";
            echo "<script>window.history.back();</script>";
            exit; // Terminate script after displaying message
        }
    } else {
        echo "<script>alert('File does not exist or is not accessible.');</script>";
        echo "<script>window.history.back();</script>";
        exit; // Terminate script after displaying message
    }
} else {
    echo "<script>alert('No file specified');</script>";
    echo "<script>window.history.back();</script>";
    exit; // Terminate script after displaying message
}
?>
