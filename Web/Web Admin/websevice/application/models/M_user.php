<?php 

class m_user extends CI_Model{
	function tampil_data(){
		$this->db->order_by("ID_USER","desc"); 
		return $this->db->get('user');
		
	}
}