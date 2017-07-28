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
		if($_SESSION['status']!='admin'){
			redirect('');
		}
		$temp = $this->input->post('password');
		$password = $this->bcrypt->hash_password($temp);
		$data = array(
			'nama_divisi'=>$this->input->post('nama_divisi'),
			'username_divisi'=>$this->input->post('username_divisi'),
			'password_divisi'=>$password
		);
		$result  = $this->Divisi_model->insert($data);

		if ($result){
			$notification = '<div class="alert alert-success alert-dismissible fade in" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
			Divisi telah berhasil ditambah.
			</div>';
			$this->session->set_flashdata('notification', $notification);
		}else{
			$notification = '<div class="alert alert-danger alert-dismissible fade in" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
			</button>
			Penambahan divisi gagal.
			</div>';
			$this->session->set_flashdata('notification', $notification);
		}
		redirect('/Admin');		
	}

	public function insertruangan(){
		if($_SESSION['status']!='admin'){
			redirect('');
		}
		$data = array(
			'nama_ruangan'=>$this->input->post('nama_ruangan'),
			'kapasitas_ruangan'=>$this->input->post('kapasitas_ruangan')
		);
		$result  = $this->Ruangan_model->insert($data);

		if ($result){
			$notification = '<div class="alert alert-success alert-dismissible fade in" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
			Ruangan telah berhasil ditambah.
			</div>';
			$this->session->set_flashdata('notification', $notification);
		}else{
			$notification = '<div class="alert alert-danger alert-dismissible fade in" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
			</button>
			Penambahan ruangan gagal.
			</div>';
			$this->session->set_flashdata('notification', $notification);
		}
		redirect('/Admin');
	}

	public function deleteruangan($id_ruangan){
		if($_SESSION['status']!='admin'){
			redirect('');
		}
		$result = $this->Ruangan_model->delete($id_ruangan);
		// notification
		if ($result) {
			$notification = '<div class="alert alert-success alert-dismissible fade in" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
			Ruangan telah berhasil dihapus.
			</div>';

			$this->session->set_flashdata('notification', $notification);
		} else {
			$notification = '<div class="alert alert-danger alert-dismissible fade in" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
			</button>
			Penghapusan ruangan gagal.
			</div>';

			$this->session->set_flashdata('notification', $notification);
		}
		redirect('Admin');
	}

	public function deletedivisi($id_divisi){
		if($_SESSION['status']!='admin'){
			redirect('');
		}
		$result = $this->Divisi_model->delete($id_divisi 	);
		// notification
		if ($result) {
			$notification = '<div class="alert alert-success alert-dismissible fade in" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
			Ruangan telah berhasil dihapus.
			</div>';

			$this->session->set_flashdata('notification', $notification);
		} else {
			$notification = '<div class="alert alert-danger alert-dismissible fade in" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
			</button>
			Penghapusan ruangan gagal.
			</div>';

			$this->session->set_flashdata('notification', $notification);
		}
		redirect('Admin');
	}

	public function editruangan($id_ruangan){
		if($_SESSION['status']!='admin'){
			redirect('');
		}
		$data['title'] ="Edit Ruangan";
		$data['ruangans'] = $this->Ruangan_model->getoneruangan($id_ruangan);
		$this->load->view('templates/header',$data);
		$this->load->view('editruanganview',$data); //isi sesuai keinginan
		$this->load->view('templates/footer');
	}

	public function do_edit($id_ruangan){
		if($_SESSION['status']!='admin'){
			redirect('');
		}
		$id_ruangan  = $this->input->post('id');
		$data = array(
			'nama_ruangan'=>$this->input->post('nama_ruangan'),
			'kapasitas_ruangan'=>$this->input->post('kapasitas_ruangan')
		);
		$result = $this->Ruangan_model->update($id_ruangan,$data);
		if ($result) {
			$notification = '<div class="alert alert-success alert-dismissible fade in" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
			Ruangan telah berhasil diubah.
			</div>';

			$this->session->set_flashdata('notification', $notification);
		} else {
			$notification = '<div class="alert alert-danger alert-dismissible fade in" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
			</button>
			Pengubahan ruangan gagal.
			</div>';

			$this->session->set_flashdata('notification', $notification);
		}
		redirect('Admin');
	}

	public function editdivisi($id_divisi){
		if($_SESSION['status']!='admin'){
			redirect('');
		}
		$data['title'] = "Edit Divisi";
		$data['divisis'] = $this->Divisi_model->getonedivisi($id_divisi);
		$this->load->view('templates/header', $data);
		$this->load->view('editdivisiview', $data);
		$this->load->view('templates/footer');

	}

	public function do_editdivisi($id_divisi){
		if($_SESSION['status']!='admin'){
			redirect('');
		}
		$id_divisi  = $this->input->post('id');
		$temp = $this->input->post('password_divisi');
		$password = $this->bcrypt->hash_password($temp);
		$data = array(
			'nama_divisi'=>$this->input->post('nama_divisi'),
			'username_divisi'=>$this->input->post('username_divisi'),
			'password_divisi'=>$password
		);
		$result = $this->Divisi_model->updatedivisi($id_divisi,$data);
		if ($result) {
			$notification = '<div class="alert alert-success alert-dismissible fade in" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
			Divisi telah berhasil diubah.
			</div>';

			$this->session->set_flashdata('notification', $notification);
		} else {
			$notification = '<div class="alert alert-danger alert-dismissible fade in" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
			</button>
			Pengubahan divisi gagal.
			</div>';

			$this->session->set_flashdata('notification', $notification);
		}
		
		redirect('Admin');

	}
} 