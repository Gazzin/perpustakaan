<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna_m extends CI_Model {

	public function getData()
	{
		//untuk select column
		$this->db->select('*');
		//untuk from table pengguna
		$this->db->from("pengguna");
		//$get eksekusi fungsi select
		//hasil eksesusi = "select * from pengguna"

		
		$query = $this->db->get();
		//untuk merubah table menjadi array
		return $query->result_array();
	}


	public function getDataWhereId($id)
	{
		$this->db->select('*');
		$this->db->from("pengguna");
		$this->db->where('kode',$id);
		return $this->db->get()->result_array();
	}

	public function insertData()
	{
		/* jika semua sama sperti di table
		gunakan versi simple seprti berikut */
		$data = $this->input->post();
		/* eksekusi query insert into "pengguna" diisi dengan variable $data
		face2face ae lek bingung :| */
		$this->db->insert("pengguna",$data);
	}

	public function updateData($id)	
	{
		/* jika semua sama sperti di table
		gunakan versi simple seprti berikut */
		$data = $this->input->post();
		//mengeset where id=$id
		$this->db->where('kode',$id);
		/*eksekusi update pengguna set $data from pengguna where id=$id
		jika berhasil return berhasil */
		if($this->db->update("pengguna",$data)){
			return "Berhasil";
		}
	}

	public function hapusData($id)
	{
		//mengeset where id=$id
		$this->db->where('kode',$id);
		/* eksekusi delete from pengguna where id=$id 
		jika berhasil return berhasil*/
		if($this->db->delete("pengguna")){
			return "Berhasil";
		}
	}
}
