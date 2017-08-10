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

	public function get_all_past($start,$end)
	{
		$this->db->order_by('tanggal', 'asc');
		$this->db->order_by('waktu_mulai', 'asc');
		$this->db->join('ruangan', 'id_ruangan = ruangan_meeting');
		$this->db->join('divisi','id_divisi = divisi_meeting');
		$this->db->where('tanggal >=',$start)->where('tanggal <=',$end);
		return $this->db->get('meeting')->result_array();
	}

	public function get_division_count($id_divisi,$start,$end)
	{
		$this->db->where('divisi_meeting',$id_divisi)->where('tanggal >=',$start)->where('tanggal <=',$end);
		return $this->db->get('meeting')->num_rows();
	}

	public function get_room_count($id_ruangan,$start,$end)
	{
		$this->db->where('ruangan_meeting',$id_ruangan)->where('tanggal >=',$start)->where('tanggal <=',$end);
		return $this->db->get('meeting')->num_rows();
	}
	
	
	public function get_one_divisi(){
		$id_divisi = $this->session->userdata('id_user');
		$this->db->order_by('tanggal', 'asc');
		$this->db->order_by('waktu_mulai', 'asc');
		$this->db->join('ruangan', 'id_ruangan = ruangan_meeting');
		$this->db->join('divisi','id_divisi = divisi_meeting');
		$this->db->where('tanggal >= CURDATE()')->where('id_divisi',$id_divisi);
		return $this->db->get('meeting')->result_array();
	}

	public function getonemeeting($id_meeting){	
		$this->db->where('id_meeting',$id_meeting);
		$this->db->join('ruangan', 'id_ruangan = ruangan_meeting');
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

  	function calculate_time($tanggal_start,$tanggal_end){
  		$hour = 0;
  		$hour_internal = 0;
  		$hour_eksternal = 0;
  		$this->db->where('tanggal >=',$tanggal_start)->where('tanggal <=',$tanggal_end);
  		$result = $this->db->get('meeting')->result_array();
  		foreach ($result as $key => $value) {
  			$waktu_mulai = strtotime($value['waktu_mulai']);
  			$waktu_selesai = strtotime($value['waktu_selesai']);
  			$interval = $waktu_selesai-$waktu_mulai;
  			if ($value['status']==0){
  				$hour_internal=$hour_internal+ $interval / 3600;
  			}else{
  				$hour_eksternal=$hour_eksternal+ $interval / 3600;
  			}
  			$hour = $hour + $interval / 3600;	
  		}
  		$hasil = array(
  			'hour'=>round($hour),
  			'hour_internal'=>round($hour_internal),
  			'hour_eksternal'=>round($hour_eksternal)
  		);
  		return $hasil;
  	}


  	function calculate_jumlah_meeting($start,$end){
  		$this->db->where('tanggal >=',$start)->where('tanggal <=',$end);
  		$result = $this->db->get('meeting')->result_array();
  		$all = 0;
  		$internal = 0;
  		$eksternal = 0;
  		foreach ($result as $key => $value) {
  			$all ++ ;
  			if ($value['status']==1){
  				$eksternal ++;
  			}else{
  				$internal ++;
  			}
  		}
  		$hasil = array(
  			'internal'=>$internal,
  			'eksternal'=>$eksternal,
  			'all'=>$all
  		);
  		return $hasil;

	}
}
