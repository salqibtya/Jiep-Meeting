<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Locations_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function get_all()
	{
		return $this->db->get('locations')->result_array();
	}

	function get_by_id($id_locations)
	{
		return $this->db->get_where('locations', array('id_locations'=>$id_locations))->row_array();
	}
}