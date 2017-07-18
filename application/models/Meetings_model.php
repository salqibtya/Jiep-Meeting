<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Meetings_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function get_all()
	{
		$this->db->join('divisions', 'id_divisions=pengguna_meetings');
		$this->db->order_by('tanggal_meetings', 'asc');
		$this->db->order_by('jam_meetings', 'asc');
		$this->db->join('locations', 'id_locations=lokasi_meetings');
		$this->db->where('tanggal_meetings >= CURDATE()');
		return $this->db->get('meetings')->result_array();
	}

	function get_by_id($id_meetings)
	{
		$this->db->join('divisions', 'id_divisions=pengguna_meetings');
		$this->db->join('locations', 'id_locations=lokasi_meetings');
		return $this->db->get_where('meetings', array('id_meetings'=>$id_meetings))->row_array();
	}
}