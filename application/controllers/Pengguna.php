<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

	//konstruktor (statement yang selalu dipanggil pada setiap function)
	function __construct() {
		parent::__construct();
		//load model Pengguna_m
		$this->load->model('Pengguna_m');
		//load helper form
		$this->load->helper('form');	
		if ($this->session->userdata('logged_in') == null) {
			redirect("Login/logout");
		}
	}

	/* index (fungsi yang akan berjalan jika tidak ada fungsi yang dipangggil)
	jika url = ".[]/pengguna" maka fungsi index yang dijalankan */
	public function index()
	{
		/* mengisi $data['getData'] berupa data yang 
		terlah direturn pada fungsi getData() pada Pengguna_m */
		$data['getData'] = $this->Pengguna_m->getData();
		// memanggil view 'pengguna/pengguna.php' dan diberi variable $data
		$this->load->view('admin/pengguna/pengguna.php',$data);
	}

	public function tambah()
	{
		//load library form_validation
		$this->load->library("form_validation");
		/* aturan form validation 
		- parameter 1 ('id') = ditujukan pada input yang name="id"
		- parameter 2 ('ID') = untuk tampilan error
		- parameter 3 ('required') = rule nya (ada banyak rule buka di userguide)
		*/
		$this->form_validation->set_rules('nama','nama','required');
		$this->form_validation->set_rules('alamat','alamat','required');
		$this->form_validation->set_rules('notelp','notelp','required');

		// intinya membuat warna error menjadi merah :D
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');


		// if jika kita belum melakukan submit
		if($this->form_validation->run()==FALSE){
			//menampilkan view 'pengguna/tambah.php'
			$this->load->view('admin/pengguna/tambah.php'); 
		}
		// jika kita sudah melalukan submit
		else{
			//memanggil fungsi insertData pada model
			$this->Pengguna_m->insertData();
			//redirect / pergi ke halaman 'pengguna'
			redirect('Pengguna');
		}
	}

	/*$id adalah parameter
	contoh penggunakan pengguna/ubah/1 
	*/ 
	public function ubah($id)
	{
		//load library form_validation
		$this->load->library("form_validation");
		/* aturan form validation 
		- parameter 1 ('id') = ditujukan pada input yang name="id"
		- parameter 2 ('ID') = untuk tampilan error
		- parameter 3 ('required') = rule nya (ada banyak rule buka di userguide)
		*/
		$this->form_validation->set_rules('nama','nama','required');
		$this->form_validation->set_rules('alamat','alamat','required');
		$this->form_validation->set_rules('notelp','notelp','required');

		// intinya membuat warna error menjadi merah :D
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

		

		//memberikan data berisi data yang sesuai dengan $id
		$data['getData'] = $this->Pengguna_m->getDataWhereId($id)[0];

		// if jika kita belum melakukan submit
		if($this->form_validation->run()==FALSE){
			//menampilkan view 'pengguna/ubah.php'
			$this->load->view('admin/pengguna/ubah',$data);
		}
		// jika kita sudah melalukan submit
		else{
			//memanggil fungsi insertData pada model
			$this->Pengguna_m->updateData($id);
			//redirect / pergi ke halaman 'pengguna'
			redirect('Pengguna');
		}
	}

	/*$id adalah parameter
	contoh penggunakan pengguna/hapus/1 
	*/ 
	public function hapus($id)
	{
		//memanggil fungsi hapusData pada model
		$this->Pengguna_m->hapusData($id);
		redirect('Pengguna');
	}
}
