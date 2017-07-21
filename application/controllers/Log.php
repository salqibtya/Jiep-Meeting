<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Divisi_model');
		$this->load->model('Admin_model');
	}
	
	public function in(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		if(!isset($username)||!isset($password)){
			$this->load->view('loginview');
		}else{
			$alert = '<div class="alert alert-danger alert-dismissible fade in" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
				</button>
				<span><strong>Perhatian!</strong> Username atau password salah.
				</div>';
			if($this->Admin_model->get_admin_login($username,$password)==false){
				if($this->Divisi_model->get_divisi_login($username,$password)==false){
					$this->session->set_flashdata('alert', $alert);
					$this->load->view('loginview');
				}else{
					$result=get_divisi_login($username,$password);
					$session_data = array(
						'id_user'=>$result['id_divisi'],
						'nama_divisi'=>$result['nama_divisi'],
						'level_user'=>1
					);
					$this->session->set_userdata($session_data);
					$this->load->view('adminview');
				}
			}else{
				$result=get_admin_login($username,$password);
				$session_data = array(
					'id_user'=>$result['id_admin'],
					'level_user'=>9
				);
				$this->session->set_userdata($session_data);
				$this->load->view('adminview');
			}
		}
	}

	public function out(){
		$this->session->sess_destroy();
		redirect('homeview');
	}
}