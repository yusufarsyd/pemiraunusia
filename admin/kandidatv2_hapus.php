<?php 
include '../koneksi.php';
$id = $_GET['id'];
$data  = mysqli_query($koneksi, "select * from kandidatv2 where kandidatv2_id='$id'");
$d = mysqli_fetch_assoc($data);
$foto = $d['kandidatv2_foto'];
unlink("../gambar/kandidatv2/$foto");
mysqli_query($koneksi, "delete from kandidatv2 where kandidatv2_id='$id'");

mysqli_query($koneksi, "delete from votingv2 where voting_kandidatv2='$id'");

header("location:kandidatv2.php");
