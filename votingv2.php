<?php include 'headerv2.php'; ?>
<br>
  <br>
  <br>
              <br>
<br>
<br>
<div class="page-body-wrapper">

  <section class="pricing-list" id="plans">
    <div class="container">
      <div class="row" data-aos="fade-up" data-aos-offset="-500">
        <div class="col-sm-12">
          <div class="d-sm-flex justify-content-between align-items-center mb-2">

            <div>
              <h3 class="font-weight-medium text-dark ">Voting DPM</h3>
              <h5 class="text-dark ">Ingat Pilih Dewan Perwakilan Mahasiswa (DPM) Sesuai Prodi Anda. </h5>
            </div>

          </div>
        </div>
      </div>


      <div data-aos="fade-up" data-aos-offset="-300">

              <br>
              <br>

        <?php 
        if(isset($_SESSION['level']) && $_SESSION['level'] == "pemilihv2"){

    // cek jika pemilih sudah pernah melakukan voting
          $id_pemilih = $_SESSION['id'];
          $cek = mysqli_query($koneksi,"SELECT * FROM votingv2 WHERE votingv2_pemilih='$id_pemilih'");
          $c = mysqli_num_rows($cek);
          if($c > 0){
            ?>
            
            <center>
              <div class='alert alert-danger'><b>MOHON MAAF!</b><br>Anda sudah melakukan voting! <br> Setiap pemilih hanya bisa melakukan sekali voting.</div>
            </center>
            <br>
            <h5 class="text-dark ">Kandidat Pilihan Anda</h5>
            <hr>
            <div class="row">
              <?php 
              $data = mysqli_fetch_assoc($cek);
              $kandidat_pilihan = $data['votingv2_kandidat'];
			  
			  
      // menampilkan kandidat pilihan pemilih
              $data = mysqli_query($koneksi,"SELECT * FROM kandidatv2 WHERE kandidatv2_id='$kandidat_pilihan'");
              while($d = mysqli_fetch_array($data)){
                ?>

                <div class="col-lg-3 offset-lg-4">
                  <div class="pricing-box p-2 pilih-kandidat" id="<?php echo $d['kandidatv2_id']; ?>">
                    <h2 class="text-amount mb-4 mt-2"><?php echo $d['kandidatv2_kode']; ?></h2>
                    <?php if($d['kandidatv2_foto'] == ""){ ?>
                      <img src="gambar/sistem/kandidat.png" style="width: 190px;height: auto;">
                    <?php }else{ ?>
                      <img src="gambar/kandidatv2/<?php echo $d['kandidatv2_foto'] ?>" style="width: 190px;height: auto;">
                    <?php } ?>
                    <!-- <img src="assets_depan/images/starter.svg" alt="starter"> -->
                    <h6 class="font-weight-medium title-text"><?php echo $d['kandidatv2_nama']; ?></h6>
                    <br>
                    <br>
                  </div>
                </div>

                <?php 
              }
              ?>
            </div>

            <?php
          }else{
            ?>
            <form action="votingv2_aksi.php" method="POST" onsubmit="return confirm('APAKAH ANDA YAKIN INGIN MEMILIH KANDIDAT INI ?');">
              <div class="row">
				  
				 
				  
				  
				 
				  
                <?php 

                $data = mysqli_query($koneksi,"SELECT * FROM kandidatv2 ORDER BY kandidatv2_kode ASC");
                while($d = mysqli_fetch_array($data)){
                  ?>

				  
				  
				  
                  <div class="col-md-3">
                    <div class="pricing-box p-2 pilih-kandidat" id="<?php echo $d['kandidatv2_id']; ?>">
                      <h2 class="text-amount mb-4 mt-2"><?php echo $d['kandidatv2_kode']; ?></h2>
                      <?php if($d['kandidatv2_foto'] == ""){ ?>
                        <img src="gambar/sistem/kandidat.png" style="width: 190px;height: auto;">
                      
						
						
						<?php }else{ ?>
                        <img src="gambar/kandidatv2/<?php echo $d['kandidatv2_foto'] ?>" style="width: 190px;height: auto;">
                      <?php } ?>
                      <!-- <img src="assets_depan/images/starter.svg" alt="starter"> -->
                      <h6 class="font-weight-medium title-text"><?php echo $d['kandidatv2_nama']; ?></h6>
						<h7 class="font-weight title-text"><?php echo $d['kandidatv2_prodi']; ?></h7>
                      <br>
	                  <br>
                      <center>
                        <input type="radio" id="centang_kandidat_<?php echo $d['kandidatv2_id']; ?>" class="centang-kandidat" name="pilih" value="<?php echo $d['kandidatv2_id'] ?>" required="required">
                      </center>
                      <br>
                    </div>
                  </div>


                  <?php 
                }
                ?>
              </div>
              <br>
              <br>
              <center>
                <input type="submit" class="btn btn-success" value="VOTING!">
              </center>
            </form>
            <?php
          }
          ?>


          <?php

        }else{
          ?>

          <div class="alert alert-danger text-center">
            <br>
            <h5>Pemilihan Kandidat DPM pada Selasa, 30 Maret 2021 Pukul 07.00 sampai 19.00 WIB </h5>
			  
            <p><br> <a class="btn btn-primary" href="beforev2.php">LOGIN SEKARANG</a> </p>
            <br>
          </div>

          <?php
        }
        ?>

        
      </div>
    </div>
  </section>

  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
	<br>
  <br>
  <br>
	<br>
  <br>
 
  
</div>

<?php include 'footer.php'; ?>