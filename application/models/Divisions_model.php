<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Divisions_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function get_all()
	{
		$this->db->order_by('id_divisions', 'asc');
		return $this->db->get('divisions')->result_array();
	}
}