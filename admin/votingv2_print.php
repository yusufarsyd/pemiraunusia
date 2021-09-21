<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <title>Admin - SISTEM INFORMASI E-VOTING PEMIRA UNUSIA</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/dist/css/AdminLTE.min.css">

  <?php 
  include '../koneksi.php';
  session_start();
  if($_SESSION_v2['level'] != "administrator"){
    header("location:../index.php?alert=belum_login");
  }
  ?>

</head>
<body>

  <center>
    <h4>REKAPITULASI DATA VOTING</h4>
    <h5>Sistem Informasi E-Voting Pemilihan Raya</h5>
  </center>
  
  <br>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th width="1%">NO</th>
        <th>WAKTU VOTING</th>
        <th>PEMILIH V2</th>
        <th>CALON DIPILIH</th>
        
      </tr>
    </thead>
    <tbody>
      <?php 
      $no_v2=1;
      $data_v2 = mysqli_query($koneksi,"SELECT * FROM pemilihv2,kandidatv2,votingv2 WHERE votingv2_pemilih=pemilihv2_id and votingv2_kandidat=kandidatv2_id");
      while($d_v2 = mysqli_fetch_array($data_v2)){
        ?>
        <tr>
          <td><?php echo $no_v2++; ?></td>
          <td><?php echo date('d-m-Y', strtotime($d_v2['votingv2_waktu'])); ?></td>
          <td><?php echo $d_v2['pemilihv2_nama']; ?></td>
          <td><?php echo $d_v2['kandidatv2_kode']; ?> - <?php echo $d_v2['kandidatv2_nama']; ?></td>
        </tr>
        <?php 
      }
      ?>
    </tbody>
  </table>

  <script type="text/javascript">
    window.print();
  </script>

</body>
</html>
