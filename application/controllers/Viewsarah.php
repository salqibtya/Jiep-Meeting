<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Viewsarah extends CI_Controller {
	public function __construct()
	{
		parent::__construct();	
		$this->load->model('Ruangan_model');
		$this->load->model('Divisi_model');
		$this->load->model('Admin_model');
		$this->load->model('Meeting_model');	
	}

	public function index()
	{
		if($_SESSION['status']=="admin"){
			$data['title'] = 'Nyoba anuan';
			$data['divisis'] = $this->Divisi_model->get_all_divisi();
			$this->load->view('templates/header',$data);
			$this->load->view('try/ruangdivisiview', $data);
			$this->load->view('templates/footer');
			
		}else{
			redirect('/Home');
		}
		

	public function index(){
		$data['title'] = "Edit Divisi";
		// $data = array('modals' => 'true','modals' => set_value('alert','false'),);
		$this->load->view('templates/header',$data);
		$this->load->view('coba'); //isi sesuai keinginan
		$this->load->view('templates/footer');

	}

	function get_divisi()
    {
	    $id_divisi = $this->input->post('id_divisi');
	    $data['divisis'] = $this->Divisi_model->getonedivisi($id_divisi);
        $this->load->view('try/data2',$data);
    }
}
