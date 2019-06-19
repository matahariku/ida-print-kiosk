
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
    <link rel="stylesheet" type="text/css" href="solde.css">


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
  <title>Feuilles actuel</title>
</head>

<body>
<!-- Contenu principal -->
<br>
<br>
<br>
<br>

<h1><strong>Votre Feuilles actuel</strong></h1>
<br>
<?php 

if(isset($_GET['chercher'])){
	$chercher = $_GET['chercher'];
	echo "<b>On Trouve un Nom  prenom : ".$chercher."</b>";
}
?>


<table border="1">


	<tr>
		<th bgcolor="#000000">row_id</th>
		<th bgcolor="#000000">date</th>
		<th bgcolor="#000000">C_N</th>
		<th bgcolor="#000000">Quantite_actuel</th>					
	</tr>
	
	<?php
	Include 'inc/db_connect1.php';
if(isset($_SESSION['username'])){
	  $username = $_SESSION['username'];

		$query = "SELECT row_id, date, C_N, Quantite_actuel FROM user, historique WHERE nom_prenom= '".$username."' AND user.id_user = historique.id_user;";
		//print ("DEBUG: $query");
				
                if ($data = mysqli_query($base, $query)) {
                        print ("      ");;
                } else {
                        print("DATA_IS_NULL");
                }
        }else{
                $data = mysqli_query($base, "select * from user");
        }

	$row_id = 1;
	while($d = mysqli_fetch_array($data)){
	
  
     
	?>
	<tr>

		<td bgcolor="#66CDAA"><?php echo $row_idr++; ?></td>
		<td bgcolor="#228B22"><?php echo $d['date']; ?></td>
		<td bgcolor="#1590FF"><?php echo $d['C_N']; ?></td>
		<td bgcolor="#4B0082"><?php echo $d['Quantite_actuel']; ?></td>
	
	</tr>

	<?php } ?>
</table>
	<br>
	<br>
    <p align="left">
        <a href="login.php" class="btn btn-danger">Accueil</a>
    </p>


</body>
</html>

