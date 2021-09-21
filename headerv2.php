<!DOCTYPE html>
<html lang="en">
	<link rel="shortcut icon" href="gambar/sistem/favicon.ico"/>
<head>
  <!-- Required meta tags --> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SISTEM INFORMASI E-VOTING PEMIRA UNUSIA</title>
  <link rel="stylesheet" href="assets_depan/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets_depan/vendors/owl.carousel/css/owl.carousel.css">
  <link rel="stylesheet" href="assets_depan/vendors/owl.carousel/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="assets_depan/vendors/aos/css/aos.css">
  <link rel="stylesheet" href="assets_depan/vendors/jquery-flipster/css/jquery.flipster.css">
  <link rel="stylesheet" href="assets_depan/css/style.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
  <?php 
  session_start();
  include 'koneksi.php';
  ?>
  <div id="mobile-menu-overlay"></div>
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <!-- <a class="navbar-brand" href="#"><img src="assets_depan/images/logo.svg" alt="Marshmallow"></a> -->
      <a class="navbar-brand" href="indexv2.php"><img src="assets_depan/images/kpu.png" alt="" class="img-responsive" style="width: 150px"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i class="mdi mdi-menu"> </i></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <div class="d-lg-none d-flex justify-content-between px-4 py-3 align-items-center">
          <a class="logo-mobile-menu text-bold text-dark" href="indexv2.php">Pemira UNUSIA.</a>
          <!-- <img src="assets_depan/images/logo-dark.svg" class="logo-mobile-menu" alt="logo"> -->
          <a href="javascript:;" class="close-menu"><i class="mdi mdi-close"></i></a>
        </div>
        <ul class="navbar-nav ml-auto align-items-center">
          <li class="nav-item active"><a class="nav-link px-2" href="indexv2.php">Home <span class="sr-only">(current)</span></a></li>
			 <li class="nav-item"><a class="nav-link px-2" href="lihat.php">Kandidat</a></li>
			<li class="nav-item"><a class="nav-link px-2" href="hasil_sementara.php">Hasil Sementara</a></li>
          <li class="nav-item"><a class="nav-link px-2" href="faq.php">FAQ</a></li>
          <li class="nav-item"><a class="nav-link px-2" href="report.php">Report</a></li>
          
          <?php 
          if(isset($_SESSION['level']) && $_SESSION['level'] == "pemilihv2"){
			  
            ?>
			
			
            <li class="nav-item mr-md-1 ml-md-3 mx-sm-0"><a class="nav-link btn btn-outline-success"><?php
			  echo $_SESSION['nama'] ?> - <span class="label label-success">Pemilih</span></a></li>
            <li class="nav-item mx-md-0 mx-sm-0"><a class="nav-link btn btn-danger" href="logout.php">LOGOUT</a></li>
           
			<?php
          }else{
            ?>
			
			
			 <li class="nav-item mr-md-1 ml-md-3 mx-sm-0"><a class="nav-link btn btn-outline-success" href="pilih.php">Voting</a></li>
            <li class="nav-item mx-md-0 mx-sm-0"><a class="nav-link btn btn-success" href="daftar.php">Daftar Pemilih</a></li>
            <?php 
          }
          ?>
			 
         
          <!-- <li class="nav-item">
            <a class="nav-link btn btn-success" href="#contact">Adi Yusuf</a>
          </li> -->
        </ul>
      </div>
    </div>
  </nav>