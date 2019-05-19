<?php

$host="localhost";
$user="ida";
$password="bengkulu";
$db_name="ida";

//connexion a la base de donnees
$base = mysqli_connect("$host","$user","$password","$db_name");

if (!$base) { 
	printf('Erreur %d : %s.<br/>',mysqli_connect_errno(), mysqli_connect_error());
	exit();
} 

?>
