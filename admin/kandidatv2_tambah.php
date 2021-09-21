<?php include 'header.php'; ?>

<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Kandidat
      <small>Tambah Kandidat Baru</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <section class="col-lg-8 col-lg-offset-2">       
        <div class="box box-success">

          <div class="box-header">
            <h3 class="box-title">Tambah Kandidat</h3>
            <a href="kandidatv2.php" class="btn btn-success btn-sm pull-right"><i class="fa fa-reply"></i> &nbsp Kembali</a> 
          </div>
          <div class="box-body">
            <form action="kandidatv2_act.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label>Kode</label>
                <input type="text" class="form-control" name="kode" required="required" placeholder="Masukkan Kode ..">
              </div>
				
              <div class="form-group">
                <label>Nama calon</label>
                <input type="text" class="form-control" name="nama" required="required" placeholder="Masukkan Nama Paslon ..">
              </div>
				
				<div class="form-group">
                <label>Prodi</label>
                <input type="text" class="form-control" name="prodi" required="required" placeholder="Masukkan Prodi ..">
              </div>
				
              <div class="form-group">
                <label>Tentang</label>
                <textarea id="editor1" style="resize: vertical;height: 200px" class="form-control" name="tentang" required="required" placeholder="Masukkan Tentang .." placeholder="Isi deskripsi tentang kandidat (Visi, Misi atau lainnya)"></textarea>
              </div>
              <div class="form-group">
                <label>Foto Calon</label>
                <input type="file" name="foto">
                <small class="text-muted">Upload Foto kandidat perorangan</small>
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