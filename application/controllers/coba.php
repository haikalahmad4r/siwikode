<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coba extends CI_Controller {


	
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect('login/login');
		}
	}
	public function index()
	{	
		//untuk menampilkan data
		$this->load->model('profesi_model');//load model
		$data['profesi'] = $this->profesi_model->getAll(); //query select all data
		$this->load->view('profesi/index',$data);
	}

	

	

}
