<?php
  class Mod_Login extends CI_Model {

      function cek($username, $password) {
        $this->db->where("username", $username);
        $this->db->where("password", $password);
        return $this->db->get("adminn");
      }

      function getLoginData($usr, $psw) {
        $u = $usr;
        $p = md5($psw);
        $q_cek_login = $this->db->get_where('adminn', array('username' => $u, 'password' => $p));
        if (count($q_cek_login->result()) > 0) {
          foreach ($q_cek_login->result() as $qck) {
            foreach ($q_cek_login->result() as $qad) {
              $sess_data['logged_in'] = TRUE;
              $sess_data['id_admin'] = $qad->id_pengguna;
              $sess_data['username'] = $qad->username;
              $sess_data['password'] = $qad->password;
              
              $this->session->set_userdata($sess_data);
            }
          redirect('admin');
          }
        } else {
            $this->session->set_flashdata('result_login', '<br>Username atau Password yang anda masukkan salah.');
            header('location:' . base_url() . 'login');
          }
      }
  }
?>
