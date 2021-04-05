<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mahasiswa extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
                $this->load->helper('url');
	}
 
	function index(){
		$data['mahasiswatabel'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_tampilan',$data);
	}

	function tambah(){
		$this->load->view('v_tambahdata');
	}

	function tambah_aksi(){
		$nama = $this->input->post('nama');
		$jk = $this->input->post('jk');
		$agama = $this->input->post('agama');
		$alamat = $this->input->post('alamat');
		$tlp = $this->input->post('tlp');
 
		$data = array(
			'nama' => $nama,
			'jk' => $jk,
			'agama' => $agama,
			'alamat' => $alamat,
			'tlp' => $tlp
			);
		$this->m_data->input_data($data,'mahasiswatabel');
		redirect('Mahasiswa/index');
	}
}
