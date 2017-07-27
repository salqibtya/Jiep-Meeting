<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class Anggotadivisi_model extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function get_all(){
		$this->db->join('divisi','id_divisi = divisi_anggota');
		return $this->db->get('anggota_divisi')->result_array();
	}

	public function get_all_anggota(){
		$id = $this->session->userdata('id_user');
		$this->db->where('divisi_anggota',$id);
		return $this->db->get('anggota_divisi')->result_array();
	}

	public function insertanggota($data){
		$this->db->insert('anggota_divisi',$data);
		return ($this->db->affected_rows() != 1) ? false : true;
	}

	public function getoneanggota($id_anggota){	
		$this->db->where('id_anggota',$id_anggota);
		return $this->db->get('anggota_divisi')->result_array();
	}
	public function updateanggota($id_anggota, $data) {
        $this->db->set($data);
        $this->db->where('id_anggota',$id_anggota);
        $this->db->update('anggota_divisi');
        return ($this->db->affected_rows() != 1) ? false : true;
    }

}
