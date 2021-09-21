<?php include 'header.php'; ?>

<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Voting
      <small>Data Suara Masuk</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <section class="col-lg-12">

        <div class="box box-success">

          <div class="box-header">
            <h3 class="box-title">Filter Rekapitulasi</h3>
            <a href="rekapitulasi.php" class="btn btn-default btn-sm pull-right"><i class="fa fa-close"></i> &nbsp; Reset</a>
          </div>
          <div class="box-body">

            <form method="get" action="">
              <div class="row">
                
                <div class="col-lg-3 col-lg-offset-1">
                  <div class="form-group">
                    <label>Prodi</label>
                    <select name="pilihan_prodi" class="form-control" required>
                      <option <?php if(isset($_GET['pilihan_prodi'])){if($_GET['pilihan_prodi']=="semua"){echo "selected='selected'";}} ?> value="semua prodi">Semua Prodi</option>
						
						<option <?php if(isset($_GET['pilihan_prodi'])){if($_GET['pilihan_prodi']=="PAI"){echo "selected='selected'";}} ?> value="PAI">Pendidikan Agama Islam (PAI)</option>
						
						<option <?php if(isset($_GET['pilihan_prodi'])){if($_GET['pilihan_prodi']=="AS"){echo "selected='selected'";}} ?> value="AS">Akhwalus Syahsiyah</option>
						
						<option <?php if(isset($_GET['pilihan_prodi'])){if($_GET['pilihan_prodi']=="Ekonomi Sayriah"){echo "selected='selected'";}} ?> value="Ekonomi Sayriah">Ekonomi Sayriah</option>
						
						<option <?php if(isset($_GET['pilihan_prodi'])){if($_GET['pilihan_prodi']=="Pendidikan Guru MI "){echo "selected='selected'";}} ?> value="Pendidikan Guru MI">Pendidikan Guru MI</option>
						
			
						
                       <option <?php if(isset($_GET['pilihan_prodi'])){if($_GET['pilihan_prodi']=="Sosiologi"){echo "selected='selected'";}} ?> value="Sosiologi">Sosiologi</option>
						
						<option <?php if(isset($_GET['pilihan_prodi'])){if($_GET['pilihan_prodi']=="Hukum"){echo "selected='selected'";}} ?> value="Hukum">Ilmu Hukum</option>
						
						<option <?php if(isset($_GET['pilihan_prodi'])){if($_GET['pilihan_prodi']=="Akuntansi"){echo "selected='selected'";}} ?> value="Akuntansi">Akuntansi</option>
						
						
						 <option <?php if(isset($_GET['pilihan_prodi'])){if($_GET['pilihan_prodi']=="Pendidikan Guru PAUD"){echo "selected='selected'";}} ?> value="Pendidikan Guru PAUD">Pendidikan Guru PAUD</option>
						
						 <option <?php if(isset($_GET['pilihan_prodi'])){if($_GET['pilihan_prodi']=="Psikologi"){echo "selected='selected'";}} ?> value="Psikologi">Psikologi</option>
						
						
						
						
						 <option <?php if(isset($_GET['pilihan_prodi'])){if($_GET['pilihan_prodi']=="teknik informatika"){echo "selected='selected'";}} ?> value="Teknik Informatika">Teknik Informatika</option>
						
						 <option <?php if(isset($_GET['pilihan_prodi'])){if($_GET['pilihan_prodi']=="Sistem Informasi"){echo "selected='selected'";}} ?> value="Sistem Informasi">Sistem Informasi</option>
						
						 <option <?php if(isset($_GET['pilihan_prodi'])){if($_GET['pilihan_prodi']=="Teknik Industri"){echo "selected='selected'";}} ?> value="Teknik Industri">Teknik Industri</option>
						
						 <option <?php if(isset($_GET['pilihan_prodi'])){if($_GET['pilihan_prodi']=="Agroindustri"){echo "selected='selected'";}} ?> value="Agroindustri">Agroindustri</option>
						
						
						
						<option <?php if(isset($_GET['pilihan_prodi'])){if($_GET['pilihan_prodi']=="SKI Islam Nusantara"){echo "selected='selected'";}} ?> value="SKI Islam Nusantara">SKI Islam Nusantara</option>
						
						
                    </select>
                  </div>
                </div>


                <div class="col-lg-3">
                  <div class="form-group">
                    <label>Kandidat Voting Presma</label>
                    <select name="pilihan_kandidat" class="form-control" required>
                      <option value="semua">Semua kandidat</option>
                      <?php 
                      $kandidat = mysqli_query($koneksi,"SELECT * FROM kandidat");
                      while($k = mysqli_fetch_array($kandidat)){
                        ?>
                        <option <?php if(isset($_GET['pilihan_kandidat'])){if($_GET['pilihan_kandidat']==$k['kandidat_id']){echo "selected='selected'";}} ?> value="<?php echo $k['kandidat_id'] ?>">(<?php echo $k['kandidat_kode']; ?>) <?php echo $k['kandidat_nama'] ?></option>
                        <?php 
                      }
                      ?>
                    </select>
                  </div>
                </div>
                
                
                 <div class="col-lg-3">
                  <div class="form-group">
                    <label>Kandidat Voting DPM</label>
                    <select name="pilihan_kandidatv2" class="form-control" required>
                      <option value="semua">Semua kandidat</option>
                      <?php 
                      $kandidatv2 = mysqli_query($koneksi,"SELECT * FROM kandidatv2");
                      while($k = mysqli_fetch_array($kandidatv2)){
                        ?>
                        <option <?php if(isset($_GET['pilihan_kandidatv2'])){if($_GET['pilihan_kandidatv2']==$k['kandidatv2_id']){echo "selected='selected'";}} ?> value="<?php echo $k['kandidatv2_id'] ?>">(<?php echo $k['kandidatv2_kode']; ?>) <?php echo $k['kandidatv2_nama'] ?></option>
                        <?php 
                      }
                      ?>
                    </select>
                  </div>
                </div>


                <div class="col-lg-1">
                  <div class="form-group">
                    <br>
                    <input type="submit" class="btn btn-primary btn-sm" value="Tampilkan">
                  </div>
                </div>

              </div>
            </form>

          </div>

        </div>

        <?php 
        if(isset($_GET['pilihan_prodi'])){
         ?>
         <?php 
         $pilihan_prodi = $_GET['pilihan_prodi'];
         $pilihan_kandidat = $_GET['pilihan_kandidat'];
         $pilihan_kandidatv2 = $_GET['pilihan_kandidatv2'];
         ?>
         <div class="box box-success">

          <div class="box-header">
            <h3 class="box-title">Rekapitulasi Voting</h3>
            <a href="rekapitulasi_print.php?pilihan_prodi=<?php echo $pilihan_prodi; ?>&pilihan_kandidat=<?php echo $pilihan_kandidat; ?>&pilihan_kandidatv2=<?php echo $pilihan_kandidatv2; ?>" target="_blank" class="btn btn-default btn-sm pull-right"><i class="fa fa-print"></i> &nbsp; Print</a>
          </div>
          <div class="box-body">

           

            <table class="table">
              <tr>
                <th width="15%">Prodi</th>
                <th width="1%">:</th>
                <td>
                  <?php 
                  if($pemilih_prodi == "semua"){
                    echo "Semua Prodi";
                  }else{
                    echo $pilihan_prodi;
                  }
                  ?>
                </td>
              </tr>
              
             <tr>
                <th>Kandidat Voting Presma</th>
                <th>:</th>
                <td>
                  <?php 
                  if($pilihan_kandidat == "semua"){
                    echo "Semua Kandidat";
                  }else{
                    $id_kandidat = $pilihan_kandidat;
                    $kandidat = mysqli_query($koneksi,"select * from kandidat where kandidat_id='$id_kandidat'");
                    $k = mysqli_fetch_assoc($kandidat);
                    echo "(".$k['kandidat_kode'].") - ".$k['kandidat_nama'];
                  }
                  ?>
                </td>
              </tr>
              
              <tr>
                <th>Kandidat Voting DPM</th>
                <th>:</th>
                <td>
                  <?php 
                  if($pilihan_kandidatv2 == "semua"){
                    echo "Semua Kandidat";
                  }else{
                    $id_kandidat = $pilihan_kandidat;
                    $kandidat = mysqli_query($koneksi,"select * from kandidatv2 where kandidatv2_id='$id_kandidat'");
                    $k = mysqli_fetch_assoc($kandidat);
                    echo "(".$k['kandidatv2_kode'].") - ".$k['kandidatv2_nama'];
                  }
                  ?>
                </td>
              </tr>
            </table>
            
            

            <div class="table-responsive">
              <table class="table table-bordered table-striped" id="table-datatable">
                <thead>
                  <tr>
                    <th width="1%">NO</th>
                    <th class="text-center">WAKTU VOTING</th>
                    <th class="text-center">PEMILIH</th>
                    <th class="text-center">VOTING PRESMA</th>
                    <th class="text-center">VOTING DPM</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $no=1;

                  $a = "";
                  if($pilihan_prodi != "semua"){
                    $a .= "and pemilih_prodi='$pilihan_prodi'";
                  }

                 

                  if($pilihan_kandidat != "semua"){
                    $a .= "and kandidat_id='$pilihan_kandidat'";
                  }
			
			      if($pilihan_kandidatv2 != "semua"){
                    $a .= "and and kandidatv2_id='$pilihan_kandidatv2'";
                  }
			

                  $data = mysqli_query($koneksi,"SELECT * FROM pemilih,kandidat,voting WHERE voting_pemilih=pemilih_id and voting_kandidat=kandidat_id $a");

                  while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                      <td class="text-center"><?php echo $no++; ?></td>
                      <td class="text-center"><?php echo date('d-m-Y', strtotime($d['voting_waktu'])); ?></td>
                      <td class="text-center"><?php echo $d['pemilih_nama']; ?></td>
                      <td class="text-center"><?php echo $d['kandidat_kode']; ?> - <?php echo $d['kandidat_nama']; ?></td>
                    </tr>
					
					
					
                    <?php   
					  
                  }
                  ?>
					
					
					
                </tbody>
              </table>
            </div>

          </div>

        </div>
        <?php
      }
      ?>


    </section>
  </div>
</section>

</div>
<?php include 'footer.php'; ?>