<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Meetings extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Locations_model');
		$this->load->model('Meetings_model');
		$this->load->model('Divisions_model');
	}

	public function tambah()
	{
		$data['title'] = 'New meeting'; 
		$data['ruangan'] = $this->Locations_model->get_all();
		$data['divisions'] = $this->Divisions_model->get_all(); 

		$this->load->view('templates/header', $data);
		$this->load->view('tambah_meetings', $data);
		$this->load->view('templates/footer');
	}  

	function do_tambah()
	{
		$this->load->model('Crud_model');
		
		$items = array(
			'perihal_meetings' => $this->input->post('perihal_meetings'),
			'lokasi_meetings' => $this->input->post('lokasi_meetings'),
			'tanggal_meetings' => $this->input->post('tanggal_meetings'),
			'jam_meetings' => $this->input->post('jam_meetings'),
			'jam_selesai_meetings' => $this->input->post('jam_selesai_meetings'),
			'pengguna_meetings' => $this->input->post('pengguna_meetings'),
			'jumlah_peserta_meetings' => $this->input->post('jumlah_peserta_meetings'),
			'pic_meetings' => $this->input->post('pic_meetings')
			);

		// notification
		if ($this->Crud_model->insert('meetings', $items)) {
			$notification = '<div class="alert alert-success alert-dismissible fade in" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
			Meeting telah berhasil ditambah.
			</div>';

			$this->session->set_flashdata('notification', $notification);
		} else {
			$notification = '<div class="alert alert-danger alert-dismissible fade in" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
			</button>
			Penambahan meeting gagal. Silahkan hubungi administrator.
			</div>';

			$this->session->set_flashdata('notification', $notification);
		}
        // --notification

        redirect('meetings/tambah');
	}

	function edit($id_meetings)
	{
		$data['title'] = 'Edit meeting';
		$data['meetings'] = $this->Meetings_model->get_by_id($id_meetings);
		$data['ruangan'] = $this->Locations_model->get_all(); 
		$data['divisions'] = $this->Divisions_model->get_all(); 

		$this->load->view('templates/header', $data);
		$this->load->view('edit_meetings', $data);
		$this->load->view('templates/footer');
	}

	function do_edit()
	{
		$id_meetings 	= $this->input->post('id_meetings');
		$items = array(
			'perihal_meetings' => $this->input->post('perihal_meetings'),
			'lokasi_meetings' => $this->input->post('lokasi_meetings'),
			'tanggal_meetings' => $this->input->post('tanggal_meetings'),
			'jam_meetings' => $this->input->post('jam_meetings'),
			'jam_selesai_meetings' => $this->input->post('jam_selesai_meetings'),
			'pengguna_meetings' => $this->input->post('pengguna_meetings'),
			'jumlah_peserta_meetings' => $this->input->post('jumlah_peserta_meetings'),
			'pic_meetings' => $this->input->post('pic_meetings')
			);

		$this->load->model('Crud_model');

		// notification
		if ($this->Crud_model->update('meetings', array('id_meetings'=>$id_meetings), $items)) {
			$notification = '<div class="alert alert-success alert-dismissible fade in" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
			Meeting telah berhasil diperbarui.
			</div>';

			$this->session->set_flashdata('notification', $notification);
		} else {
			$notification = '<div class="alert alert-danger alert-dismissible fade in" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
			</button>
			Tidak ada pembaruan.
			</div>';

			$this->session->set_flashdata('notification', $notification);
		}
        // --notification

        redirect(base_url());
	}

	function delete($id_meetings)
	{	
		$this->load->model('Crud_model');

		// notification
		if ($this->Crud_model->delete('meetings', array('id_meetings'=>$id_meetings))) {
			$notification = '<div class="alert alert-success alert-dismissible fade in" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
			Meeting telah berhasil dihapus.
			</div>';

			$this->session->set_flashdata('notification', $notification);
		} else {
			$notification = '<div class="alert alert-danger alert-dismissible fade in" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
			</button>
			Penghapusan meeting gagal. Silahkan hubungi administrator.
			</div>';

			$this->session->set_flashdata('notification', $notification);
		}
        // --notification

        redirect(base_url());
	}
}