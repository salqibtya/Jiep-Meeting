<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
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
		$data['divisis'] = $this->Divisi_model->get_all_divisi();
		$data['ruangans'] = $this->Ruangan_model->get_all_ruangan();

		if($_SESSION['status']=="admin"){
			$data['title'] = 'Admin';
			$data['ruangans'] = $this->Ruangan_model->get_all_ruangan();
			$data['divisis'] = $this->Divisi_model->get_all_divisi();
			$this->load->view('templates/header',$data);
			$this->load->view('admin/ruangdivisiview', $data);
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
		$this->load->view('admin/editruanganview',$data); 
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
		$this->load->view('admin/editdivisiview', $data);
		//$this->load->view('templates/footer');

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

	public function get_meeting_date(){
		$tanggal_mulai = $this->input->post('start');
		$tanggal_selesai = $this->input->post('end');
		$data['waktu'] = $this->Meeting_model->calculate_time($tanggal_mulai,$tanggal_selesai);
		$data['jumlah'] =$this->Meeting_model->calculate_jumlah_meeting($tanggal_mulai,$tanggal_selesai);
		$data['meetings'] = $this->Meeting_model->get_all_past($tanggal_mulai,$tanggal_selesai);
		$data['divisi'] = $this->Divisi_model->get_all_divisi();
		$data['ruangan'] = $this->Ruangan_model->get_all_ruangan();
		$data['much_divisi'] = $this->hitung_meeting_divisi($tanggal_mulai,$tanggal_selesai);
		$data['much_ruangan'] = $this->hitung_meeting_ruangan($tanggal_mulai,$tanggal_selesai);
		$this->load->view('admin/dashboard',$data);	
	}

	public function hitung_meeting_divisi($start,$end){
		$datanya = array();
		$divisi  = $this->Divisi_model->get_all_divisi();
		foreach ($divisi as $key => $value) {
			$counter = $this->Meeting_model->get_division_count($value['id_divisi'],$start,$end);
			array_push($datanya,$counter);
		}
		return $datanya;
	}

	public function hitung_meeting_ruangan($start,$end){
		$datanya = array();
		$ruangan  = $this->Ruangan_model->get_all_ruangan();
		foreach ($ruangan as $key => $value) {
			$counter = $this->Meeting_model->get_room_count($value['id_ruangan'],$start,$end);
			array_push($datanya,$counter);
		}
		return $datanya;
	}
}
