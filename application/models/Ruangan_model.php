<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class Ruangan_model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function get_all_ruangan(){
		return $this->db->get('ruangan')->result_array();
	}

}
