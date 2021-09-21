<?php include 'header.php'; ?>

<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Kandidat
      <small>Data Kandidat DPM</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <section class="col-lg-10 col-lg-offset-1">
        <div class="box box-success">

          <div class="box-header">
            <h3 class="box-title">Kandidat</h3>
            <a href="kandidatv2_tambah.php" class="btn btn-success btn-sm pull-right"><i class="fa fa-plus"></i> &nbsp Tambah Kandidat Baru</a>              
          </div>
          <div class="box-body">
            <div class="table-responsive">
              <table class="table table-bordered table-striped" id="table-datatable">
                <thead>
                  <tr>
                    <th width="1%">NO</th>
                    <th>NAMA CALON</th>
					 <th>PRODI</th>
                    <th>TENTANG</th>
                    <th width="15%">FOTO CALON</th>
                    <th width="10%">OPSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  include '../koneksi.php';
                  $no =1;
                  $data  = mysqli_query($koneksi,"SELECT * FROM kandidatv2");
                  while($d  = mysqli_fetch_array($data )){
                    ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $d['kandidatv2_nama']; ?></td>
					  <td><?php echo $d['kandidatv2_prodi']; ?></td>
                      <td><?php echo $d['kandidatv2_tentang']; ?></td>
                      <td>
                        <center>
                          <?php if($d['kandidatv2_foto'] == ""){ ?>
                            <img src="../gambar/sistem/kandidat.png" style="width: 80px;height: auto">
                          <?php }else{ ?>
                            <img src="../gambar/kandidatv2/<?php echo $d['kandidatv2_foto'] ?>" style="width: 80px;height: auto">
                          <?php } ?>
                        </center>
                      </td>
                      <td>                        
                        <a class="btn btn-warning btn-sm" href="kandidatv2_edit.php?id=<?php echo $d['kandidatv2_id'] ?>"><i class="fa fa-cog"></i></a>
                        <a class="btn btn-danger btn-sm" href="kandidatv2_hapus_konfir.php?id=<?php echo $d['kandidatv2_id'] ?>"><i class="fa fa-trash"></i></a>
                      </td>
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