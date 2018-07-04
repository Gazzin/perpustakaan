<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Username','required|callback_cekDB');
		$this->form_validation->set_rules('password','Password','required');
		if ($this->form_validation->run() == false) {
			$this->load->view('admin/login');
		}else{
			redirect('Welcome');
		}
	}
	public function cekDB($username)
	{
		$password = $this->input->post('password');
		$query = $this->db->where('username',$username)->where('password',$password)->get('pengguna');
		if ($query->num_rows() == 1) {
			$data = $query->result()[0];
			$sess = array(
				'kode' => $data->kode,
				'nama' => $data->nama,
				'username' => $data->username,
				'peran' => $data->peran,
			);
			$this->session->set_userdata('logged_in',$sess);
			return true;
		}else{
			$this->form_validation->set_message('cekDB',"Username Password tidak valid");
			return false;
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		redirect('Login');
	}
}
