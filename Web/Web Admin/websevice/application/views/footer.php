<footer class="footer">
            <div class="container-fluid">
                
              
            </div>
        </footer>

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
	</script>
