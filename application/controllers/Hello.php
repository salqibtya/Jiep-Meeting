<?php
class Hello extends CI_Controller {
	public function index(){
		//nangkep dari model
		$this->load->model('Hello_model');

		//buat model disini
		$model = $this->Hello_model;

		$s1=$model->str;
		$s2=$model->umbeng;
		$variabel = $model->variabel;
		$this->load->view('helloview',array('teks'=>$s1));
		$this->load->view('helloview',array('teks'=>$s2));
		$this->load->view('helloview',array('teks'=>"bububu"));
		$this->load->view('helloview',array('teks'=>$variabel));
	}
}
