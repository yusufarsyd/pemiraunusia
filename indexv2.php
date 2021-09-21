<?php include 'headerv2.php'; ?>

<div class="page-body-wrapper">
  <section id="home" class="home">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="main-banner">
            <div class="d-sm-flex justify-content-between">
              <div data-aos="zoom-in-up">
                <div class="banner-title">
                  <h3 class="font-weight-medium">
                    Sistem E-Voting Pemilihan Raya Mahasiswa UNUSIA
                   
                  </h3>
                </div>
                <p class="mt-3">
                   <i>"Suarakan Aspirasi, Rayakan Demokrasi"</i>
                </p>

                <a href="lihat.php" class="btn btn-outline-secondary text-white mt-3">LIHAT KANDIDAT</a>
                <a href="pilihv2.php" class="btn btn-secondary mt-3">VOTING SEKARANG</a>

              </div>
              <div class="mt-5 mt-lg-0">
                <img src="assets_depan/images/group.png" alt="marsmello" class="img-fluid" data-aos="zoom-in-up">
              </div>
            </div>
          </div>
        </div>
       </div>
      </div>
    </div>
  </section>
  
  <section class="our-services" id="services">
    <div class="container">
      <div class="text">
        <div class="col-sm-12">	
			
			
		<center><img src="assets_depan/images/logo.png" alt="" class="img-responsive" style="width: 205px"  data-aos="zoom-in-up"><center>
			<br> <br>
			<br>
			<div class="FAQ">
	<center><p3 class="font-weight-medium text-dark mb-5"> <font size="5">Apa Itu Pemira ?</font></p3></center>
				<br>
			
			                     
<center><p1><i>"Pemira merupakan pesta demokrasi mahasiswa yang dilaksanakan setiap tahunnya <br> untuk menentukan Presiden dan Wakil Presiden Mahasiswa (PRESMA) secara berpasangan, dan anggota Dewan Perwakilan Mahasiswa (DPM) yang bersifat perseorangan".</i></p1></center>   
          </div>
        </div>
			</div>
		  </section>
		  </center>
		
		<br>
		<br>
		
		
  <section class="our-process" id="syarat">
    <div class="container">
      <div class="row">
        <div class="col-sm-6" data-aos="fade-up">
          <h3 class="font-weight-medium text-dark">Cara Mengikuti Voting!</h3>          
          <p class="font-weight-medium mb-4"> 
            <font color='#000'>Pastikan kamu terdaftar Sebagai Pemilih Tetap,</font>
            <br>
			  <font color='#000'>Jika belum, silahkan mendaftar terlebih dahulu.</font>
          </p>
          
           <div class="d-flex justify-content-start mb-3">
            <img src="assets_depan/images/tick.png" alt="tick" class="mr-3 tick-icon"  >
            <p class="mb-0"><font color='#000'>Pilih Menu Voting</font></p>
          </div>
          
          <div class="d-flex justify-content-start mb-3">
            <img src="assets_depan/images/tick.png" alt="tick" class="mr-3 tick-icon"  >
			  <p class="mb-0"><font color='#000'>Login Sesuai sesi Pemilihan menggunakan NIM Dan Password</font></p>
          </div>

         

          <div class="d-flex justify-content-start mb-3">
            <img src="assets_depan/images/tick.png" alt="tick" class="mr-3 tick-icon"  >
			  <p class="mb-0"><font color='#000'>Pilih Kandidat </font></p>
          </div>

          <div class="d-flex justify-content-start mb-3">
            <img src="assets_depan/images/tick.png" alt="tick" class="mr-3 tick-icon"  >
			  <p class="mb-0"><font color='#000'>Klik Tombol Voting</font></p>
          </div>

          <div class="d-flex justify-content-start">
            <img src="assets_depan/images/tick.png" alt="tick" class="mr-3 tick-icon"  >
			  <p class="mb-0"><font color='#000'>Selesai</font></p>
          </div>

        </div>
        <div class="col-sm-6 text-right" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
          <img src="assets_depan/images/idea.png" alt="idea" class="img-fluid">
        </div>
      </div>
		</div>  
  </section>
		
		
	  
    <div class="container">
      <div class="row pt-5 mt-5 pb-5 mb-5">
        <div class="col-sm-3">
          <div class="d-flex py-3 my-3 my-lg-0 justify-content-center" data-aos="fade-down">
            <img src="assets_depan/images/satisfied-client.svg" alt="satisfied-client" class="mr-3">
            <div>
              <?php 
              $pemilih = mysqli_query($koneksi,"SELECT * FROM pemilih");
              ?>
              <h4 class="font-weight-bold text-dark mb-0"><span><?php echo mysqli_num_rows($pemilih); ?></span></h4>
              <h5 class="text-dark mb-0">Jumlah Pemilih</h5>
            </div>
          </div>
        </div>
        
        <div class="col-sm-3">
          <div class="d-flex py-3 my-3 my-lg-0 justify-content-center" data-aos="fade-up">
            <img src="assets_depan/images/finished-project.svg" alt="satisfied-client" class="mr-3">
            <div>
              <?php 
              $kandidat = mysqli_query($koneksi,"SELECT * FROM kandidat");
              ?>
              <h4 class="font-weight-bold text-dark mb-0"><span><?php echo mysqli_num_rows($kandidat); ?></span></h4>
              <h5 class="text-dark mb-0">Kandidat PRESMA</h5>
            </div>
          </div>
        </div>
        
        <div class="col-sm-3">
          <div class="d-flex py-3 my-3 my-lg-0 justify-content-center" data-aos="fade-up">
            <img src="assets_depan/images/our-blog-posts.svg" alt="satisfied-client" class="mr-3">
            <div>
              <?php 
              $kandidatv2 = mysqli_query($koneksi,"SELECT * FROM kandidatv2");
              ?>
              <h4 class="font-weight-bold text-dark mb-0"><span><?php echo mysqli_num_rows($kandidatv2); ?></span></h4>
              <h5 class="text-dark mb-0">Kandidat DPM</h5>
            </div>
          </div>
        </div>
        
        <div class="col-sm-3">
          <div class="d-flex py-3 my-3 my-lg-0 justify-content-center" data-aos="fade-down">
            <img src="assets_depan/images/team-members.svg" alt="Team Members" class="mr-3">
            <div>
              <?php 
              $pemilih_sudah = mysqli_query($koneksi,"SELECT * FROM pemilih WHERE pemilih_id IN (select voting_pemilih from voting)");
              ?>
              <h4 class="font-weight-bold text-dark mb-0"><span><?php echo mysqli_num_rows($pemilih_sudah); ?></span></h4>
              <h5 class="text-dark mb-0">Suara Masuk</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php include 'footer.php'; ?>