<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Meeting_model');
	}

	public function index()
	{
		$data['title'] = 'Home';
		$data['meetings'] = $this->Meeting_model->get_all(); 
		$this->load->view('testview',$data);
		
		//$this->load->view('templates/header',$data);
		//$this->load->view('home_page', $data);
		//$this->load->view('templates/footer');
	}  
}