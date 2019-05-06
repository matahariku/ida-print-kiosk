<?php

$host="localhost";
$user="efarida";
$password="Formation2019";
$db_name="intranet-dev";

//connexion a la base de donnees
$base = mysqli_connect("$host","$user","$password","$db_name");

if (!$base) { 
	printf('Erreur %d : %s.<br/>',mysqli_connect_errno(), mysqli_connect_error());
	exit();
} 

?>