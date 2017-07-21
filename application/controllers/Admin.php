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
		$data['divisis'] = $this->Divisi_model->get_all_divisi(); 
		$data['ruangans'] = $this->Ruangan_model->get_all_ruangan(); 

		if($_SESSION['status']=="admin"){
			$data['title'] = "Admin";
			$this->load->view('templates/header',$data);
			$this->load->view('adminview',$data);
			$this->load->view('templates/footer');
			
		}else{
			redirect('/Home');
		}
		
	}

	public function insertdivisi(){

	}

	public function insertruangan(){

	}
} 