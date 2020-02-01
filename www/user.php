<?php
// Initialize the session
session_start();


// Check if the user is logged in, if not then redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: http://ida.kalou.net/blsi/admin/index.php");
    exit;
}
?>
 
<h1>Votre historique </h1>
<link rel="stylesheet" type="text/css" href="user.css">
 
<?php 

if(isset($_GET['chercher'])){
	$chercher = $_GET['chercher'];
	echo "<b><h4>On Trouve un Nom  prenom : ".$chercher."</h4></b>";
}
?>
 

<table border="1">
	<tr>
		<th>row_id</th>
		<th>nom_prenom</th>
		<th>date</th>
		<th>C_N</th>
		<th>Quantite_copier</th>
		<th>Quantite_actuel</th>					
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
		<td><?php echo $row_id++; ?></td>
		<td><?php echo $d['nom_prenom']; ?></td>
		<td><?php echo $d['date']; ?></td>
		<td><?php echo $d['C_N']; ?></td>
		<td><?php echo $d['Quantite_copier']; ?></td>
		<td><?php echo $d['Quantite_actuel']; ?></td>
		
	</tr>
	<?php } ?>
</table>

    <p align="left">
        <strong><a href="login.php" class="btn btn-danger">Accueil</a></strong>
    </p>


