<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('model_login');
    }
    public function index(){
        $session = $this->session->userdata('login'); 
        if($session != 'login'){
            $this->load->view('view_login');
        }else{
            redirect('admin');
        }
    }
    public function cek_login() {
        $username = $this->security->xss_clean($this->input->post("username"));
        $password = $this->security->xss_clean($this->input->post("password"));
        $cek = $this->model_login->cek_user($username,$password);
        if(count($cek) == 1){
            $this->session->set_userdata(array(
                'login'         => "login",
                'USERNAME_ADMIN'      => $cek[0]['USERNAME_ADMIN'],
            ));
            $this->session->set_flashdata('success', 'Login Berhasil !');
        redirect(base_url('admin'));
        }else{
              $this->session->set_flashdata('result_login', '<br>Username atau Password yang anda masukkan salah.');
        redirect(base_url('login'));
        }
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('login','refresh');
    }
}