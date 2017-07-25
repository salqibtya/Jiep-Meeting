<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Divisi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Meeting_model');
		$this->load->model('Divisi_model');
		$this->load->model('Anggotadivisi_model');

		
	}

	public function index(){
		$data['title'] = 'My Meeting';
		$data['meetings'] = $this->Meeting_model->get_one_divisi();
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

	public function anggotadivisi(){
		$data['title'] = 'Anggota Divisi';
		$data['anggotas'] = $this->Anggotadivisi_model->get_all_anggota();

		$this->load->view('templates/header',$data);
		$this->load->view('anggotadivisiview', $data);
		$this->load->view('templates/footer');

	}

	public function tambahanggota(){
		$data = array(
			'nama'=>$this->input->post('nama_anggota'),
			'email'=>$this->input->post('email_anggota'),
			'divisi_anggota'=>$this->session->userdata('id_user')
		);
		$this->Anggotadivisi_model->insertanggota($data);
		redirect('Divisi/anggotadivisi');
	}
	
	public function tambahmeeting(){
		$data = array(
			'perihal' => $this->input->post('perihal'),
			'ruangan_meeting' => $this->input->post('ruangan_meeting'),
			'tanggal' => $this->input->post('tanggal'),
			'waktu_mulai' => $this->input->post('waktu_mulai'),
			'waktu_selesai' => $this->input->post('waktu_selesai'),
			'estimasi_peserta' => $this->input->post('estimasi_peserta'),
			'PIC' => $this->input->post('pic ')
			);
		$this->Meeting_model->insertmeeting();
		}
	}
	