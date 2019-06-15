<?php
// Initialiser la session
session_start();
 
// Verifier si l'utilisateur est identifie, sinon rediriger vers la page de login
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
<body>
<!-- Contenu principal -->
<br>
<br>
<br>
<br>
<center><h1><strong>BIENVENUE</strong></h1></center>

<br>
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
<br>
<br>
<br>
<td colspan="3"><Center><h3> Panneaux de Recherche : </h3></Center></td>
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

<h3><center><address>SERVICE IMPRIMANTE<br>
  BLSI de PAILLET</address></center></h3>

    <p align="center">
        <a href="login.php" class="btn btn-danger">Accueil</a>
    </p>

</body>
</html>
