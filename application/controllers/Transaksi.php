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
	}

	public function index()
	{
		echo $this->Transaksi_m->gen_no_pinjam();
	}
	
}
