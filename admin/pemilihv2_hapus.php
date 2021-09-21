<?php 
include '../koneksi.php';
$id= $_GET['id'];

mysqli_query($koneksi, "delete from pemilihv2 where pemilihv2_id='$id'");

mysqli_query($koneksi, "delete from votingv2 where votingv2_pemilih='$id'");

header("location:pemilihv2.php");
