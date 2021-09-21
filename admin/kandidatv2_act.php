<?php 
include '../koneksi.php';
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$kode = $_POST['kode'];
$tentang = $_POST['tentang'];

$rand = rand();
$allowed =  array('gif','png','jpg','jpeg');
$filename = $_FILES['foto']['name'];

if($filename== ""){
	mysqli_query($koneksi, "insert into kandidatv2 values (NULL,'$kode','$nama','$prodi','$tentang','')");
	header("location:kandidatv2.php");
}else{
	$ext  = pathinfo($filename, PATHINFO_EXTENSION);

	if(!in_array($ext,$allowed) ) {
		header("location:kandidatv2.php?alert=gagal");
	}else{
		move_uploaded_file($_FILES['foto']['tmp_name'], '../gambar/kandidatv2/'.$rand.'_'.$filename);
		$file_gambar = $rand.'_'.$filename;
		mysqli_query($koneksi, "insert into kandidatv2 values (NULL,'$kode','$nama','$prodi','$tentang','$file_gambar')");
		header("location:kandidatv2.php");
	}
}

