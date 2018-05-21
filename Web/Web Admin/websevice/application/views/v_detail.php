<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="<?php echo base_url('assetsadmin/img/favicon.ico')?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Dinas PUPR</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url('assetsadmin/css/bootstrap.min.css')?>" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url('assetsadmin/css/animate.min.css')?>" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?php echo base_url('assetsadmin/css/light-bootstrap-dashboard.css?v=1.4.0')?>" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url('assetsadmin/css/demo.css')?>" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url('assetsadmin/css/pe-icon-7-stroke.css')?>" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="<?php echo base_url('assetsadmin/img/sidebar-5.jpg')?>">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
               ADMIN
                
            </div>

           <ul class="nav">
                <li>
                    <a href="<?php echo base_url('index.php/admin'); ?>">
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
                <li class="active">
                  <a href="<?php echo base_url('index.php/data'); ?>">
                        <i class="pe-7s-note2"></i>
                        <p>Data Usulan</p>
                    </a>
                </li>
				 <li>
                    <a href="table.html">
                        <i class="pe-7s-note2"></i>
                        <p>Data Review</p>
                    </a>
                </li>
				 <li>
                    <a href="table.html">
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
                            <a href="#">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
		<?php echo $this->session->flashdata('message');?>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Detail Usulan</h4>
                            </div>
                            <div class="content">
                               	<form action="<?php echo base_url(). 'data/update'; ?>" method="post">
								<?php foreach($gbr as $u){ 
								$id=$u->id;
								$nama=$u->nama;
								$tgl=$u->tgl;
								$alamat=$u->alamat;
								$keterangan=$u->keterangan;
								$path=$u->path;
								$status=$u->status;
								
								
								}?>
								
							
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Username</label>
												<input type="hidden" name="id" value="<?php echo $id ?>">
                                                <input type="text" value="<?php echo $nama ?>" class="form-control" disabled placeholder="Company" value="Creative Code Inc.">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Tanggal Post</label>
                                                <input type="text" class="form-control" disabled placeholder="Username"  value="<?php echo $tgl ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Status</label>
                                                <input type="text" class="form-control" value="<?php echo $status ?>">
                                            </div>
                                        </div>
                                    </div>

                                  

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <input type="text" value="<?php echo $alamat ?>" class="form-control" disabled placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
                                            </div>
                                        </div>
                                    </div>

                                   
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Keterangan</label>
                                                <textarea rows="5" class="form-control" value="<?php echo $keterangan ?>" disabled placeholder="Here can be your description" value="<?php echo $keterangan ?>" ><?php echo $keterangan ?> </textarea>
                                            </div>
                                        </div>
                                    </div>

									<div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Detail Image</label>
												<div>
												<?php


$data = exif_read_data($path);
foreach($data as $key=>$val) {
    if(is_array($val)) {
        foreach($val as $k=>$v) {
            echo $key."[$k]: $v<br />\n";
        }
    } else
        echo "$key: ".@substr($val,0,40)."<br />\n";
}
 
?></div>

                                            </div>
                                        </div>
                                    </div>
                             
									<a href="<?php echo base_url(); ?>data" class="btn btn-danger btn-fill pull-left"> Kembali</a>
									
                                    <button type="submit" class="btn btn-info btn-fill pull-right">Pilih</button>
								                                  <a href="<?php echo base_url(); ?>data/updatebelum/<?php echo $id; ?>" class="btn btn-success"> Detail</a></td>
                                    <div class="clearfix"></div>
                               
                            </div>
                        </div>
						</form>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                              
                            </div>
                            <div class="content">
                                <div class="author">
								<p> Gambar Kondisi Jalan </p>
                                     <a href="#">
                                <img src="<?=$path?>" width="300" height="400" alt="..."/>

                                      
                            </div>
                         
                           
                        </div>
                    </div>

                </div>
            </div>
        </div>
</div>

        

    </div>
</div>


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

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Halo, <?php echo $this->session->userdata("USERNAME_ADMIN"); ?>"

            },{
                type: 'info',
                timer: 4000
            });

    	});
</html>
