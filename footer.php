
<footer class="footer">
  <div class="footer-bottom">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center">
			
          <p class="mb-0 text-small pt-1">Copyright &copy; <?php echo date('Y') ?> <b><a href="http://wa.me/+6282199241496">KPUM UNUSIA</a></b></p>
        </div>
		  
		  
       <div>
          <div class="d-flex">
            <a href="admin.php" class="text-small text-white mx-2 footer-link">ADMIN</a>
			 

          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<script src="assets_depan/vendors/base/vendor.bundle.base.js"></script>
<script src="assets_depan/vendors/owl.carousel/js/owl.carousel.js"></script>
<script src="assets_depan/vendors/aos/js/aos.js"></script>
<script src="assets_depan/vendors/jquery-flipster/js/jquery.flipster.min.js"></script>
<script src="assets_depan/js/template.js"></script>

<script src="assets/bower_components/chart.js/Chart.min.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $("body").on("click",".pilih-kandidat",function(){
      var id = $(this).attr('id');
      $(".centang-kandidat").removeAttr("checked");
      var pilih = $("#centang_kandidat_"+id).attr("checked","checked");
    });
  });
</script>



<script>
  var randomScalingFactor = function(){ return Math.round(Math.random()*100)};

  var barChartData = {
    labels : [
    <?php 
    $no=1;
    $kandidat = mysqli_query($koneksi,"SELECT * FROM kandidat ORDER BY kandidat_kode ASC");
    while($k = mysqli_fetch_array($kandidat)){
      echo "'(".$k['kandidat_kode'].") ".$k['kandidat_nama']."',";
    }
    ?>
    ],
    datasets : [
    {
      label: 'Suara',
      fillColor : "rgba(51, 240, 113, 0.61)",
      strokeColor : "rgba(11, 246, 88, 0.61)",
      highlightFill: "rgba(220,220,220,0.75)",
      highlightStroke: "rgba(220,220,220,1)",
      data : [
      <?php 
      $kandidat = mysqli_query($koneksi,"SELECT * FROM kandidat ORDER BY kandidat_kode ASC");
      while($k = mysqli_fetch_array($kandidat)){
        $id_kandidat = $k['kandidat_id'];
        $suara = mysqli_query($koneksi,"SELECT * FROM voting WHERE voting_kandidat='$id_kandidat'");
        $jumlah_suara = mysqli_num_rows($suara);
        echo $jumlah_suara.",";
      }
      ?>
      ]
    },

    ]

  }


  window.onload = function(){
    var ctx = document.getElementById("grafik1").getContext("2d");
    window.myBar = new Chart(ctx).Bar(barChartData, {
     responsive : true,
     animation: true,
     barValueSpacing : 5,
     barDatasetSpacing : 1,
     tooltipFillColor: "rgba(0,0,0,0.8)",
     multiTooltipTemplate: "<%= datasetLabel %> - Rp.<%= value.toLocaleString() %>,-"
   });
  }


</script>

</body>
</html>