<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<h3>chercher un Utilisateur</h3>
 
<form action="utilisateur.php" method="get">
	<label>Trouvez-Le :</label>
	<input type="text" name="chercher">
	<input type="submit" value="chercher">
</form>
 
<?php 

if(isset($_GET['chercher'])){
	$chercher = $_GET['chercher'];
	echo "<b>On Trouve un prenom : ".$chercher."</b>";
}
?>
 

<table border="1">
	<tr>
		<th>ID_User</th>
		<th>nom</th>
		<th>prenom</th>
		<th>sexe</th>
		<th>telp</th>
		<th>telp_portable</th>
		<th>email</th>
		<th>ID_Poste</th>
		<th>ID_PC</th>
		<th>ID_Local</th>
	</tr>
	
	<?php
	Include 'inc/db_connect1.php';

	if(isset($_GET['chercher'])){
		$chercher = $_GET['chercher'];
		$query = "select * from TAB_USERS where prenom like '%".$chercher."%';";
	
		if ($data = mysqli_query($base, $query)) {
			print ("       Felicitation ! Vous avez bien reussit");;
		} else {
			print("DATA_IS_NULL"); 
		}
	}else{
		$data = mysqli_query($base, "select * from TAB_USERS");		
	}

	$ID_User = 1;
	while($d = mysqli_fetch_array($data)){
	?>
	<tr>
		<td><?php echo $ID_User++; ?></td>
		<td><?php echo $d['nom']; ?></td>
		<td><?php echo $d['prenom']; ?></td>
		<td><?php echo $d['sexe']; ?></td>
		<td><?php echo $d['telp']; ?></td>
		<td><?php echo $d['telp_portable']; ?></td>
		<td><?php echo $d['email']; ?></td>
		<td><?php echo $d['ID_Poste']; ?></td>
		<td><?php echo $d['ID_PC']; ?></td>
		<td><?php echo $d['ID_Local']; ?></td>
	</tr>
	<?php } ?>
</table>

    <p align="center">
        <a href="deconnect.php" class="btn btn-danger">Se deconnecter</a>
    </p>


