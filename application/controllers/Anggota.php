<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Anggota_m');
		$this->load->helper('form');	
		if($this->session->userdata('logged_in')['peran'] == '3'){
			redirect('Home');
		}
	}

	public function index()
	{
		$data['getData'] = $this->Anggota_m->getData();
		$this->load->view('admin/anggota/anggota.php',$data);
	}

	public function tambah()
	{
		$this->load->library("form_validation");
	
		$this->form_validation->set_rules('nama','Nama','required|alpha');
		$this->form_validation->set_rules('alamat','Alamat','required');
		$this->form_validation->set_rules('notelp','Nomer Telepon','required');
	
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

		if($this->form_validation->run()==FALSE){
			$this->load->view('admin/anggota/tambah.php'); 
		}
		else{
			$this->Anggota_m->insertData();
			redirect('anggota');
		}
	}

	public function ubah($id)
	{
		$this->load->library("form_validation");
	
		$this->form_validation->set_rules('nama','Nama','required|alpha');
		$this->form_validation->set_rules('alamat','Alamat','required');
		$this->form_validation->set_rules('notelp','Nomer Telepon','required');

		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		
		$data['getData'] = $this->Anggota_m->getDataWhereId($id)[0];

		if($this->form_validation->run()==FALSE){
			$this->load->view('admin/anggota/ubah',$data);
		}
		else{
			$this->Anggota_m->updateData($id);
			redirect('anggota');
		}
	}

	public function hapus($id)
	{
		$this->Anggota_m->hapusData($id);
		redirect('anggota');
	}
}
