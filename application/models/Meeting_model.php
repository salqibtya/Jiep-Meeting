<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class Meeting_model extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function get_all()
	{
		$this->db->order_by('tanggal', 'asc');
		$this->db->order_by('waktu_mulai', 'asc');
		$this->db->join('ruangan', 'id_ruangan = ruangan_meeting');
		$this->db->join('divisi','id_divisi = divisi_meeting');
		$this->db->where('tanggal >= CURDATE()');
		return $this->db->get('meeting')->result_array();
	}
	
	public function get_one_divisi(){
		$id_divisi = $this->session->userdata('id_user');
		$this->db->order_by('tanggal', 'asc');
		$this->db->order_by('waktu_mulai', 'asc');
		$this->db->join('ruangan', 'id_ruangan = ruangan_meeting');
		$this->db->join('divisi','id_divisi = divisi_meeting');
		$array=array('tanggal >= CURDATE()','id_divisi'=>$id_divisi);
		$this->db->where($array);
		return $this->db->get('meeting')->result_array();
	}

	public function getonemeeting($id_meeting){	
		$this->db->where('id_meeting',$id_meeting);
		return $this->db->get('meeting')->result_array();
	}

	function cek_meeting($tanggal,$id_ruangan){
		$array=array('tanggal'=>$tanggal,'ruangan_meeting'=>$id_ruangan);
		$this->db->where($array);
		return $this->db->get('meeting')->result_array();
	}

	function insert($data){
		$this->db->insert('meeting',$data);
		return ($this->db->affected_rows() != 1) ? false : true;
	}
	function search(){
		$last = $this->db->order_by('id_meeting','desc')
		->limit(1)
		->get('meeting')
		->row_array();
		return $last;
	}

	function updatemeeting($id_meeting, $data) {
        $this->db->set($data);
        $this->db->where('id_meeting',$id_meeting);
        $this->db->update('meeting');
        return ($this->db->affected_rows() != 1) ? false : true;
    }
}
