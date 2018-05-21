<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_login extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    function cek_user($username,$password){
        $this->db->where('USERNAME_ADMIN',$username);
        $this->db->where('PASSWORD_ADMIN',$password);
        $query = $this->db->get('admin');
        return $query->result_array();
    }
}