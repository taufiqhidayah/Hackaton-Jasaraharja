<?php
//Membuat Koneksi
$server = "localhost";
$username = "root";
$password = "";
$database = "sipaud";
// Koneksi dan memilih database di server
mysql_connect($server,$username,$password) or die("Koneksi gagal");
mysql_select_db($database) or die("Database tidak bisa dibuka");

include "library.php";
?>

<script src="jquery.min.js" type="text/javascript"></script>
<script src="highcharts.js" type="text/javascript"></script>

	<script type="text/javascript">
	var chart1; // globally available
$(document).ready(function() {
      chart1 = new Highcharts.Chart({
         chart: {
            renderTo: 'container',
            type: 'column',
         },   
         title: {
            text: 'Grafik Data Pertumbuhan '
         },
         xAxis: {
            categories: ['Tinggi Badan']
         },
         yAxis: {
            title: {
               text: 'Tinggi (cm)'
            }
         },
              series:             
            [
            <?php 
                 $nis = $_REQUEST['nis'];
                 $sql_jumlah   = "SELECT * FROM catatan_pertumbuhan where nis='$nis'";        
                 $hasil  = mysql_query($sql_jumlah);
                 while( $data = mysql_fetch_array( $hasil ) ){
                    $tanggal = tgl_indo($data['tanggal']);
					          $tinggi = $data['tinggi'];
                               
                  ?>
                  {
                      name: '<?php echo $tanggal; ?>',
                      data: [<?php echo $tinggi; ?>]
                  },
                  <?php } ?>
            ]
      });
   });	
</script>

                    <div class="panel panel-default">
					<div class="panel-heading">
                    </div>
					 <div class="panel-body">
						<div class="row">                     
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <center>Data Pertumbuhan Anak (Tinggi Badan)</center> 
                        </div>
                        <div class="panel-body">
                            <div id='container'></div>
                        </div>
                    </div>            
                </div>
</div>
										</div>
