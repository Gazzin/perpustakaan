<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

	//konstruktor (statement yang selalu dipanggil pada setiap function)
	function __construct() {
		parent::__construct();
		//load model Buku_m
		$this->load->model('Buku_m');
		//load helper form
		$this->load->helper('form');
		if ($this->session->userdata('logged_in') == null) {
			redirect("Login/logout");
		}
	}

	/* index (fungsi yang akan berjalan jika tidak ada fungsi yang dipangggil)
	jika url = ".[]/buku" maka fungsi index yang dijalankan */
	public function index()
	{
		/* mengisi $data['getData'] berupa data yang 
		terlah direturn pada fungsi getData() pada Buku_m */
		$data['getData'] = $this->Buku_m->getData();
		// memanggil view 'buku/buku.php' dan diberi variable $data
		$this->load->view('admin/buku/buku.php',$data);
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
		$this->form_validation->set_rules('judul','Judul','required');
		$this->form_validation->set_rules('penerbit','Penerbit','required');
		$this->form_validation->set_rules('pengarang','Pengarang','required');
		$this->form_validation->set_rules('tahunterbit','Tahun Terbit','required');
		$this->form_validation->set_rules('abstrak','Abstrak','required');

		// intinya membuat warna error menjadi merah :D
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');


		// if jika kita belum melakukan submit
		if($this->form_validation->run()==FALSE){
			//menampilkan view 'buku/tambah.php'
			$this->load->view('admin/buku/tambah.php'); 
		}
		// jika kita sudah melalukan submit
		else{
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']  = '10000';
			$config['max_width']  = '10240';
			$config['max_height']  = '7680';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('gambar')){
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('admin/buku/tambah.php',$error); 
			}
			else{
				$data = array('upload_data' => $this->upload->data());
				echo "success";
				$this->Buku_m->insertData();
				redirect('Buku');
			}
			
		}
	}

	/*$id adalah parameter
	contoh penggunakan buku/ubah/1 
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
		$this->form_validation->set_rules('judul','Judul','required');
		$this->form_validation->set_rules('penerbit','Penerbit','required');
		$this->form_validation->set_rules('pengarang','Pengarang','required');
		$this->form_validation->set_rules('tahunterbit','Tahun Terbit','required');
		$this->form_validation->set_rules('abstrak','Abstrak','required');

		// intinya membuat warna error menjadi merah :D
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

		

		//memberikan data berisi data yang sesuai dengan $id
		$data['getData'] = $this->Buku_m->getDataWhereId($id)[0];

		// if jika kita belum melakukan submit
		if($this->form_validation->run()==FALSE){
			//menampilkan view 'buku/ubah.php'
			$this->load->view('admin/buku/ubah',$data);
		}
		// jika kita sudah melalukan submit
		else{
			if($_FILES['gambar']['name'] != null){
				$config['upload_path'] = './uploads/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size']  = '1000';
				$config['max_width']  = '10240';
				$config['max_height']  = '7680';

				$this->load->library('upload', $config);

				if ( ! $this->upload->do_upload('gambar')){
					$data['error'] = $this->upload->display_errors();
					$this->load->view('admin/buku/ubah',$data);
				}
				else{
					$this->Buku_m->updateData($id,true);
					redirect('Buku');
				}
			}else{
				$this->Buku_m->updateData($id);
					redirect('Buku');
			}
			
		}
	}

	/*$id adalah parameter
	contoh penggunakan buku/hapus/1 
	*/ 
	public function hapus($id)
	{
		//memanggil fungsi hapusData pada model
		$this->Buku_m->hapusData($id);
		redirect('Buku');
	}
}
