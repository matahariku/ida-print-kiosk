<?php
// Initialiser la session
session_start();

// Verifier si l'utilisateur est identifie, sinon rediriger vers login.php
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historique</title>
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
    <link rel="stylesheet" type="text/css" href="user.css">
</head>

<body>
<!-- Contenu principal -->
<br>
<br>
<br>
<br>

<h1><strong>Votre Historique</strong></h1>
<br>
 
<?php 

if(isset($_GET['chercher'])){
	$chercher = $_GET['chercher'];
	echo "<b><h4>Chercher Nom  prenom : ".$chercher."</h4></b>";
}
?>
 

<table border="1">
	<tr>
		<th bgcolor="#000000">row_id</th>
		<th bgcolor="#000000">nom_prenom</th>
		<th bgcolor="#000000">date</th>
		<th bgcolor="#000000">C_N</th>
		<th bgcolor="#000000">Quantite_copier</th>
		<th bgcolor="#000000">Quantite_actuel</th>					
	<th>
	
	<?php
	Include 'inc/db_connect1.php';

if(isset($_SESSION['username'])){
                $username = $_SESSION['username'];
              //$query = "select * from user where nom_prenom like '%".$chercher."%';";
               

		$query = "SELECT row_id, nom_prenom, date, C_N, Quantite_copier, Quantite_actuel FROM user, historique WHERE nom_prenom = '".$username."' AND user.id_user = historique.id_user;";
	
				  
                if ($data = mysqli_query($base, $query)) {
                        print ("       ");;
                } else {
                        print("DATA_IS_NULL");
                }
        }else{
		//printf("DEBUG_ISSUE_XX");
                $data = mysqli_query($base, "select * from user");
        }
	
	

	$row_id = 1;
	while($d = mysqli_fetch_array($data)){
	?>
	<tr>
		<td bgcolor="#A52A2A"><?php echo $row_id++; ?></td>
		<td bgcolor="#0000FF3"><?php echo $d['nom_prenom']; ?></td>
		<td bgcolor="#8B0000"><?php echo $d['date']; ?></td>
		<td bgcolor="#66CDAA"><?php echo $d['C_N']; ?></td>
		<td bgcolor="#B22222"><?php echo $d['Quantite_copier']; ?></td>
		<td bgcolor="#4B0082"><?php echo $d['Quantite_actuel']; ?></td>
		
	</tr>
	<?php } ?>
</table>
	<br>
	<br>
    <p align="left">
        <strong><a href="login.php" class="btn btn-danger">Accueil</a></strong>
    </p>


</body>
</html>
