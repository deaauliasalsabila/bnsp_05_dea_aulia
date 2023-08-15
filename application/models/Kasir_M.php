<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Kasir_M extends CI_Model
{
	//Function ini untuk menampilkan julmlah data pelanggan yang ada di database
	public function Count_pelanggan()
 	{
 		return $this->db->get('count_pelanggan')->result();
 	}
 	//Function ini untuk menampilkan jumlah data transaksi yang ada didatabase
 	public function Count_transaksi()
 	{
 		return $this->db->get('count_transaksi')->result();
 	}
 	//Function ini untuk menampilkan Pelanggan yang ada didatabase
 	public function getAllPelanggan()
 	{
 		return $this->db->get('v_all_pelanggan')->result();
 	}
 	//Function ini untuk memnambahkan data ke database
 	public function tambah($table, $data)
	{
		$this->db->insert($table, $data);
		return $this->db->insert_id();
	}
	//function ini untuk menampilkan data pelanggan
	public function tampilPelanggan($where, $table)
	{
		return $this->db->get_where($table, $where)->result();
	}
	//Function ini untuk edit data berdasarkan id untuk dikirim ke databse
	public function edit_data($id, $data)
	{
		$this->db->where('id_user', $id);
		$this->db->update('user', $data);
	}
	//Function ini untuk menampilkan data Transaksi
	public function tampilTransaksi()
	{
		return $this->db->get('v_transaksi')->result();
	}
	//Function ini untuk menampilkan data Transaksi
	public function getAllTransaksi($where,$table)
	{
		return $this->db->get_where($table, $where)->result();
	}
	//Function ini untuk menghapus data di database
	public function hapusData($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	//Function ini untuk menampilkan data Transaksi dari database
	public function getLaporan()
	{
		return $this->db->get('v_transaksi')->result();
	}

 }