<?php include 'header.php'; ?>

<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Pemilih V2
      <small>Data Pemilih Tetap</small>
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
            <h3 class="box-title">Pemilih</h3>
            <div class="btn-group pull-right">
              <a href="pemilihv2_tambah.php" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> &nbsp Tambah Pemilih Baru</a>              
            </div>
          </div>
          <div class="box-body">

            <div class="table-responsive">
              <table class="table table-bordered table-striped" id="table-datatable">
                <thead>
                  <tr>
                    <th width="1%">NO</th>
                    <th>NAMA</th>
                    <th>PRODI</th>
                    <th>SEMESTER</th>
                    <th>NIM</th>
                    <th width="10%">OPSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  include '../koneksi.php';
                  $no=1;
                  $data= mysqli_query($koneksi,"SELECT * FROM pemilihv2");
                  while($d= mysqli_fetch_array($data)){
                    ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $d['pemilihv2_nama']; ?></td>
                      <td><?php echo $d['pemilihv2_prodi']; ?></td>
                      <td><?php echo $d['pemilihv2_semester']; ?></td>
                      <td><?php echo $d['pemilihv2_nim']; ?></td>
                      <td>                        
                        <a class="btn btn-warning btn-sm" href="pemilihv2_edit.php?id=<?php echo $d ['pemilihv2_id'] ?>"><i class="fa fa-cog"></i></a>
                        <a class="btn btn-danger btn-sm" href="pemilihv2_hapus_konfir.php?id=<?php echo $d ['pemilihv2_id'] ?>"><i class="fa fa-trash"></i></a>
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