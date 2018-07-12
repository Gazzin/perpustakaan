<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_m extends CI_Model {

	public function insert_peminjaman()
	{
		$data = array(
			'no_pinjam' => $this->gen_no_pinjam(),
			'kode_petugas' => $this->session->userdata('')
		);
	}
	public function get_detail($id)
	{
		$this->db->select('detail_peminjaman.*,buku.judul');
		$this->db->join('buku','detail_peminjaman.kode_buku=buku.kode');
		$this->db->where('no_pinjam',$id);
		return $this->db->get('detail_peminjaman')->result();
	}
	public function get_data()
	{
		$this->db->select('peminjaman.*,group_concat(buku.judul,"-",detail_peminjaman.jumlah separator "<br>") as list');
		$this->db->join('detail_peminjaman','peminjaman.no_pinjam=detail_peminjaman.no_pinjam');
		$this->db->join('buku','detail_peminjaman.kode_buku=buku.kode');
		$this->db->group_by('peminjaman.no_pinjam');
		return $this->db->get('peminjaman')->result();
	}
	public function gen_no_pinjam()
	{
		$query = $this->db->query("select no_pinjam from peminjaman order by no_pinjam desc limit 1");
		if ($query->num_rows() == 0) {
			return "PER00001";
		}else{
			$res = $query->result()[0];
			$id_old = $res->no_pinjam;
			$num_old = (int) substr($id_old,3,5);
			$num_new = $num_old+1;
			$num_new = substr('000000'.$num_new,-5);
			return "PER".$num_new;
		}
	}
}
