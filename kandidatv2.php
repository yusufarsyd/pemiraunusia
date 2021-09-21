<?php include 'headerv2.php'; ?>

<br>
<br>
<div class="page-body-wrapper">

  <section class="pricing-list" id="plans">
    <div class="container">
      <div class="row" data-aos="fade-up" data-aos-offset="-500">
        <div class="col-sm-12">
          <div class="d-sm-flex justify-content-between align-items-center mb-2">

            <div>
              <h3 class="font-weight-medium text-dark ">Daftar Calon DPM</h3>
              <h5 class="text-dark ">Pelajari Profil, Visi & Misi Kandidat Sebelum Memilih. </h5>
            </div>

          </div>
        </div>
      </div>
      <div class="row"  data-aos="fade-up" data-aos-offset="-300">

        <?php 

        $no_v2=1;
        $data_v2 = mysqli_query($koneksi,"SELECT * FROM kandidatv2 ORDER BY kandidatv2_kode ASC");
        while($d_v2 = mysqli_fetch_array($data_v2)){
          ?>

          <div class="col-md-4">
            <div class="pricing-box p-2">
              <h2 class="text-amount mb-4 mt-2"><?php echo $d_v2['kandidatv2_kode']; ?></h2>
              <?php if($d_v2['kandidatv2_foto'] == ""){ ?>
                <img src="gambar/sistem/kandidat.png" style="height: 190px;width: auto">
              <?php }else{ ?>
                <img src="gambar/kandidatv2/<?php echo $d_v2['kandidatv2_foto'] ?>" style="height: 190px;width: auto">
              <?php } ?>
              <!-- <img src="assets_depan/images/starter.svg" alt="starter"> -->
              <h6 class="font-weight-medium title-text"><?php echo $d_v2['kandidatv2_nama']; ?></h6>
				<h6 class="font-weight title-text"><?php echo $d_v2['kandidatv2_prodi']; ?></h6>
              <br>
              <br>
              <a href="kandidatv2_detail.php?id=<?php echo $d_v2['kandidatv2_id']; ?>" class="btn btn-outline-primary">Lihat Detail</a>
            </div>
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
  
</div>

<?php include 'footer.php'; ?>