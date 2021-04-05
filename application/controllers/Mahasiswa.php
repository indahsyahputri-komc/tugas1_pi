<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mahasiswa extends CI_Controller{
 
	// function __construct(){
	// 	parent::__construct();		
	// 	$this->load->model('m_data');
 //                $this->load->helper('url');
	// }
 
	function index(){
		$data['mahasiswatabel'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_tampilan',$data);
	}
}
