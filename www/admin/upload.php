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
// - dresser la liste des imprimantes dans input_data.php (lpstat -a) pour transmettre a upload.php ($printer) 
// - si pas de fichier fourni, retourner a la page input_data.php
// - option SECURITE: re-checker dans upload.php que l'imprimante fournie dans $printer existe bien et ne contient pas des meta caracteres
// - option SECURITE: checker le REFERER pour upload.php, qui doit etre input_data.php et seulement cette page
// - max document size php (nginx/apache) = 100Mo: upload_max_filesize=100M
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
  <link rel="stylesheet" type="text/css" href="upload.css">
</head>

<?php

$target_dir = sys_get_temp_dir()."/";
$tmp_target_file = $_FILES["fileToUpload"]["tmp_name"];
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
rename($tmp_target_file, $target_file);

//
// Vérifier si le fichier est un fichier valide 
// (mime_type correspondant a PDF, html, txt)
//

if(isset($_POST["submit"])) {
  
  $finfo = finfo_open(FILEINFO_MIME_TYPE); // Retourne le type mime à l'extension mimetype
  $mime_type= rtrim(finfo_file($finfo, $target_file)) . "\n";
  finfo_close($finfo);
  
// PDF2PS

if ( (0 == strncmp($mime_type,"application/pdf", 15)) )
{ $format = pdf; }

// TXT2PS

if ( (0 == strncmp($mime_type,"text/plain", 10) ) ||
     (0 == strncmp($mime_type,"application/text", 16) ) 
   ) 
{ $format = text; }

// HTML2PS 

if ( ( 0 == strncmp($mime_type,"text/html", 9) ) 
   ) 
{ $format = html; }

//
// sans filtre puisqu'on nous donne du postscript
//

if ($mime_type == 'application/postscript' )
{ $format = postscript; }
  
if ($format == "") {
      echo "Seuls les fichiers PDF, PS, TXT ou HTML sont acceptes (format detecte: $mime_type)<br>";
      exit();
}

echo "FICHIER A IMPRIMER: $target_file <br>";
echo "FORMAT DETECTE: $format, <br>";

// Ok nous pouvons maintenant convertir le fichier puis imprimer $target_file
$fn = tempnam(sys_get_temp_dir(), 'print-kiosk').'.ps';

switch ($format) {

	case 'text':
	  	shell_exec ("a2ps < $target_file > $fn");

	case 'html':
	  	shell_exec ("html2ps < $target_file > $fn");

	case 'pdf':
  		shell_exec ("pdf2ps $target_file $fn");

	case 'postscript':
  		shell_exec ("cp $target_file $fn");
}

echo "FICHIER POSTSCRIPT AVANT IMPRESSION: $fn <br>";
  
echo ('<pre> <br>'.shell_exec ("/usr/bin/file $fn").'</pre><br>');

echo "LANCEMENT DE L'IMPRESSION EN COURS <br>";
echo ('<pre> <br>'.shell_exec ("/usr/bin/lpr $fn ").'</pre><br>');

echo "MERCI DE VERIFIER LA TABLE PAGE_LOG";
//echo ('<pre> <br>'.shell_exec ("/usr/bin/lpq $fn").'</pre><br>');
//echo ('<pre> DEBUG<br>'.shell_exec ("/usr/bin/lpstat -W completed $fn").'</pre><br>');



}

?>
