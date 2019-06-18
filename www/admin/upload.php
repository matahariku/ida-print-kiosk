<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
    <link rel="stylesheet" type="text/css" href="accueil.css">
</head>

<?php

//$target_dir = "uploads/";
$target_dir = sys_get_temp_dir()."/";
echo "target_dir=$target_dir<br>";
$tmp_target_file = $_FILES["fileToUpload"]["tmp_name"];
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
echo "rename $tmp_target_file, $target_file";
rename($tmp_target_file, $target_file);

$uploadOk = 1;
$check = false;

// Vérifier si le fichier est un fichier valide 
if(isset($_POST["submit"])) {
    
    $finfo = finfo_open(FILEINFO_MIME_TYPE); // Retourne le type mime à l'extension mimetype
    $mime_type= finfo_file($finfo, $target_file) . "\n";
    finfo_close($finfo);
    
// PDF2PS
if ($mime_type == "application/pdf" ) { 
	$check = true; 
}

// TXT2PS
if ($mime_type == "application/text" || $mime_type == "text/plain" || $mime_type == "text/html" ) { 
	$check = true; 
}

if ($mime_type == "application/postscript" ) { 
	$check = true; 
}
    
if($check == false) {
        echo "target_file: $target_file";
        echo "Seuls les fichiers PDF, PS, TXT ou HTML sont acceptes (mime detecte: $mime_type)";
        $uploadOk = 0;
}

}

?>
