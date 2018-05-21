<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class m_grafik extends CI_Model
{
 
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
     
    public function get()
    {
        $this->db->select('*');
        $this->db->like('tgl','2017-');
        $this->db->order_by('tgl','asc');
        return $this->db->get('gbr');
    }
}