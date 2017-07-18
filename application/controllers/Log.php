<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Log extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Users_model');
	}

	function in() {
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('userpass', 'Password', 'required');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('login_page');
		} else {
			$username = $this->input->post('username');
			$userpass = $this->input->post('userpass');

			if ($this->Users_model->get_by_login($username, $userpass) == FALSE) {
				$alert = '<div class="alert alert-danger alert-dismissible fade in" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
				</button>
				<span><strong>Perhatian!</strong> Username atau password salah.
				</div>';
				$this->session->set_flashdata('alert', $alert);
				$this->load->view('login_page');
			} else {
				$u_data = $this->Users_model->get_by_login($username, $userpass);
				$sess_newdata = array(
					'id_user' => $u_data['id_user'],
					'level_user' => $u_data['user_level']
					);

				$this->session->set_userdata($sess_newdata);
				redirect(base_url());
			}
		}
	}

	function out() {
		$this->session->sess_destroy();
		redirect(base_url());
	}

}
