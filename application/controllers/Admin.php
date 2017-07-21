<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Ruangan_model');
		$this->load->model('Divisi_model');
		$this->load->model('Admin_model');
		
	}

	public function index()
	{
		$this->load->view('adminview');
	}

	public function insertdivisi(){

	}

	public function insertruangan(){

	}
} 