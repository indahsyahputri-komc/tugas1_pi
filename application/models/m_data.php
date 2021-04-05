<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('mahasiswatabel');
	}
}
