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


<center><p>Vous étes identifié en tant que : </p></center>
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
<td colspan="3"><Center><h3> Panneaux de Recherche : </h3></Center></td>
</tr>
<tr>
<form name="Photocopier" method="post" action="form_input.php">
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
