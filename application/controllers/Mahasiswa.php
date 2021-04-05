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

	function edit($id){
	$where = array('id' => $id);
	$data['mahasiswatabel'] = $this->m_data->edit_data($where,'mahasiswatabel')->result();
	$this->load->view('v_ubahdata',$data);
}

function update(){
	$id = $this->input->post('id');
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

	$where = array(
		'id' => $id
	);

	$this->m_data->update_data($where,$data,'mahasiswatabel');
	redirect('Mahasiswa/index');
}

function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'mahasiswatabel');
		redirect('Mahasiswa/index');
	}
}
