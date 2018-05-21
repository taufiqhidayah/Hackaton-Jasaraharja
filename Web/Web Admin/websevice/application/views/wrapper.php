  <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

<div class="wrapper">
    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                  <?php echo $this->session->userdata("USERNAME_ADMIN"); ?>
                </a>
            </div>

            <ul class="nav">
                <li class="active">
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
                <li>
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
	</div>