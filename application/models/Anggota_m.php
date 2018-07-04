<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota_m extends CI_Model {

	public function getData()
	{
		$this->db->select('*');
		$this->db->from("anggota");
		
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function getDataWhereId($id)
	{
		$this->db->select('*');
		$this->db->from("anggota");
		$this->db->where('kode',$id);
		return $this->db->get()->result_array();
	}

	public function insertData()
	{
		$data = $this->input->post();
		$this->db->insert("anggota",$data);
	}

	public function updateData($id)	
	{
		$data = $this->input->post();
		$this->db->where('kode',$id);
		if($this->db->update("anggota",$data)){
			return "Berhasil";
		}
	}

	public function hapusData($id)
	{
		$this->db->where('kode',$id);
		if($this->db->delete("anggota")){
			return "Berhasil";
		}
	}
}
