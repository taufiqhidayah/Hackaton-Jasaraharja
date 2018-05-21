<?php 

class model_data extends CI_Model{
	function tampil_data(){
		$this->db->order_by("id","desc"); 
		return $this->db->get('gbr');
		
	}
		function status(){
		$this->db->order_by("id","desc"); 
		return $this->db->get('status');
		
	}
	   
	function edit_data($where,$table){		
	return $this->db->get_where($table,$where);
}
	public function get_by_id($id)
	{
		$this->db->from($this->table);
		$this->db->where('id',$id);
		$query = $this->db->get();

		return $query->row();
	}	
	function uptgl_data($where,$data,$table){
		$this->db->where($where);
		$this->db->uptgl($table,$data);
	}
function statistik_pengunjung()
 {
  
  $sql= $this->db->query("
  
  select
  ifnull((SELECT count(path) FROM (gbr)WHERE((Month(tgl)=1)AND (YEAR(tgl)=2017))),0) AS `Januari`,
  ifnull((SELECT count(path) FROM (gbr)WHERE((Month(tgl)=2)AND (YEAR(tgl)=2017))),0) AS `Februari`,
  ifnull((SELECT count(path) FROM (gbr)WHERE((Month(tgl)=3)AND (YEAR(tgl)=2017))),0) AS `Maret`,
  ifnull((SELECT count(path) FROM (gbr)WHERE((Month(tgl)=4)AND (YEAR(tgl)=2017))),0) AS `April`,
  ifnull((SELECT count(path) FROM (gbr)WHERE((Month(tgl)=5)AND (YEAR(tgl)=2017))),0) AS `Mei`,
  ifnull((SELECT count(path) FROM (gbr)WHERE((Month(tgl)=6)AND (YEAR(tgl)=2017))),0) AS `Juni`,
  ifnull((SELECT count(path) FROM (gbr)WHERE((Month(tgl)=7)AND (YEAR(tgl)=2017))),0) AS `Juli`,
  ifnull((SELECT count(path) FROM (gbr)WHERE((Month(tgl)=8)AND (YEAR(tgl)=2017))),0) AS `Agustus`,
  ifnull((SELECT count(path) FROM (gbr)WHERE((Month(tgl)=9)AND (YEAR(tgl)=2017))),0) AS `September`,
  ifnull((SELECT count(path) FROM (gbr)WHERE((Month(tgl)=10)AND (YEAR(tgl)=2017))),0) AS `Oktober`,
  ifnull((SELECT count(path) FROM (gbr)WHERE((Month(tgl)=11)AND (YEAR(tgl)=2017))),0) AS `November`,
  ifnull((SELECT count(path) FROM (gbr)WHERE((Month(tgl)=12)AND (YEAR(tgl)=2017))),0) AS `Desember`
 from gbr GROUP BY YEAR(path) 
  
  ");
  
  return $sql;
  
 }
 public function get()
    {
        $this->db->select('*');
        $this->db->like('tgl','2017');
        $this->db->order_by('tgl','asc');
        return $this->db->get('gbr');
    } 
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	
}