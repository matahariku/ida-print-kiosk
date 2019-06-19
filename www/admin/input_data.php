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
    <link rel="stylesheet" type="text/css" href="input_data.css">


<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
      header("location: index.php");
          exit;
}

include ('inc/db_connect1.php');

if(isset($_SESSION['username'])){
            $username = $_SESSION['username'];
        }

if(isset($_SESSION['C_N'])){
            $C_N = $_SESSION['C_N'];
        }
?>

<!DOCTYPE html>
<html>
<head>
 <title>BLSI - Photocopier</title>
</head>
<body>
    <br>
    <br>
    <br>
 <h1><strong>PHOTOCOPIER</strong></h1>

<form action="upload.php" method="post" enctype="multipart/form-data">
    <strong>Choisissez le fichier a imprimer:</strong>
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Imprimer PDF,PS,TXT" name="submit">
</form>



<?php
                $equary1="SELECT Quantite_actuel from historique, user where historique.id_user = user.id_user and user.nom_prenom = '".$username."' order by date desc LIMIT 1;";
                                                                //print ("DEBUG $equary1");
                $data = mysqli_query($base, $equary1);
                $d = mysqli_fetch_array($data);
?>


<form action="input_data.php" method="post">
  <table cellpadding="3" cellspacing="0">
   <tr>
    <br>
    <br>

                <tr><td bgcolor="#FF4500">QUANTITES PHOTOCOPIE ACTUEL</td><td><h3><p><?php echo $d['Quantite_actuel']; ?> </p></h3></td></tr>

   <tr>
    <td bgcolor="#FFA500">QUANTITE COPIER</td>
    <td>:</td>
    <td><input type="number" name="Quantite_copier" required></td>
   </tr>

   <tr>
    <td bgcolor="#008000">QUEL TYPE DE VOTRE CHOIX ?</td>
    <td>:</td>
    <td>
      <select name="C_N" required>
     <!-- <option value="C ou N">couleur ou noir et blanc? </option>-->
      <option value="C">Couleur</option>
      <option value="N">Noir_Blanc</option>
     </select>
    </td>

      <p align="left">
        <a href="login.php" class="btn btn-danger">Accueil</a>
    </p>
</table>
</form>
    </body>
</html>

