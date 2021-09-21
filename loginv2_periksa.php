<?php 
// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$nim  = $_POST ['nim'];
$password  = md5($_POST ['password']);

$login  = mysqli_query($koneksi, "SELECT * FROM pemilihv2 WHERE pemilihv2_nim='$nim ' AND pemilihv2_password='$password '");
$cek  = mysqli_num_rows($login );

if($cek > 0){
	session_start();
	$data  = mysqli_fetch_assoc($login );
	$_SESSION ['id'] = $data ['pemilihv2_id'];
	$_SESSION ['nama'] = $data ['pemilihv2_nama'];
	$_SESSION ['nim'] = $data ['pemilihv2_nim'];
	$_SESSION ['level'] = "pemilihv2";
	header("location:votingv2.php?alert=loginv2");
}else{
	header("location:loginv2.php?alert=gagal");
}