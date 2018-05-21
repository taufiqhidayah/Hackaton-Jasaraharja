<?php 

class grafik extends CI_Controller{

	function __construct(){
		 parent::__construct();
  $this->load->model('m_data','',TRUE);
  $this->load->database();
  $this->load->helper('url');
	}

 public function index() {  
   
   foreach($this->m_data->statistik_pengunjung()->result_array() as $row)
   {
    $data['grafik'][]=(float)$row['Januari'];
    $data['grafik'][]=(float)$row['Februari'];
    $data['grafik'][]=(float)$row['Maret'];
    $data['grafik'][]=(float)$row['April'];
    $data['grafik'][]=(float)$row['Mei'];
    $data['grafik'][]=(float)$row['Juni'];
    $data['grafik'][]=(float)$row['Juli'];
    $data['grafik'][]=(float)$row['Agustus'];
    $data['grafik'][]=(float)$row['September'];
    $data['grafik'][]=(float)$row['Oktober'];
    $data['grafik'][]=(float)$row['November'];
    $data['grafik'][]=(float)$row['Desember'];
   }
    
   $this->load->view('data_view', $data); 
 
}
}