<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_mahasiswa');
        if($this->session->userdata('role') != "admin"){
            echo '<script>
                    alert("Anda tidak memiliki akses");
                    window.location.href = "'.base_url('login').'";
                </script>';
        }
    }

	public function index()
	{
        $data['dataMahasiswa'] = $this->M_mahasiswa->getMahasiswa();
        $data['dataJoin'] = $this->M_mahasiswa->getJoinProdi();
		$this->load->view('mahasiswa/view_mahasiswa',$data);
	}
    
    function detail($id){
        $data['detailMahasiswa'] = $this->M_mahasiswa->getMahasiswaDetail($id);
        $this->load->view('mahasiswa/detail_mahasiswa',$data);
    }

    function create(){
        $this->load->view('mahasiswa/form_create_mahasiswa');
    }

    function save(){
        $data = [
            'nim' => $this->input->post('nim'),
            'nama' => $this->input->post('nama'),
            'tmp_lahir' => $this->input->post('tmp_lahir'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'gender' => $this->input->post('gender'),
            'ipk' => $this->input->post('ipk'),
            'prodi_kode' => $this->input->post('prodi_kode')
        ];
        $this->M_mahasiswa->insert($data);
        redirect('mahasiswa','refresh');
    }

    function update($id){
        $data['detailMahasiswa'] = $this->M_mahasiswa->getMahasiswaDetail($id);
        $data = [
            'nim' => $this->input->post('nim'),
            'nama' => $this->input->post('nama'),
            'tmp_lahir' => $this->input->post('tmp_lahir'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'gender' => $this->input->post('gender'),
            'ipk' => $this->input->post('ipk'),
            'prodi_kode' => $this->input->post('prodi_kode')
        ];
        $this->M_mahasiswa->update($data,$nim);
        redirect('mahasiswa','refresh');
    }

    function delete($id){
        $this->M_mahasiswa->delete($id);
        redirect('mahasiswa','refresh');
    }

    
}
// $this->load->model('mahasiswa_model','mhs1'); //require model mahasiswa_model
// $this->mhs1->id=1;
// $this->mhs1->nim='010001';
// $this->mhs1->nama='Faiz Fikri';
// $this->mhs1->gender='L';
// $this->mhs1->ipk=3.85;
// $this->mh1->predikat();

// $this->load->model('mahasiswa_model','mhs2');
// $this->mhs2->id=2;
// $this->mhs2->nim='020001';
// $this->mhs2->nama='Pandan Wangi';
// $this->mhs2->gender='P';
// $this->mhs2->ipk=3.31;
// $this->mh2->predikat();


// $list_mhs = [$this->mhs1, $this->mhs2];
// $data['list_mhs']=$list_mhs;