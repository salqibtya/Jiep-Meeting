<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class Meeting_model extends CI_Model{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	function get_all()
	{
		$this->db->order_by('tanggal', 'asc');
		$this->db->order_by('waktu_mulai', 'asc');
		$this->db->join('ruangan', 'id_ruangan = ruangan_meeting');
		$this->db->join('divisi','id_divisi = divisi_meeting');
		$this->db->where('tanggal >= CURDATE()');
		return $this->db->get('meeting')->result_array();
	}

	function get_one_divisi(){
		$id_divisi = $this->session->userdata('id_user');
		$this->db->order_by('tanggal', 'asc');
		$this->db->order_by('waktu_mulai', 'asc');
		$this->db->join('ruangan', 'id_ruangan = ruangan_meeting');
		$this->db->join('divisi','id_divisi = divisi_meeting');
		$array=array('tanggal >= CURDATE()','id_divisi'=>$id_divisi);
		$this->db->where($array);
		return $this->db->get('meeting')->result_array();
	}
}
