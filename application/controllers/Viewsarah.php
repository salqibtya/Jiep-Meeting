<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Viewsarah extends CI_Controller {
	public function __construct()
	{
		parent::__construct();	
		$this->load->database();
		$this->load->model('Ruangan_model');
		$this->load->model('Divisi_model');
		$this->load->model('Admin_model');
		$this->load->model('Meeting_model');

	}

	public function index()
	{
		/*if($_SESSION['status']=="admin"){*/
			$data['title'] = 'Nyoba anuan';
			$data['divisis'] = $this->Divisi_model->get_all_divisi();
			$data['meetings'] = $this->Meeting_model->get_all();
			$this->load->view('templates/header',$data);
			$this->load->view('cobalagi', $data);
			$this->load->view('templates/footer');
		}

		public function countRow(){
			$jumlah->where('meeting', $divisi_meeting);
			$jumlah->where('divisi', $id_divisi);
			if($divisi_meeting = $id_divisi){
				$jumlah->get();
				$Hasil = count($jumlah->all);}
			}
	/*	
		}else{
			redirect('/Home');
		}
<<<<<<< HEAD
		
=======
	}

>>>>>>> origin/master
	function get_divisi()
    {
	    $id_divisi = $this->input->post('id_divisi');
	    $data['divisis'] = $this->Divisi_model->getonedivisi($id_divisi);
        $this->load->view('try/data2',$data);
    } 
    */

}