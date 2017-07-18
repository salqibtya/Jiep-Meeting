<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Locations extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Locations_model');
	}

	function index()
	{
		$data['title'] = 'Daftar ruangan';
		$data['locations'] = $this->Locations_model->get_all();

 		$this->load->view('templates/header', $data);
 		$this->load->view('daftar_locations', $data);
 		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		$data['title'] = 'Tambah ruangan';

		$this->load->view('templates/header', $data);
		$this->load->view('tambah_locations', $data);
		$this->load->view('templates/footer');
	}

	function do_tambah()
	{
		$this->load->model('Crud_model');
		$items = array('nama_locations' => $this->input->post('nama_locations'));

		// notification
		if ($this->Crud_model->insert('locations', $items)) {
			$notification = '<div class="alert alert-success alert-dismissible fade in" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
			Ruangan telah berhasil ditambah.
			</div>';

			$this->session->set_flashdata('notification', $notification);
		} else {
			$notification = '<div class="alert alert-danger alert-dismissible fade in" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
			</button>
			Penambahan data gagal. Silahkan hubungi administrator.
			</div>';

			$this->session->set_flashdata('notification', $notification);
		}
        // --notification

        redirect('locations/tambah');
	}

	function edit($id_locations)
	{
		$data['title'] = 'Edit ruangan';
		$data['locations'] = $this->Locations_model->get_by_id($id_locations);

		$this->load->view('templates/header', $data);
		$this->load->view('edit_locations', $data);
		$this->load->view('templates/footer');
	}

	function do_edit()
	{
		$id_locations 	= $this->input->post('id_locations');
		$items 			= array('nama_locations'=>$this->input->post('nama_locations'));

		$this->load->model('Crud_model');

		// notification
		if ($this->Crud_model->update('locations', array('id_locations'=>$id_locations), $items)) {
			$notification = '<div class="alert alert-success alert-dismissible fade in" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
			Ruangan telah berhasil diperbarui.
			</div>';

			$this->session->set_flashdata('notification', $notification);
		} else {
			$notification = '<div class="alert alert-danger alert-dismissible fade in" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
			</button>
			Pembaruan ruangan gagal. Silahkan hubungi administrator.
			</div>';

			$this->session->set_flashdata('notification', $notification);
		}
        // --notification

        redirect('locations');
	}

	function delete($id_locations)
	{	
		$this->load->model('Crud_model');

		// notification
		if ($this->Crud_model->delete('locations', array('id_locations'=>$id_locations))) {
			$notification = '<div class="alert alert-success alert-dismissible fade in" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
			Ruangan telah berhasil dihapus.
			</div>';

			$this->session->set_flashdata('notification', $notification);
		} else {
			$notification = '<div class="alert alert-danger alert-dismissible fade in" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
			</button>
			Penghapusan ruangan gagal. Silahkan hubungi administrator.
			</div>';

			$this->session->set_flashdata('notification', $notification);
		}
        // --notification

        redirect('locations');
	}
}