<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Divisi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Meeting_model');
		$this->load->model('Divisi_model');
		
	}

	public function index(){
		$data['title'] = 'My Meeting';

		$this->load->view('templates/header',$data);
		$this->load->view('divisiview',$data);
		$this->load->view('templates/footer');
	}
	public function meeting()
	{
		$data['title'] = 'Divisi'; 
		$data['meetings'] = $this->Meeting_model->get_all(); 
	
		$this->load->view('templates/header',$data);
		$this->load->view('meetingdivisiview', $data);
		$this->load->view('templates/footer');
	}


} 