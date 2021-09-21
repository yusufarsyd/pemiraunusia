<!-- import excel ke mysql -->
<!-- Copyright@2021 Adi Yusuf -->
 	

<?php 
// menghubungkan dengan koneksi
include '../koneksi.php';
// menghubungkan dengan library excel reader
include "../excel_reader2.php";
?>
 
<?php
// upload file xls
$target = basename($_FILES['file_pemilih']['name']) ;
move_uploaded_file($_FILES['file_pemilih']['tmp_name'], $target);
 
// beri permisi agar file xls dapat di baca
chmod($_FILES['file_pemilih']['name'],0777);
 
// mengambil isi file xls
$data = new Spreadsheet_Excel_Reader($_FILES['file_pemilih']['name'],false);
// menghitung jumlah baris data yang ada
$jumlah_baris = $data->rowcount($sheet_index=0);
 
// jumlah default data yang berhasil di import
$berhasil = 0;
for ($i=2; $i<=$jumlah_baris; $i++){
 
	// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
	$nama     = $data->val($i, 1);
	$prodi    = $data->val($i, 2);
	$semester   = $data->val($i, 3);
	$nim   = $data->val($i, 4);
	$password   = $data->val($i, 5);
	
	if($nama != "" && $prodi != "" && $semester != "" && $nim != "" && $password != "" ){
		// input data ke database (table data pemilih)
		mysqli_query($koneksi,"INSERT INTO pemilih values('$nama','$prodi','$semester','$nim','$password')");
		$berhasil++;
	}
}
 
// hapus kembali file .xls yang di upload tadi
unlink($_FILES['file_pemilih']['name']);
 
// alihkan halaman ke index.php
header("location:pemilih.php");
?>