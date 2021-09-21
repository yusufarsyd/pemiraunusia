<?php 
include '../koneksi.php';
$id   = $_POST ['id'];
$kode   = $_POST ['kode'];
$nama   = $_POST ['nama'];
$prodi   = $_POST ['prodi'];
$tentang  = $_POST ['tentang'];

// cek gambar
$rand  = rand();
$allowed  =  array('gif','png','jpg','jpeg');
$filename  = $_FILES ['foto']['name'];
$ext  = pathinfo($filename , PATHINFO_EXTENSION);

if($filename ==""){
	mysqli_query($koneksi, "update kandidatv2 set kandidatv2_kode='$kode ',kandidatv2_nama='$nama ',kandidatv2_prodi='$prodi ',kandidatv2_tentang='$tentang ' where kandidatv2_id='$id '");
	header("location:kandidatv2.php");
}else{
	if(!in_array($ext ,$allowed ) ) {
		header("location:kandidatv2.php?alert=gagal");
	}else{
		move_uploaded_file($_FILES ['foto']['tmp_name'], '../gambar/kandidatv2/'.$rand .'_'.$filename );
		$x  = $rand .'_'.$filename ;
		mysqli_query($koneksi, "update kandidatv2 set kandidatv2_kode='$kode ',kandidatv2_nama='$nama ',kandidatv2_prodi='$prodi ',kandidatv2_foto='$x ', kandidatv2_tentang='$tentang ' where kandidatv2_id='$id '");		
		header("location:kandidatv2.php?alert=berhasil");
	}
}
