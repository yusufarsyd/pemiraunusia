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
        
         $pilihan_kandidat = $_GET['pilihan_kandidat'];
        
         ?>
         <div class="box box-success">

          <div class="box-header">
            <h3 class="box-title">Rekapitulasi Voting</h3>
             <a href="rekapitulasi_print.php?pilihan_kandidat=<?php echo $pilihan_kandidat; ?>" target="_blank" class="btn btn-default btn-sm pull-right"><i class="fa fa-print"></i> &nbsp; Print</a>
          </div>
          <div class="box-body">

           

           
            <table class="table">
             
              
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
              
             
            </table>
            

            <div class="table-responsive">
              <table class="table table-bordered table-striped" id="table-datatable">
                <thead>
                  <tr>
                     <th width="1%">NO</th>
                    <th class="text-center">WAKTU VOTING</th>
                    <th class="text-center">PEMILIH</th>
                    <th class="text-center">VOTING PRESMA</th>
                    
                  </tr>
                </thead>
               <tbody>
                  <?php 
                  $no=1;

                  $a = "";
                 

                 

                  if($pilihan_kandidat != "semua"){
                    $a .= "and kandidat_id='$pilihan_kandidat'";
                  }
			
			

                  $data = mysqli_query($koneksi,"SELECT * FROM pemilih,kandidat,voting WHERE voting_pemilih=pemilih_id and voting_kandidat=kandidat_id $a");

                  while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                      <td class="text-center"><?php echo $no++; ?></td>
                      <td class="text-center"><?php echo date('d-m-Y', strtotime($d['voting_waktu'])); ?></td>
                      <td class="text-center"><?php echo $d['pemilih_nim']; ?></td>
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
       


    </section>
  </div>
</section>

</div>
<?php include 'footer.php'; ?>