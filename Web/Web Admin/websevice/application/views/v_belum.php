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

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                  <?php echo $this->session->userdata("USERNAME_ADMIN"); ?>
                </a>
            </div>

           
           <ul class="nav">
                <li>
                    <a href="<?php echo base_url('admin'); ?>">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="user.html">
                        <i class="pe-7s-user"></i>
                        <p>Profil Admin</p>
                    </a>
                </li>
                <li  class="active">
                  <a href="<?php echo base_url('data'); ?>">
                        <i class="pe-7s-note2"></i>
                        <p>Data Usulan</p>
                    </a>
                </li>
				 <li>
  <a href="<?php echo base_url('review'); ?>">
                        <i class="pe-7s-note2"></i>
                        <p>Data Review</p>
                    </a>
                </li>
				 <li>
                     <a href="<?php echo base_url('user'); ?>">
                        <i class="pe-7s-note2"></i>
                        <p>Data User</p>
                    </a>
                </li>
              
            </ul>
    	</div>
    </div>

    <div class="main-panel">
       <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        

              </ul>

<ul class="nav navbar-nav navbar-center">

                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                       
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
										Dropdown
										<b class="caret"></b>
									</p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                        </li>
                        <li>
                            <a href="<?php echo base_url('admin/logout'); ?>">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
             <section class="content">
        
        
          <div class="box">
            <div class="box-header">
			 <h4 class="title">Pesan Baru</h4>
</div>
            <div class="box-body">
            	<table id="tbl-siswa" class="table table-bordered table-hover table-striped">
            		 <thead>
                    <tr>
					 <th>No</th>
                     <th>Nama User</th>
                    <th>Gambar</th>
                    <th>Tanggal</th>
					<th>Alamat</th>
					<th>Status</th>
					<th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
             <?php 
		$no = 1;
		foreach($gbr as $u){ 
		  
		    $status=$u->status;
	if ($status == "menunggu")  {
    //apabila sisa hasil bagi benar-benar 0 maka bg warnanya berikut
    $warna = '#FF0000';
 }
 else if  ($status == "Pilih") {
    //selain kondisi tersebut, warnanya akan berubah berikut
    $warna = '#FFFF00';
 }
  else if  ($status == "proses") {
    //selain kondisi tersebut, warnanya akan berubah berikut
    $warna = '#00FFFF';
 }
 else{
     $warna='00FF00';
 }
		
          echo "<tr>";?>

				
				<td><?php echo $no++; ?></td>
                     <td><?php echo $u->nama; ?></td>
                    <td><img src="<?=$u->path?>"width="100" height="100"</td>
                    <td><?php echo $u->tgl; ?></td>
					 <td><?php echo $u->alamat; ?></td>
					 <?php echo "<td bgcolor='$warna'>";?><?php echo $status; ?></td>
                   <td>
					  
                                  <a href="<?php echo base_url(); ?>data/editweb/<?php echo $u->id; ?>" class="btn btn-success"> Detail</a></td>
                </tr>
                <?php } ?>
                </tbody>
				
          	  	</table>
            </div>
          </div>
        </section>

	<!-- Modal -->
	  <!--MODAL UNTUK EDIT DATA-->
        <div class="modal modal-info fade" id="ModalEdit">
            <div class="modal-dialog">
            	<div class="modal-content">
                  	<div class="modal-header">
                    	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    	<h4 class="modal-title">Detail</h4>
                  	</div>
                  	<div class="modal-body">
                  		<form method="post">
                    	<div class="input-group" style="margin-bottom:5px;">
                    		<span class="input-group-addon"><i class="fa fa-sort-numeric-asc"></i></span>
                    		<input type="text" class="form-control"id="id" placeholder="id" name="id" required>
                  		</div>
						<div class="input-group" style="margin-bottom:5px;">
                    		<span class="input-group-addon"><i class="fa fa-sort-numeric-asc"></i></span>
                    		<input type="text" class="form-control"id="nama" placeholder="nama" name="nama" required>
                  		</div>
                  		<div class="input-group" style="margin-bottom:5px;">
                    		<span class="input-group-addon"><i class="fa fa-user"></i></span>
                    		<input type="text" class="form-control"id="path" placeholder="Path" name="path" required>
                  		</div>
						
                  		
                  		<div class="input-group" style="margin-bottom:5px;">
                    		<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    		<input type="text" class="form-control"id="alamat" placeholder="alamat" name="alamat" required>
                  		</div>
                  		
                  		
						<div class="input-group" style="margin-bottom:5px;">
                    		<span class="input-group-addon"><i class="fa fa-home"></i></span>
                    		<input type="text" class="form-control" id="keterangan"placeholder="keterangan" name="keterangan" required>
                  		</div>
						
                  	</div>
                  	
                  	</form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
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
