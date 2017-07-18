<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Monitor extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Meetings_model');
	}

	public function index()
	{
		$data['title'] = 'Informasi Meeting';
		$data['meetings'] = $this->Meetings_model->get_all(); 

		$this->load->view('monitor/index', $data);
	}
}