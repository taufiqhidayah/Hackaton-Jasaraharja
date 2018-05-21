<?php 

class Review extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_review');
                $this->load->helper('url');
	}

	function index(){
		$data['review'] = $this->m_review->tampil_data()->result();
		$this->load->view('v_review',$data);
	}

	
	
	
	
}
?>