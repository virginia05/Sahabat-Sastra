<?php
session_start();
 
$db = mysqli_connect("localhost","root","","web_sastra");
 
// menangkap data yang dikirim dari form
$username =mysqli_real_escape_string($db,$_POST['username']);
$pass =mysqli_real_escape_string($db, $_POST['password']);
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($db,"select * from tb_admin where username='$username' AND password='$pass'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
$sesi = mysqli_query($db,"select * from tb_admin where username='$username' AND password='$pass'");
$sesi = mysqli_fetch_assoc($sesi);
	$_SESSION['id_admin'] = $sesi['id_admin'];
	$_SESSION['status'] = "login";
	header("location:admin.php");
}else{
	header("location:login.php?pesan=gagal");
}
?>
