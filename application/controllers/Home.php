<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('logged_in') == null) {
			redirect("Login/logout");
		}
		$data['buku'] = $this->db->get('buku')->result();
		$this->load->view('user/home.php',$data);
	}
}
