<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Viewsarah extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Divisi_model');
		$this->load->model('Admin_model');
	}
	public function index(){
		$data['title'] = "Home";
		//$this->load->view('templates/header',$data);
		$this->load->view('logview'); //isi sesuai keinginan
		//$this->load->view('templates/footer');
	}

}