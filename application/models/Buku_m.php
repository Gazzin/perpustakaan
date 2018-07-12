<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku_m extends CI_Model {

	public function getData()
	{
		//untuk select column
		$this->db->select('*');
		//untuk from table buku
		$this->db->from("buku");
		//$get eksekusi fungsi select
		//hasil eksesusi = "select * from buku"

		
		$query = $this->db->get();
		//untuk merubah table menjadi array
		return $query->result_array();
	}


	public function getDataWhereId($id)
	{
		$this->db->select('*');
		$this->db->from("buku");
		$this->db->where('kode',$id);
		return $this->db->get()->result_array();
	}

	public function insertData()
	{
		/* jika semua sama sperti di table
		gunakan versi simple seprti berikut */
		$data = $this->input->post();
		$data['gambar'] = $this->upload->data('file_name');
		/* eksekusi query insert into "buku" diisi dengan variable $data
		face2face ae lek bingung :| */
		$this->db->insert("buku",$data);
	}

	public function updateData($id,$upload=false)	
	{
		/* jika semua sama sperti di table
		gunakan versi simple seprti berikut */
		$data = $this->input->post();
		if($upload){
			$data['gambar'] = $this->upload->data('file_name');
		}
		//mengeset where id=$id
		$this->db->where('kode',$id);
		/*eksekusi update buku set $data from buku where id=$id
		jika berhasil return berhasil */
		if($this->db->update("buku",$data)){
			return "Berhasil";
		}
	}

	public function hapusData($id)
	{
		//mengeset where id=$id
		$this->db->where('kode',$id);
		/* eksekusi delete from buku where id=$id 
		jika berhasil return berhasil*/
		if($this->db->delete("buku")){
			return "Berhasil";
		}
	}
}
