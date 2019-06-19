<?php

//
// PRE-REQUIS
//
// Filtres pour conversion vers Postscript
//
// - html2ps, ghostscript (pdf2ps)
//

// TODO
//
// - si pas de fichier fourni, retourner a la page input_data.php
// - max document size php (nginx/apache)
// - colonne NOIR / colonne COULEUR
//
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
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
    <link rel="stylesheet" type="text/css" href="accueil.css">
</head>

<?php

$target_dir = sys_get_temp_dir()."/";
$tmp_target_file = $_FILES["fileToUpload"]["tmp_name"];
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
rename($tmp_target_file, $target_file);

$uploadOk = 1;

// Vérifier si le fichier est un fichier valide 
if(isset($_POST["submit"])) {
    
    $finfo = finfo_open(FILEINFO_MIME_TYPE); // Retourne le type mime à l'extension mimetype
    $mime_type= rtrim(finfo_file($finfo, $target_file)) . "\n";
    finfo_close($finfo);
    
// PDF2PS

if ($mime_type == 'application/pdf' ) { 
	$format = pdf;
}

// TXT2PS

if ( (0 == strncmp($mime_type,"text/plain", 10) ) || ( 0 == strncmp($mime_type,"application/text", 16) ) ) { 
	$format = text;
}

// HTML2PS 

if ( ( 0 == strncmp($mime_type,"text/html", 9) ) ) { $format = html; }

// sans filtre :)

if ($mime_type == 'application/postscript' ) { $format = postscript; }
    
if($format == "") {
        echo "Seuls les fichiers PDF, PS, TXT ou HTML sont acceptes (format detecte: $mime_type)<br>";
        exit();
}

switch ($format) {
  case 'text':
    $filter = "txt2ps";
  case 'html':
    $filter = "html2ps";
  case 'pdf':
    $filter = "pdf2ps";
  case 'postscript':
}


// Ok nous pouvons maintenant convertir le fichier puis imprimer $target_file

echo "$format<br>";

}

?>
