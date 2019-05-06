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
<form name="Utilisateur" method="post" action="utilisateur.php">
<td width="294"><Center><input type="submit" name="Submit" value="Rechercher un Utilisateur"></Center></td>
</tr>
</form>
<tr>
<form name="Lieu" method="post" action="Lieu.php">
<td width="294"><Center><input type="submit" name="Submit" value="Rechercher un Lieu"></Center></td>
</tr>
</form>
<tr>
<form name="Ordinateur" method="post" action="Ordinateur.php">
<td width="294"><Center><input type="submit" name="Submit" value="Rechercher un Ordinateur"></Center></td>
</tr>
</form>
<tr>
<form name="Ecran" method="post" action="Ecran.php">
<td width="294"><Center><input type="submit" name="Submit" value="Rechercher un Ecran"></Center></td>
</tr>
</form>
<tr>
<form name="Service" method="post" action="Service.php">
<td width="294"><Center><input type="submit" name="Submit" value="Rechercher un Service Poste"></Center></td>
</tr>
</form>
<tr>
<form name="Imprimante" method="post" action="Imprimante.php">
<td width="294"><Center><input type="submit" name="Submit" value="Rechercher un Imprimante"></Center></td>
</tr>
</form>
<tr>
<form name="Service_Imprimante" method="post" action="Service_Imprimante.php">
<td width="294"><Center><input type="submit" name="Submit" value="Rechercher un Service Imprimante"></Center></td>
</tr>
</form>
<tr>
<form name="NAS" method="post" action="NAS.php">
<td width="294"><Center><input type="submit" name="Submit" value="Rechercher un NAS"></Center></td>
</tr>
</form>
<tr>
<form name="Onduleur" method="post" action="Onduleur.php">
<td width="294"><Center><input type="submit" name="Submit" value="Rechercher un Onduleur"></Center></td>
</tr>
</form>
<tr>
<form name="Projecteur" method="post" action="Projecteur.php">
<td width="294"><Center><input type="submit" name="Submit" value="Rechercher un Projecteur"></Center></td>
</tr>
</form>
<tr>
<form name="Serveur" method="post" action="serveur.php">
<td width="294"><Center><input type="submit" name="Submit" value="Rechercher un Serveur"></Center></td>
</tr>
</form>
<tr>
<form name="Switch" method="post" action="Switch.php">
<td width="294"><Center><input type="submit" name="Submit" value="Rechercher un Switch"></Center></td>
</tr>
</form>
<tr>
<form name="Telephone" method="post" action="Telephone.php">
<td width="294"><Center><input type="submit" name="Submit" value="Rechercher un Telephone"></Center></td>
</tr>
</form>
<tr>
<form name="Firewall" method="post" action="Firewall.php">
<td width="294"><Center><input type="submit" name="Submit" value="Rechercher un Firewall"></Center></td>
</tr>
</form>
<tr>
<form name="Wifi" method="post" action="Wifi.php">
<td width="294"><Center><input type="submit" name="Submit" value="Rechercher un Wifi"></Center></td>
</tr>
</form>
</table>
</td>
</form>
</tr>
</table>

<HR width="10">

<HR width="10">

<center><address>Fait le 12 Mars 2019<br>
  au CESI de Bordeaux</address></center>

    <p align="center">
        <a href="logout.php" class="btn btn-danger">Se deconnecter</a>
    </p>

</body>
</html>
