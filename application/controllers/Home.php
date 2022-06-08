<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_mahasiswa');
	}

	public function index()
	{
		$data['dataJoin'] 		= $this->M_mahasiswa->getJoinProdi();
		$data['countMahasiswa'] = $this->M_mahasiswa->countMahasiswa();
		$data['countDosen'] 	= $this->M_mahasiswa->countDosen();
		$data['countProdi'] 	= $this->M_mahasiswa->countProdi();

		$this->load->view('landing/home',$data);
	}
}