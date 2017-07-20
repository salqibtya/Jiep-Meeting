<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Divisi_model');
		$this->load->model('Admin_model');
	}
	public function index(){
		$this->load->view('templates/header');
		$this->load->view('testview'); //isi sesuai keinginan
		$this->load->view('templates/footer');
	}

}