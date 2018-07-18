<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('logged_in') == null) {
			redirect("Login/logout");
		}
		$this->load->model('Buku_m');
		$search = $this->input->post('search');
		$data['buku'] = $this->Buku_m->show_data($search);
		$this->load->view('user/home.php',$data);
	}
	public function detail($id)
	{
		$data['buku'] = $this->db->where('kode',$id)->get('buku')->result()[0];
		$this->load->view('user/detail_buku',$data);
	}
}
