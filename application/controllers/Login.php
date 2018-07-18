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
			if($this->session->userdata('logged_in')['peran'] != '3'){
				redirect('Welcome');
			}else{
				redirect("Home");
			}
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
	public function register()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama','nama','required');
		$this->form_validation->set_rules('alamat','alamat','required');
		$this->form_validation->set_rules('notelp','notelp','required');
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		if ($this->form_validation->run() == false) {
			$this->load->view('admin/register');
		}else{
			$set = $this->input->post();
			$set['peran'] = '2';
			$this->db->insert('pengguna',$set);
			redirect('Login');
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		redirect('Login');
	}
}
