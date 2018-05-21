<?php 

class m_review extends CI_Model{
	function tampil_data(){
		$this->db->order_by("ID_REVIEW","desc"); 
		return $this->db->get('review');
		
	}
}

?>
