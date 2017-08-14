<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Monitor extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Meeting_model');
	}

	public function index()
	{
		$data['title'] = 'Informasi Meeting';
		$data['meetings'] = $this->Meeting_model->get_all_monitor(); 

		$this->load->view('monitor/monitor', $data);
	}
}