<?php 
// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$nim = $_POST['nim'];
$password = md5($_POST['password']);

$login = mysqli_query($koneksi, "SELECT * FROM pemilih WHERE pemilih_nim='$nim' AND pemilih_password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){
	session_start();
	$data = mysqli_fetch_assoc($login);
	$_SESSION['id'] = $data['pemilih_id'];
	$_SESSION['nama'] = $data['pemilih_nama'];
	$_SESSION['nim'] = $data['pemilih_nim'];
	$_SESSION['level'] = "pemilih";
	header("location:voting.php?alert=login");
}else{
	header("location:login.php?alert=gagal");
}