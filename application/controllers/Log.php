<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Divisi_model');
		$this->load->model('Admin_model');
	}
	
	public function in(){
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('userpass', 'Password', 'required');
		if($this->form_validation->run() == FALSE){
			$this->load->view('logview');
		}else{
			$username = $this->input->post('username');
			$password = $this->input->post('userpass');
			$result = $this->Admin_model->get_admin_login($username,$password);
			if ($result == FALSE){
				$result2 = $this->Divisi_model->get_divisi_login($username,$password);
				if($result2 == FALSE){
					$alert = '<div class="alert alert-danger alert-dismissible fade in" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
				</button>
				<span><strong>Perhatian!</strong> Username atau password salah.
				</div>';
					$this->session->set_flashdata('alert', $alert);
					$this->load->view('logview');
				}else{
					$session_data = array(
						'id_user'=>$result2['id_divisi'],
						'name' => $result2['name_divisi'],
						'status'=> "divisi",
						'type' => 1
					);
					$this->session->set_userdata($session_data);
					redirect('/Divisi');
				}
			}else{
				$session_data = array(
					'name' => "admin",
					'status'=>"admin",
					'type'=>9
				);
				$this->session->set_userdata($session_data);
				redirect('/Admin');
			}	
		}
	}

	public function out(){
		$this->session->sess_destroy();
		redirect('');
	}
}