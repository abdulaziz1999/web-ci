<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {


    public function cek_login(){
        $u = $this->input->post('username');
        $p = $this->input->post('password');

        $cek = $this->db->get_where('user',['username'=>$u,'password'=>md5($p)]);
        if ($cek->num_rows() > 0) {
            return $cek->result();
        } else {
            return FALSE;
        } 
    }
}
