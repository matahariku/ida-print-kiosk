

<?php
include 'bd_connect1.php';
// menyimpan data kedalam variabel
$Photocopier_C_N            = $_POST['C_N'];
$Quantite_ancien            = $_POST['Qunatite_ancien'];
$Quantite_copier            = $_POST['Qunatite_copier'];
$Quantite_actuel            = $_POST['Quantite_actuel'];
$Date         				= $_POST['date'];
// query SQL untuk insert data
$query="INSERT INTO Imprimant SET Photocopier_C_N='$C_N',Quantite_ancien='$Quantite_ancien',Quantite_copier='$Qunatite_copier',Quantite_actuel='$Quantite_actuel',Date='$date'";
mysqli_query($bd_connect1, $query);
// mengalihkan ke halaman index.php
header("location:index.php");
?>