<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Praktikum8 extends CI_Controller {

	public function index()
	{
        $nim = $this->input->post('nim');
        $nama = $this->input->post('nama');
        $jk = $this->input->post('jk');
        $tgl = $this->input->post('tgl');
        $tmp = $this->input->post('tmp');
        $studi = $this->input->post('studi');
        $ipk = $this->input->post('ipk');
        $data['list_mahasiswa'][] = [
            'nim' => $nim,
            'nama' => $nama,
            'jk' => $jk,
            'tgl' => $tgl,
            'tmp' => $tmp,
            'studi' => $studi,
            'ipk' => $ipk
        ];
		$this->load->view('page/view_praktikum8', $data);
	}

}