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
            <h3 class="box-title">Voting DPM</h3>
            <a href="votingv2_print.php" target="_blank" class="btn btn-default btn-sm pull-right"><i class="fa fa-print"></i> &nbsp; Print</a>
          </div>
          <div class="box-body">

            <div class="table-responsive">
              <table class="table table-bordered table-striped" id="table-datatable">
                <thead>
                  <tr>
                    <th width="1%">NO</th>
                    <th class="text-center">WAKTU VOTING</th>
                    <th class="text-center">NIM PEMILIH V2</th>
                    <th class="text-center">VOTING DPM</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  include '../koneksi.php';
                  $no=1;
                  $data = mysqli_query($koneksi,"SELECT * FROM pemilihv2,kandidatv2,votingv2 WHERE votingv2_pemilih=pemilihv2_id and votingv2_kandidat=kandidatv2_id");
                  while($d = mysqli_fetch_array($data)){
                    ?>
                   <tr>
                       <td class="text-center"><?php echo $no++; ?></td>
                      <td class="text-center"><?php echo date('d-m-Y', strtotime($d['votingv2_waktu'])); ?></td>
                      <td class="text-center"><?php echo $d['pemilihv2_nim']; ?></td>
                      <td class="text-center"><?php echo $d['kandidatv2_kode']; ?> - <?php echo $d['kandidatv2_nama']; ?></td>
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