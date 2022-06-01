<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mahasiswa extends CI_Model {

	public $id;
    public $nama;
    public $nim;
    public $gender;
    public $tmp_lahir;
    public $tgl_lahir;
    public $ipk;

    public function predikat(){
        $predikat = ($this->ipk >= 3.75)?"Cumlaude" : "Baik";
        return $predikat;
    }

    function getMahasiswa(){
        $query = $this->db->get('mahasiswa'); // select * from mahasiswa
        return $query->result();
    }

    function getMahasiswaDetail($nim){
        $query = $this->db->get_where('mahasiswa', ['nim' => $nim]); // select * from mahasiswa where nim = $nim
        return $query->row();
    }

    function getJoinProdi(){
                 $this->db->join('prodi', 'prodi.kode = mahasiswa.prodi_kode');
        $query = $this->db->select('*,prodi.nama as nama_prodi, mahasiswa.nama as nama_mahasiswa')->get('mahasiswa'); 
        return $query->result();
    }

    function insert($data){
        $this->db->insert('mahasiswa', $data);
    }

    function update($data, $nim){
        $this->db->where('nim', $nim);
        $this->db->update('mahasiswa', $data);
    }

    function delete($nim){
        $this->db->where('nim', $nim);
        $this->db->delete('mahasiswa');
    }

}
