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
              <h3 class="font-weight-medium text-dark ">Detail Calon DPM</h3>
              <h5 class="text-dark ">Pelajari Profil, Visi & Misi Kandidat Sebelum Memilih. </h5>
            </div>

          </div>
        </div>
      </div>

      <a href="kandidatv2.php" data-aos="fade-up" data-aos-offset="-500" class="btn btn-primary"><i class="fa fa-arrow-left"></i> &nbsp; DAFTAR CALON DPM</a>


      <div class="row"  data-aos="fade-up" data-aos-offset="-300">

        <?php 
        $id=$_GET['id'];
        $data = mysqli_query($koneksi,"SELECT * FROM kandidatv2 WHERE kandidatv2_id=$id");
        while($d  = mysqli_fetch_array($data )){
          ?>

          <div class="col-sm-4">
            <div class="pricing-box">
              <h2 class="text-amount mb-4 mt-2"><?php echo $d ['kandidatv2_kode']; ?></h2>
              <?php if($d ['kandidatv2_foto'] == ""){ ?>
                <img src="gambar/sistem/kandidat.png" style="height: 190px;width: auto">
              <?php }else{ ?>
                <img src="gambar/kandidatv2/<?php echo $d ['kandidatv2_foto'] ?>" style="height: 190px;width: auto">
              <?php } ?>
              <!-- <img src="assets_depan/images/starter.svg" alt="starter"> -->
              <h6 class="font-weight-medium title-text"><?php echo $d ['kandidatv2_nama']; ?></h6>
              <br>
              <br>
             </div>
          </div>

          <div class="col-sm-8">

            <br>
            <br>
            
            <div class="">
              <table class="table table-bordered">
                <tr>
                  <th width="20%">No. Urut</th>
                  <td><?php echo $d ['kandidatv2_kode']; ?></td>
                </tr>
                <tr>
                  <th width="20%">Nama Lengkap</th>
                  <td><?php echo $d ['kandidatv2_nama']; ?></td>
                </tr>
				  <tr>
				  <th width="20%">Prodi</th>
                  <td><?php echo $d ['kandidatv2_prodi']; ?></td>
                </tr>
                <tr>
                  <th>Keterangan <br> <small>(Keterangan, Visi, Misi, dan lain-lain)</small></th>
                  <td><?php echo $d ['kandidatv2_tentang']; ?></td>
                </tr>
              </table>
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