<?php include 'headerv2.php'; ?>

<br>
<br>
<br>
<br>

<div class="page-body-wrapper">

  <section class="contactus" id="contact">
    <div class="container">

     <center>
       <?php 
       if(isset($_GET['alert'])){
        if($_GET['alert'] == "gagal"){
          echo "<div class='alert alert-danger'><b>LOGIN GAGAL!</b><br>Username dan password salah</div><br/><br/>";
        }else if($_GET['alert'] == "logout"){
          echo "<div class='alert alert-success'>Anda telah keluar</div><br/><br/>";
        }
      }
      ?>
    </center>


    <div class="row mb-5 pb-5">
      <div class="col-sm-5" data-aos="fade-up" data-aos-offset="-500">
        <img src="assets_depan/images/dpm.jpg" alt="contact" class="img-fluid">
      </div>
      <div class="col-sm-7" data-aos="fade-up" data-aos-offset="-500">
        <h3 class="font-weight-medium text-dark mt-5 mt-lg-0">Voting</h3>
        <h5 class="text-dark mb-5">Silahkan login untuk melakukan Pemilihan DPM.</h5>

        <form action="loginv2_periksa.php" method="POST">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="NIM" name="nim" required="required" autocomplete="off">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" name="password" required="required" autocomplete="off">
          </div>
          <button type="submit" class="btn btn-success btn-block btn-flat">MASUK</button>
        </form>
        <br>
        <br>
        <center><small><b>NB : </b>Silahkan hubungi admin jika anda tidak bisa login tapi sudah mendaftar sebagai pemilih.</small></center>

      </div>
    </div>
  </div>
</section>

</div>

<?php include 'footer.php'; ?>