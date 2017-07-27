<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class Anggotameeting_model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function insert($data){
		$this->db->insert('anggota_meeting',$data);
		return ($this->db->affected_rows() != 1) ? false : true;
	}
}
