<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<h3>chercher le dernier solde</h3>
 
<form action="solde.php" method="get">
	<label>Trouvez-Le :</label>
	<input type="text" name="chercher">
	<input type="submit" value="chercher">
</form>
 
<?php 

if(isset($_GET['chercher'])){
	$chercher = $_GET['chercher'];
	echo "<b>On Trouve votre le dernier solde est : ".$chercher."</b>";
}
?>
 

<table border="1">
	<tr>
		<th>row_id</th>
		<th>date</th>

		<th>solde</th>					
	<th>
	
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
		<td><?php echo $row_idr++; ?></td>
		<td><?php echo $d['date']; ?></td>
	
		<td><?php echo $d['solde']; ?></td>
	
	</tr>
	<?php } ?>
</table>

    <p align="center">
        <a href="deconnect.php" class="btn btn-danger">Se deconnecter</a>
    </p>


