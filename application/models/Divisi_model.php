<?php

defined('BASEPATH')OR exit('No direct script access allowed');

class Divisi_model extends CI_Model{
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function get_divisi_login($username,$password){
		$this->db->where('username_admin',$username);
		$result = $this->getDivisi($password);
		if(!empty($result)){
			return $result;
		}else{
			return false;
		}
	}

	public function getDivisi($password){
		$query = $this->db->get('divisi');
		if($query->num_rows()>0){
			$result = $query->row_array();
			if ($this->bcrypt->check_password($password,$result['password'])){
				return $result;
			}else{
				return array();
			}
		}else{
			return array();
		}
	}
}
