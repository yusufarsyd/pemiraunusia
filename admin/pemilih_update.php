<?php 
include '../koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$semester = $_POST['semester'];
$nim = $_POST['nim'];
$password = md5($_POST['password']);

if($_POST['password'] == ""){
	mysqli_query($koneksi, "update pemilih set pemilih_nama='$nama', pemilih_prodi='$prodi', pemilih_semester='$semester', pemilih_nim='$nim' where pemilih_id='$id'");
	header("location:pemilih.php");
}else{
	mysqli_query($koneksi, "update pemilih set pemilih_nama='$nama', pemilih_prodi='$prodi', pemilih_semester='$semester', pemilih_nim='$nim' where pemilih_id='$id'");
	header("location:pemilih.php");
}