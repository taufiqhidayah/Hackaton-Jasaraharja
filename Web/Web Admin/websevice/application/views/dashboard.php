<!doctype html>
<html lang="en">
<head>
 #chart{
   z-index:-10;} 
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="<?php echo base_url('assetsadmin/img/favicon.ico')?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Dinas PUPR Kab. Jombang</title>

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
              Admin
            </div>

           <ul class="nav">
                <li class="active">
                    <a href="<?php echo base_url('admin'); ?>">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
              
                <li>
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
                        
 <li>
                            <a href="<?php echo base_url('data/belumbaca'); ?>">
                                    <i class="pe-7s-mail-open-file"></i>
                                   
                                    <span class="notification hidden-sm hidden-xs"><?php 
$this->db->like('web', 'belum');
$this->db->from('gbr');
echo $this->db->count_all_results();
?></span>
									
                              </a>
                           
                        </li>
                  </ul>

                    <ul class="nav navbar-nav navbar-right">
					
                       
                       
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
            <div class="container-fluid">
                <div class="row">
                   

                    <div class="col-md-12">
                        <div class="card">
                           
                            <div class="content">
                               <?php $this->load->view('data_view');?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row">
                  

                   
                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
               
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="<?php echo base_url('assetsadmin/js/jquery.3.2.1.min.js')?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assetsadmin/js/bootstrap.min.js" type="text/javascript')?>"></script>

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
	</script>

</html>
