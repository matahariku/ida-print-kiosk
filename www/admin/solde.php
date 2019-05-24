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
	echo "<b>On Trouve votre quantie feuille qui reste : ".$chercher."</b>";
}
?>
 

<table border="1">
	<tr>
		<th>row_id</th>
		<th>date</th>
		<th>C_N</th>
		<th>Quantite_actuel</th>					
	<th>
	
	<?php
	Include 'inc/db_connect1.php';
if(isset($_GET['chercher'])){
	  $chercher = $_GET['chercher'];
              
               

		$query = "SELECT row_id, date, C_N, Quantite_actuel FROM user, historique WHERE nom_prenom= '".$chercher."' AND user.id_user = historique.id_user;";
				  
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
		<td><?php echo $row_idr++; ?></td>
		<td><?php echo $d['date']; ?></td>
		<td><?php echo $d['C_N']; ?></td>
		<td><?php echo $d['Quantite_actuel']; ?></td>
	</tr>
	<?php } ?>
</table>

    <p align="left">
        <a href="login.php" class="btn btn-danger">Accueil</a>
    </p>



	
