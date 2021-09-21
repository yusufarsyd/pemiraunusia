<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Admin - SISTEM INFORMASI E-VOTING PEMIRA UNUSIA</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../assets/bower_components/bootstrap/dist/css/bootstrap.min.css">

  <?php 
  include '../koneksi.php';
  session_start();
  if($_SESSION['level'] != "administrator"){
    header("location:../index.php?alert=belum_login");
  }
  ?>

</head>
<body>

  <center>
    <h4>Rekapitulasi Hasil Pemilihan</h4>
    
    <h5>Sistem Informasi E-Voting Pemira UNUSIA
    </h5>
  </center>
  <br>
  <?php 
  if(isset($_GET['pilihan_prodi'])){
    ?>
    <?php 
    $pilihan_prodi = $_GET['pilihan_prodi'];
    $pilihan_kandidat = $_GET['pilihan_kandidat'];
    $pilihan_kandidatv2 = $_GET['pilihan_kandidatv2'];
    ?>
    <table class="table">
      <tr>
        <th width="15%">Prodi Pemilih</th>
        <th width="1%">:</th>
        <td>
          <?php 
          if($pilihan_prodi == "semua"){
            echo "Semua Prodi";
          }else{
            echo $pilihan_prodi;
          }
          ?>
        </td>
      </tr>
      
      <tr>
        <th>Voting PRESMA</th>
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
        <th>Voting DPM</th>
        <th>:</th>
        <td>
          <?php 
          if($pilihan_kandidatv2 == "semua"){
            echo "Semua Kandidat";
          }else{
            $id_kandidatv2 = $pilihan_kandidatv2;
            $kandidatv2 = mysqli_query($koneksi,"select * from kandidatv2 where kandidatv2_id='$id_kandidatv2'");
            $k = mysqli_fetch_assoc($kandidatv2);
            echo "(".$k['kandidatv2_kode'].") - ".$k['kandidatv2_nama'];
          }
          ?>
        </td>
      </tr>
    </table>

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
        if($pilihan_jk != "semua"){
          $a .= "and pemilih_prodi='$pilihan_prodi'";
        }
        if($pilihan_kandidat != "semua"){
          $a .= "and kandidat_id='$pilihan_kandidat'";
        }
        if($pilihan_kandidatv2 != "semua"){
          $a .= "and kandidatv2_id='$pilihan_kandidatv2'";
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

    <?php
  }
  ?>

  <script type="text/javascript">
    window.print();
  </script>

</body>
</html>
