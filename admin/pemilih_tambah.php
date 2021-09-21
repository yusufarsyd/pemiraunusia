<?php include 'header.php'; ?>

<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Pemilih V1
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
            <a href="pemilih.php" class="btn btn-success btn-sm pull-right"><i class="fa fa-reply"></i> &nbsp Kembali</a> 
          </div>
          <div class="box-body">
            <form action="pemilih_act.php" method="post">
              
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

	
	
<!---- Upload data DPT --->
	
	<section class="content">
    <div class="row">
      <section class="col-lg-6 col-lg-offset-3">       
        <div class="box box-success">

          <div class="box-header">
            <h3 class="box-title">Upload Pemilih Baru</h3>
          </div>
          <div class="box-body">			
	 <form action="pemilih_upload.php" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <label><b>Format file xls</b></label><br>
						<label><b>Download template DPT</b></label>
						<a href="../data-dpt.xls" download>Klik disini</a>
						  
                        <input type="file" name="file_dpt" required="required" class="form-control-file">
                      </div>
         
				 <div class="form-group">
                <input type="submit" name="upload" class="btn btn-success" value="Import">
					 				
	 
					 
              </div>
            </form>
          </div>

        </div>
      </section>
    </div>
  </section>
	
	
				
</div>
<?php include 'footer.php'; ?>