<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Divisi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Meeting_model');
		$this->load->model('Divisi_model');
		$this->load->model('Anggotadivisi_model');
		$this->load->model('Ruangan_model');
		$this->load->model('Anggotameeting_model');

	}

	public function index(){
		if(!isset($_SESSION['id_user'])){
			redirect('');
		}
		$data['title'] = 'My Meeting';
		$data['meeting_divisi'] = $this->Meeting_model->get_one_divisi();
		$data['meetings'] = $this->Meeting_model->get_all();
		$data['anggotas'] = $this->Anggotadivisi_model->get_all_anggota();
		$this->load->view('templates/header',$data);
		$this->load->view('divisi/divisiview',$data);
		$this->load->view('templates/footer');
	}
	
	public function tambahanggota(){
		if(!isset($_SESSION['id_user'])){
			redirect('');
		}
		$this->form_validation->set_rules('nama_anggota','Nama',required);
		$this->form_validation->set_rules('email_anggota','email','required|valid_email');
		if ($this->form_validation->run()==FALSE){
			redirect('Divisi/anggotadivisi');
			$alert = '<div class="alert alert-danger alert-dismissible fade in" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
			</button>
			<span><strong>username diisi dengan username, dan email di isi dengan format email.
			</div>';
			$this->session->set_flashdata('alert', $alert);
		}
		$data = array(
			'nama'=>$this->input->post('nama_anggota'),
			'email'=>$this->input->post('email_anggota'),
			'divisi_anggota'=>$this->session->userdata('id_user')
			);
		$this->Anggotadivisi_model->insertanggota($data);
		redirect('Divisi');
	}

	public function editanggota($id_anggota){
		if(!isset($_SESSION['id_user'])){
			redirect('');
		}
		$data['title'] ="Edit Anggota";
		$data['anggotas'] = $this->Anggotadivisi_model->getoneanggota($id_anggota);
		$this->load->view('templates/header',$data);
		$this->load->view('divisi/editanggotaview',$data); //isi sesuai keinginan
		$this->load->view('templates/footer');
	}

	public function do_editanggota(){
		if(!isset($_SESSION['id_user'])){
			redirect('');
		}
		$id_anggota  = $this->input->post('id');
		$data = array(
			'nama'=>$this->input->post('nama_anggota'),
			'email'=>$this->input->post('email_anggota')
			);
		$result = $this->Anggotadivisi_model->updateanggota($id_anggota,$data);
		if ($result) {
			$notification = '<div class="alert alert-success alert-dismissible fade in" role="alert">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
			Data anggota telah berhasil diubah.
		</div>';

		$this->session->set_flashdata('notification', $notification);
	} else {
		$notification = '<div class="alert alert-danger alert-dismissible fade in" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
		</button>
		Pengubahan data anggota gagal.
	</div>';

	$this->session->set_flashdata('notification', $notification);
}
redirect('Divisi');
}

public function tambahmeeting(){
	if(!isset($_SESSION['id_user'])){
		redirect('');
	}
	$data['title'] = "Tambah Meeting";
	$data['ruangans'] = $this->Ruangan_model->get_all_ruangan();
	$data['anggotas'] = $this->Anggotadivisi_model->get_all();
	$this->load->view('templates/header',$data);
	$this->load->view('divisi/tambahmeetingview', $data);
	
}   

