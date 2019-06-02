<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
      header("location: http://ida.kalou.net/blsi/admin/index.php");
          exit;
}

include ('inc/db_connect1.php');

if(isset($_SESSION['username'])){
            $username = $_SESSION['username'];
}
?>

<!DOCTYPE html>
<html>
<head>
 <title>BLSI - Photocopier</title>
</head>
<body>
 <h1>PHOTOCOPIER</h1>
 
<form action="upload-check.php" method="post" enctype="multipart/form-data">
    Choississez le fichier a imprimer:
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
                <tr><td>QUANTITES PHOTOCOPIE ACTUEL</td><td><?php echo $d['Quantite_actuel']; ?> </td></tr>
   </tr>
   <tr>
    <td>QUANTITE COPIER</td>
    <td>:</td>
    <td><input type="number" name="Quantite_copier" required></td>
   </tr>
   <tr>
   </tr>
   <tr>
    <td>Quel type de votre choix</td>
    <td>:</td>
    <td>
      <select name="C_N" required>
      <option value="">couleur ou noir et blanc? </option>
      <option value="C">Couleur</option>
      <option value="N">Noir et Blanc</option>
     </select>
    </td>
   </tr>
   <tr>
    <td>&nbsp;</td>
    <td></td>
    <td><input type="submit" name="garde" value="GARDE-LE"></td>
   </tr>
  </table>
     <p align="left">
        <a href="login.php" class="btn btn-danger">Accueil</a>
     </p>

 </form>


<form name="form1-1" method="post" action="deconnect.php">
<table>
<tr>
<td width="294">
 <input type="submit" name="Submit" value="Se deconnecter">
 </td>
</tr>
<table>
</form>


</body>
</html>
