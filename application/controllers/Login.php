<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_login','m_login');
    }

    public function index(){
		$this->load->view('v_login');
		}
	
	function cek_login(){
		$u = $this->input->post('username');
		$p = $this->input->post('password');

		$cek = $this->m_login->cek_login($u,$p);
		if ($cek){
			foreach ($cek as $row) {
				$this->session->set_userdata('id_user',$row->id);
				$this->session->set_userdata('username',$row->username);
				$this->session->set_userdata('role',$row->role);
			}
			if ($this->session->userdata('role') == "admin") {
				redirect('mahasiswa');
			}elseif ($this->session->userdata('role') == "mahasiswa") {
				redirect('c_mahasiswa');
			}
		} else{
			//untuk menendcode kata
			redirect('login');
		} 
			
	}
		
    function logout(){
        $this->session->sess_destroy();
        redirect('home');
    }
}
