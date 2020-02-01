<!DOCTYPE html>
<html>
    <head>
        <title>La transaction photocopier aujhordhui</title>
    </head>
    <body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

        <form method="post" action="keep.php">
            <table>
        <?php 
                include ('inc/db_connect1.php');
                $equary1="SELECT Quantite_actuel from historique, user where historique.id_user = user.id_user and user.nom_prenom = '".$chercher."' order by date desc LIMIT 1";
		$data = mysqli_query($base, $equary1);
		$d = mysqli_fetch_array($data);
        ?>
		<td><?php echo $d['Quantite_ancien']; ?></td>
		<tr><td>QUANTITES PHOTOCOPIE ACTUEL</td><td><input type="number" onkeyup="isi_otomatis()" value="<?php print ("test"); ?>"></td></tr>
                <tr><td>QUANTITES COPIER</td><td><input type="number" copier="Quantite_copier"></td></tr>
                <tr><td>QUEL VOTRE CHOIX</td><td>
                        <input type="radio" name="C_N" value="C">Couleur </input>
                        <input type="radio" name="C_N" value="N">Noir et Blanc </input>
                    </td></tr>
	<?php 
		$chercher = $_GET['chercher']; 
		$equary="SELECT ($data - Quantite_copier) AS Quantite_maintenant from historique, user where historique.id_user = user.id_user and user.nom_prenom = '%".$chercher."%';";
	?>
                <tr><td>QUANTITES PHOTOCOPIE ACTUEL MAINTENANT EST </td><td><input type="number" Copie_actuel="Quantite_maintenant"></td></tr> 
                <tr><td>DATE</td><td><input type="text" Date="date"></td></tr>
                <tr><td colspan="2"><button type="submit" value="garde">GARDE</button></td></tr>
            </table>


    <p align="left">
        <a href="login.php" class="btn btn-danger">Accueil</a>
    </p>
        </form>
    </body>
</html>

