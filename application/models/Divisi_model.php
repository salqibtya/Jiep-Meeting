<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class Divisi_model extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function get_by_login2($username,$password){
		$data['username'] = $username;
		$data['password'] = $password;
		$this->load->view('test2view',$data);
		
	}

	public function get_by_login($username,$password){
		$this->db->select('*');
		$this->db->where('username_divisi',$username);
		$this->db->where('password_divisi',$password);
		$query = $this->db->get('divisi');
		if($query->num_rows()==1){
			return $query->result();
		}else{
			return FALSE;
		}
	}
}
