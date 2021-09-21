<?php 
include '../koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$prodi  = $_POST['prodi'];
$semester  = $_POST['semester'];
$nim = $_POST['nim'];
$password = md5($_POST['password']);

if($_POST['password'] == ""){
	mysqli_query($koneksi, "update pemilihv2 set pemilihv2_nama='$nama', pemilihv2_prodi='$prodi', pemilihv2_semester='$semester', pemilihv2_nim='$nim' where pemilihv2_id='$id'");
	header("location:pemilihv2.php");
}else{
	mysqli_query($koneksi, "update pemilihv2 set pemilihv2_nama='$nama', pemilihv2_prodi='$prodi', pemilihv2_semester='$semester', pemilihv2_nim='$nim' where pemilihv2_id='$id'");
	header("location:pemilihv2.php");
}