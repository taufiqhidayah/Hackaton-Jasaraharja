<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="<?php echo base_url('assetsadmin/img/favicon.ico')?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
 <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
        <script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
	<script src="<?php echo base_url('assets/js/jquery-3.1.1.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
	<script src="<?php echo base_url('assets/js/jquery-3.1.1.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
	<title>Dinas PUPR Kab. Jombang</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url('assetsadmin/css/bootstrap.min.css" rel="stylesheet')?>" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url('assetsadmin/css/animate.min.css" rel="stylesheet')?>"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?php echo base_url('assetsadmin/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet')?>"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url('assetsadmin/css/demo.css" rel="stylesheet')?>" />

 <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/datatables/css/dataTables.bootstrap.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')?>" rel="stylesheet">
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url('assetsadmin/css/pe-icon-7-stroke.css" rel="stylesheet')?>" />
 <style>
      .example-modal .modal {
        position: relative;
        top: auto;
        bottom: auto;
        right: auto;
        left: auto;
        display: block;
        z-index: 1;
      }
      .example-modal .modal {
        background: transparent !important;
      }
    </style>    
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->

<?php $this->load->view('sidebar');?>
    </div>

    <div class="main-panel">
		
<?php $this->load->view('navigasimenu');?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Data Review</h4>
                               
                            </div>
                            <div class="content table-responsive table-full-width">
                              	<table id="tbl-siswa" class="table table-bordered table-hover table-striped">
            		 <thead>
                    <tr>
					 <th>No</th>
                     <th>Nama User</th>
                    <th>Gambar</th>
                    <th>Tanggal</th>
					
					<th>Isi</th>
				
                    </tr>
                </thead>
                <tbody>
               <?php 
		$no = 1;
		foreach($review as $u){ 
	
		?>
                <tr>
				
				<td><?php echo $no++; ?></td>
                     <td><?php echo $u->NAMA_USER; ?></td>
                    <td><img src="<?=$u->gambarreview?>"width="100" height="100"</td>
                    <td><?php echo $u->ISI_REVIEW; ?></td>
					 <td><?php echo $u->TANGGAL_REVIEW; ?></td>
					 
                  
                </tr>
                <?php } ?>
                </tbody>
				
          	  	</table>

                            </div>
                        </div>
                    </div>


                 


                </div>
            </div>
        </div>

        <footer class="footer">
           
        </footer>


    </div>
</div>

<script>
    	$(document).on('click', ".edit-siswa", function (){
	    	var a = $(this).data('id');
	    	var b = $(this).data('nama');
	    	var c = $(this).data('path');
	    	var d = $(this).data('alamat');
	    	var e = $(this).data('keterangan');
			
	    	$(".modal-body #id").val(a);
	    	$(".modal-body #nama").val(b);
	    	$(".modal-body #path").val(c);
	    	$(".modal-body #alamat").val(d);3
	    	$(".modal-body #keterangan").val(e);
			
			
    	});
    </script>
	<script>
      $(function () {
        $("#tbl-siswa").DataTable();
        $('#tbl2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
    </script>
<script src="<?php echo base_url('plugins/jQuery/jQuery-2.1.4.min.js')?>"></script>
    <script src="<?php echo base_url('bootstrap/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('plugins/datatables/jquery.dataTables.min.js')?>"></script>
    <script src="<?php echo base_url('plugins/datatables/dataTables.bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('plugins/slimScroll/jquery.slimscroll.min.js')?>"></script>
    <script src="<?php echo base_url('plugins/fastclick/fastclick.min.js')?>"></script>
    <script src="<?php echo base_url('dist/js/app.min.js')?>"></script>
    <script src="<?php echo base_url('dist/js/demo.js')?>"></script>

<script>

</body>

    <!--   Core JS Files   -->
    <script src="<?php echo base_url('assetsadmin/js/jquery.3.2.1.min.js" type="text/javascript')?>"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="<?php echo base_url('assetsadmin/js/chartist.min.js')?>"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url('assetsadmin/js/bootstrap-notify.js')?>"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="<?php echo base_url('assetsadmin/js/light-bootstrap-dashboard.js?v=1.4.0')?>"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="<?php echo base_url('assetsadmin/js/demo.js')?>"></script>

	
 
</html>
