<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis extends CI_Controller {

	//check user sudah login atau belum
	public function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect('login/login');
		}
	}
	public function index()
	{	
		$this->load->model('jenis_model');
		$data['jenis_wisata'] = $this->jenis_model->getAllData();
		$this->load->view('jenis/index',$data);
	}

	public function delete($id){
		//delete * from pasien where id = id
		$this->load->model('jenis_model');//load model
		$where = array('id' => $id);
		$this->Jenis_model->delete(array('id'=>$id),'jenis_wisata');// query delete(delete from pasien where id = $id)
		redirect('jenis/index');


	}

	public function add(){
		$this->load->library('form_validation');
		$this->load->view('jenis/tambah_jenis');
	}

	public function tambah(){
	
		$this->load->model('jenis_model');

		$str = rand(); 
		$result = md5($str);
		$data['nama_wisata'] =$this->input->post('nama');
		

		
		//ambil fungsi upload foto dari model
		$this->Jenis_model->save($data);
		redirect('jenis/index');
	}


	
	public function view($id){
		$this->load->model('jenis_model');
		$data['Jenis_wisata'] = $this->jenis_model->findById($id);
		$this->load->view('jenis/view',$data);
	}

	public function edit($id){
		$this->load->model('jenis_model');
		$data['jenis_wisata'] = $this->jenis_model->findById($id);
		$this->load->view('jenis/edit',$data);
	}

	public function update(){
		//panggil model
		$this->load->model('jenis_model');
		

		//inputan id
		$id = $this->input->post('id');
		
		//tambah data
		$data['nama_wisata'] = $this->input->post('nama');

		//method update data
		$this->jenis_model->update($data,$id);

		//redirect	
		return redirect('jenis/index');


	}
	

}
