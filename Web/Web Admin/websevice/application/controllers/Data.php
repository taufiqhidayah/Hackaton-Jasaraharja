<?php 

class data extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('model_data');
                $this->load->helper('url');
	}

	function index(){
		$data['gbr'] = $this->model_data->tampil_data()->result();
		$this->load->view('v_data',$data);
	}
	function status(){
		$data['status'] = $this->model_data->status()->result();
		$this->load->view('v_data',$data);
	}
	
function edit($id){

		$where = array('id' => $id);
		$data['gbr'] = $this->model_data->edit_data($where,'gbr')->result();
		$this->load->view('v_detail',$data);
	}
	function select($id){

		$where = array('id' => $id);
		$data['gbr'] = $this->model_data->edit_data($where,'gbr')->result();
		$this->load->view('view_detail',$data);
	}
	function belumbaca(){
$admin="belum";
		$where = array('web' => $admin);
		$data['gbr'] = $this->model_data->edit_data($where,'gbr')->result();
		$this->load->view('v_belum',$data);
	}

function update(){
	$id = $this->input->post('id');
	
$status="Pilih";

	$data = array(
		'status' => $status
	
	);

	$where = array(
		'id' => $id
	);

	$this->model_data->update_data($where,$data,'gbr');
	 
	redirect('data/index');
}
function updatebelum(){
		$where = array('id' => $id);
		$data['gbr'] = $this->model_data->edit_data($where,'gbr')->result();
		$this->load->view('v_data',$data);
		$web="maaf belum bisa diproses";

	$data = array(
		'web' => $web
	
	);

	$where = array(
		'id' => $id
	);

	$this->model_data->update_data($where,$data,'gbr');


}
function editweb($id){

		$where = array('id' => $id);
		$data['gbr'] = $this->model_data->edit_data($where,'gbr')->result();
		$this->load->view('v_detail',$data);
		$web="dibaca";

	$data = array(
		'web' => $web
	
	);

	$where = array(
		'id' => $id
	);

	$this->model_data->update_data($where,$data,'gbr');

	}

}
