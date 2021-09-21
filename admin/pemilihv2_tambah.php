<?php include 'header.php'; ?>

<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Pemilih V2
      <small>Tambah Pemilih Baru</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <section class="col-lg-6 col-lg-offset-3">       
        <div class="box box-success">

          <div class="box-header">
            <h3 class="box-title">Tambah Pemilih Baru</h3>
            <a href="pemilihv2.php" class="btn btn-success btn-sm pull-right"><i class="fa fa-reply"></i> &nbsp Kembali</a> 
          </div>
          <div class="box-body">
            <form action="pemilihv2_act.php" method="post">
              
              <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" required="required" placeholder="Masukkan nama ..">
              </div>
              
              <div class="form-group">
                <label>Prodi</label>
                <input type="text" class="form-control" name="prodi" required="required" placeholder="Masukkan prodi ..">
              </div>

              <div class="form-group">
                <label>Semester</label>
                <input type="text" class="form-control" name="semester" required="required" placeholder="Masukkan semester ..">
              </div>

              <div class="form-group">
                <label>NIM</label>
                <input type="text" class="form-control" name="nim" required="required" placeholder="Masukkan nim ..">
              </div>

              <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" name="password" required="required" placeholder="Masukkan password ..">
              </div>

              <div class="form-group">
                <input type="submit" class="btn btn-success" value="Simpan">
              </div>
            </form>
          </div>

        </div>
      </section>
    </div>
  </section>

</div>
<?php include 'footer.php'; ?>