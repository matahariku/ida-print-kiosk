<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$check = false;

// Vérifier si le fichier est un fichier valide 
if(isset($_POST["submit"])) {
    
    $finfo = finfo_open(FILEINFO_MIME_TYPE); // Retourne le type mime à l'extension mimetype
    $mime_type= finfo_file($finfo, $target_file) . "\n";
    finfo_close($finfo);
    
if ($mime_type == "application/pdf" ) { $check == true }
if ($mime_type == "application/postscript" ) { $check == true }
    
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "Seuls les fichiers PDF ou PS sont acceptes";
        $uploadOk = 0;
    }
}
?>
