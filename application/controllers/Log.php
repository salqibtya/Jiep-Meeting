<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Divisi_model');
		$this->load->model('Admin_model');
	}
	public function in(){
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			//admin_login
			
		
	}

}