public function do_tambah(){	
	if(!isset($_SESSION['id_user'])){
		redirect('');
	}
	$perihal= $this->input->post('perihal');
	$ruangan_meeting = $this->input->post('ruangan');
	$tanggal = $this->input->post('tanggal');
	$waktu_mulai = $this->input->post('waktu_mulai');
	$waktu_selesai = $this->input->post('waktu_selesai');
	$estimasi_peserta = $this->input->post('estimasi_peserta');
	$pic = $this->input->post('pic');
	$pengguna = $this->input->post('pengguna_meetings');
	$status = $this->input->post('status');

	$result = $this->cek_meeting($tanggal,$waktu_mulai,$waktu_selesai,$ruangan_meeting);
	if ($result){
		$id_divisi = $this->session->userdata('id_user');
		$data=array(
			'perihal' => $perihal,
			'ruangan_meeting' => $ruangan_meeting,
			'tanggal' => $tanggal,
			'waktu_mulai' => $waktu_mulai,
			'waktu_selesai' => $waktu_selesai,
			'estimasi_peserta' => $estimasi_peserta,
			'PIC' => $pic,
			'divisi_meeting'=>$id_divisi,
			'status' => $status
			);

			//create meeting
		$result2 = $this->Meeting_model->insert($data);

			//search id_meeting
		$meeting = $this->Meeting_model->search();

			//input meeting
		foreach ($pengguna as $each_pengguna): {
			$data2 = array(
				'anggota_divisi_meeting'=>$each_pengguna,
				'meeting_anggota'=>$meeting['id_meeting']
				);
			$this->Anggotameeting_model->insert($data2);
		}
		endforeach;
		redirect('Divisi');
	}else{
		$alert = '<div class="alert alert-danger alert-dismissible fade in" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
		</button>
		<span><strong>Gagal menambah meeting karena bentrok!
		</div>';
		$this->session->set_flashdata('alert', $alert);
		redirect('Divisi/tambahmeeting');
	}
}

public function editmeeting($id_meeting){
	if(!isset($_SESSION['id_user'])){
		redirect('');
	}
	$data['title'] ="Edit Meeting";
	$data['meetings'] = $this->Meeting_model->getonemeeting($id_meeting);
	$data['ruangans'] = $this->Ruangan_model->get_all_ruangan();
	$this->load->view('templates/header',$data);
	$this->load->view('divisi/editmeetingview',$data); //isi sesuai keinginan
	$this->load->view('templates/footer');
}

public function do_editmeeting(){
	$id_meeting  = $this->input->post('id');
	$id_divisi = $_SESSION['id_user'];
	echo $id_meeting;
	$data = array(
		'perihal' => $this->input->post('perihal'),
		'ruangan_meeting' => $this->input->post('ruangan'),
		'tanggal' => $this->input->post('tanggal'),
		'waktu_mulai' => $this->input->post('waktu_mulai'),
		'waktu_selesai' => $this->input->post('waktu_selesai'),
		'estimasi_peserta' => $this->input->post('estimasi_peserta'),
		'PIC' => $this->input->post('pic'),
		'divisi_meeting'=>$id_divisi,
		'status'=> $this->input->post('status')
		);

	$result = $this->Meeting_model->updatemeeting($id_meeting,$data);
	if ($result) {
		$notification = '<div class="alert alert-success alert-dismissible fade in" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
		Meeting telah berhasil diubah.
		</div>';	
	} else {
	$notification = '<div class="alert alert-danger alert-dismissible fade in" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
	</button>
	Pengubahan meeting gagal.
	</div>';
	}
	$this->session->set_flashdata('notification', $notification);
	redirect('Divisi');
}



function cek_meeting($tanggal,$jam_mulai,$jam_selesai,$id_ruangan){
	$result1 = $this->Meeting_model->cek_meeting($tanggal,$id_ruangan);
	foreach ($result1 as $key => $value) {
		echo $key.' '.$value['tanggal'].' '.$value['waktu_mulai'].' '.$value['waktu_selesai'].' '.$value['perihal'].'<br>';
	}
	$penanda = 0;
	echo $penanda.'<br>';
	foreach ($result1 as $value){
		if ($value['waktu_mulai']>$jam_mulai){
			if ($value['waktu_mulai']<$jam_selesai){
				$penanda = $penanda + 1;
				echo $value['perihal'].'case 1 <br>';
			}
		}else if($value['waktu_mulai']<$jam_mulai){
			if ($value['waktu_selesai']>$jam_mulai){
				$penanda = $penanda + 1;
				echo $value['perihal'].'case 2 <br>';
			}
		}else{
			$penanda  = $penanda + 1;
			echo 'laaah <br>';
		}
	}
	if ($penanda==0){
		return true;
	}else{
		return false;
	}
}

}
