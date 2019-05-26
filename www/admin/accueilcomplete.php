<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html>
<head>
  <title>BLSI</title>
</head>

<body>
<!-- Contenu principal -->
<center><h1>BIENVENU</h1></center>


<center><p>Vous étes identifié en tant que : 
<?php 
  print_r ($_SESSION['username']); 
?>
<p></center>
<tr>
<form name="form1-1" method="post" action="deconnect.php">
<td width="294"><Center><input type="submit" name="Submit" value="Se deconnecter"></Center></td>
</tr>
</form>

<HR width="10">

<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td colspan="3"><Center>  Panneaux de Recherche : </Center></td>
</tr>
<tr>
<form name="Photocopier" method="post" action="input_data.php">
<td width="294"><Center><input type="submit" name="Submit" value="Photocopier"></Center></td>
</tr>
</form>
<tr>
<form name="Historique" method="post" action="user.php">
<td width="294"><Center><input type="submit" name="Submit" value="Historique"></Center></td>
</tr>
</form>
<tr>
<form name="Quantite Feuilles Actuel" method="post" action="solde.php">
<td width="294"><Center><input type="submit" name="Submit" value="Quantites Feuilles Actuel"></Center></td>
</tr>
</form>
</table>
</td>
</form>
</tr>
</table>

<HR width="10">

<HR width="10">

<center><address>SERVICE IMPRIMANT<br>
  BLSI de PAILLET</address></center>

    <p align="center">
        <a href="login.php" class="btn btn-danger">Accueil</a>
    </p>

</body>
</html>
