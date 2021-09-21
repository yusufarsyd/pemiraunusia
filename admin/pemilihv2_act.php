<?php 
include '../koneksi.php';
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$semester = $_POST['semester'];
$nim = $_POST['nim'];
$password = md5($_POST['password']);

mysqli_query($koneksi, "insert into pemilihv2 values (NULL,'$nama','$prodi','$semester','$nim','$password')");
header("location:pemilihv2.php");