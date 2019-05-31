<?php
//mulai proses tambah data

//cek dahulu, jika tombol tambah di klik
if(isset($_POST['garde'])){
 
 //inlcude atau memasukkan file koneksi ke database
 Include 'inc/db_connect1.php';
 
 //jika tombol tambah benar di klik maka lanjut prosesnya
 $Nom_Prenom 	   = $_POST['nom_prenom'];
 $Quantite_actuel  = $_POST['quantite_actuel']; //membuat variabel $nis dan datanya dari inputan NIS
 $Quantite_copier  = $_POST['quantite_copier']; //membuat variabel $nama dan datanya dari inputan Nama Lengkap
 $C_N = $_POST['C_N']; //membuat variabel $jurusan dan datanya dari inputan dropdown Jurusan
 
 //melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
 $input = mysql_query("INSERT INTO historique VALUES(NULL,date_add(),'$nom_prenom',$C_N', '$quantite_copier', '$quantite_actuel')") or die(mysql_error());
 
 //jika query input sukses
 if($input){
  
  echo 'Data berhasil di tambahkan! ';  //Pesan jika proses tambah sukses
  echo '<a href="input_data.php">Kembali</a>'; //membuat Link untuk kembali ke halaman tambah
  
 }else{
  
  echo 'Gagal menambahkan data! ';  //Pesan jika proses tambah gagal
  echo '<a href="input_data.php">Kembali</a>'; //membuat Link untuk kembali ke halaman tambah
  
 }

}else{ //jika tidak terdeteksi tombol tambah di klik

 //redirect atau dikembalikan ke halaman tambah
 echo '<script>window.history.back()</script>';

}
?>