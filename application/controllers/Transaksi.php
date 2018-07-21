<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	//konstruktor (statement yang selalu dipanggil pada setiap function)
	function __construct() {
		parent::__construct();
		//load model Pengguna_m
		$this->load->model('Transaksi_m');
		//load helper form
		$this->load->helper('form');
		if($this->session->userdata('logged_in')['peran'] == '3'){
			redirect('Home');
		}	
	}

	public function laporan()
	{
		$data['peminjaman'] = $this->Transaksi_m->get_data();
		$this->load->view('admin/transaksi/laporan', $data);
	}
	public function print()
	{
		$this->load->library('pdf');

		$data['peminjaman'] = $this->Transaksi_m->get_data();
		$this->pdf->load_view('admin/transaksi/print',$data);
$this->pdf->render();
$this->pdf->stream("laporan.pdf");
	}
	public function index()
	{
		$data['no_pinjam'] = $this->Transaksi_m->gen_no_pinjam();
		$data['anggota'] = $this->db->where('peran',3)->get('pengguna')->result();
		$this->load->library("form_validation");
		
		$this->form_validation->set_rules('tanggal','tanggal','required');

		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');


		if($this->form_validation->run()==FALSE){
			$this->load->view('admin/transaksi/pinjam.php',$data); 
		}
		else{
			$set = $this->input->post();
			$this->db->insert('peminjaman',$set);
			redirect('Transaksi/detail/'.$data['no_pinjam'],'refresh');
		}
	}
	public function detail($id)
	{
		$data['id_peminjaman'] = $id;
		$data['buku'] = $this->db->where('stok >',0)->get('buku')->result();
		$data['detail'] = $this->Transaksi_m->get_detail($id);
		$this->load->library("form_validation");
		
		$this->form_validation->set_rules('jumlah','jumlah','required');

		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');


		if($this->form_validation->run()==FALSE){
			$this->load->view('admin/transaksi/detail.php',$data); 
		}
		else{
			$set = array(
				'jumlah' => $this->input->post('jumlah'),
				'no_pinjam' => $id,
				'kode_buku' => $this->input->post('kode_buku')
			);
			$this->db->insert('detail_peminjaman',$set);
			redirect('Transaksi/detail/'.$id,'refresh');
		}
	}
	public function detail_delete($id_pinjam,$id)
	{
		$this->db->where('kode',$id);
		$this->db->delete('detail_peminjaman');
		redirect('Transaksi/detail/'.$id_pinjam,'refresh');
	}
	public function pengembalian()
	{
		$data['peminjaman'] = $this->db->where('status',1)->get('peminjaman')->result();
		$data['peminjaman'] = $this->Transaksi_m->get_data_terpinjam();
		$this->load->view('admin/transaksi/pengembalian', $data);
	}
	public function kembali($id)
	{
		$set['status'] = 2;
		$set['tanggal_dikembalikan'] = date('Y-m-d');
		$this->db->where('no_pinjam',$id);
		$this->db->update('peminjaman',$set);
		redirect('Transaksi/pengembalian','refresh');
	}
}
