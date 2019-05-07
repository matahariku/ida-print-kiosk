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
  <title>Cours GLOBALDATA</title>
</head>

<body>
<!-- Contenu principal -->
<center><h1>BIENVENU</h1></center>


<center><p>Vous étes identifié en tant que : <p></center>
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
<td colspan="3"><strong>  Panneaux de Recherche : </strong></td>
</tr>
<tr>
<form name="Historique" method="post" action="utilisateur.php">
<td width="294"><Center><input type="submit" name="Submit" value="Historique"></Center></td>
</tr>
</form>
<tr>
<form name="Solde" method="post" action="Lieu.php">
<td width="294"><Center><input type="submit" name="Submit" value="Solde"></Center></td>
</tr>
</form>
</table>
</td>
</form>
</tr>
</table>

<HR width="10">

<HR width="10">

<center><address>Fait le 06 Mai 2019<br>
  au CESI de Bordeaux</address></center>

    <p align="center">
        <a href="logout.php" class="btn btn-danger">Se deconnecter</a>
    </p>

</body>
</html>
