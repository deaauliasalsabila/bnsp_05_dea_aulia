<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Admin_M extends CI_Model
{
	//fUNCTION ini untuk menampilkan data yang ada di database dan menjumlahkan ada berapa jumlah user
	public function Count_user()
	{
		return $this->db->get('count_user')->result();
	}
	//fUNCTION ini untuk menampilkan data yang ada di database dan menjumlahkan ada berapa jumlah data Order
	public function Count_order()
	{
		return $this->db->get('count_order')->result();
	}
	//fUNCTION ini untuk menampilkan data yang ada di database dan menjumlahkan ada berapa jumlah data Transaksi
	public function Count_transaksi()
	{
		return $this->db->get('count_transaksi')->result();
	}
	//Function ini menampilkan data user
	public function getAllUsers()
	{
		return $this->db->get('v_all_users')->result();
	}
	//Function ini menampilkan data Level
	public function level()
	{
		return $this->db->get('level')->result();
	}
	//Function ini untuk menambahkan data ke dalam database
	public function tambah($table, $data)
	{
		$this->db->insert($table, $data);
		return $this->db->insert_id();
	}
	//Function ini untuk menampilkan data dari database
	public function tampilUser($where, $table)
	{
		return $this->db->get_where($table, $where)->result();
	}
	//Function ini untuk menampilkan data dari Database
	public function edit($where, $table)
	{
        return $this->db->get_where($table, $where);
	}
	//FUNCTION INI berfungsi untuk data yang sudah diedit dan dikirim ke database
	public function edit_data($id, $data)
	{
		$this->db->where('id_user', $id);
		$this->db->update('user', $data);
	}
	//Function ini untuk menghapus data table yang ada di database berdasarkan ID
	public function hapusData($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	//Function ini untuk menampilkan data dari database masakan
	public function getAllMasakan()
	{
		return $this->db->get('masakan')->result();
	}
	//Function ini untuk Tambah data Masakan dan dikirim ke database
	public function tambahMasakan($data)
	{
		return $this->db->insert('masakan',$data);
	}
	//Function ini untuk edit data Masakan yang sudah diedit dan dikim ke database
	public function edit_masakan($id, $data)
	{
		$this->db->where('id_masakan', $id);
		$this->db->update('masakan', $data);
	}
	//FUnction ini untuk menampilkan data order dari database
	public function getAllOrder()
	{
		return $this->db->get('v_all_order')->result();
	}
	//Function ini untuk menampilkan data masakan berdasarkan id untuk dikirim
	public function getKeranjangMasakan($table, $id)
	{
		$this->db->where('id_masakan', $id);
		$ambilData = $this->db->get($table);
		return $ambilData->row();
	}
	//Function ini untuk menampilkan data Order yang ada di database
	public function tampilOrder($where, $table)
	{
		return $this->db->get_where($table, $where)->result();
	}
	//Function ini untuk menampilkan data Transaksi dari database
	public function getTransaksi()
	{
		return $this->db->get('v_transaksi')->result();
	}
	//Function untuk menampilkan data Transaksi dari database
	public function getLaporan()
	{
		return $this->db->get('v_transaksi')->result();
	}
	public function laporan($tanggal1, $tanggal2)
	{
		$this->db->where('tanggal_transaksi >=', $tanggal1);
		$this->db->where('tanggal_transaksi <=', $tanggal2);
		$result = $this->db->get('v_transaksi')->result();
	}
	// Function ini untuk membuat kode id user
	public function buatKode()
	{
		$this->db->select('RIGHT(user.id_user,3)as kode', FALSE);
		$this->db->order_by('id_user', 'desc');
		$this->db->limit(1);
		$query = $this->db->get('user');
		if ($query->num_rows() <> 0) {
			$data = $query->row();
			$kode = intval($data->kode) + 1;
		}else{
			$kode = 1;
		}
		$kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
		$kodemenjadi = "USR-0527-".$kodemax;
		return $kodemenjadi;	
	}
	//Function ini untuk membuat kode order 
	public function buatKodeOrder()
	{
		$this->db->select('RIGHT(torder.id_order,3)as kode', FALSE);
		$this->db->order_by('id_order', 'desc');
		$this->db->limit(1);
		$query = $this->db->get('torder');
		if ($query->num_rows() <> 0) {
			$data = $query->row();
			$kode = intval($data->kode) + 1;
		}else{
			$kode = 1;
		}
		$kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
		$kodemenjadi = "ORD-0527-".$kodemax;
		return $kodemenjadi;	
	}
	//Function ini untuk membuat kode transaksi
	public function buatKodeTransaksi()
	{
		$this->db->select('RIGHT(transaksi.id_transaksi,3)as kode', FALSE);
		$this->db->order_by('id_transaksi', 'desc');
		$this->db->limit(1);
		$query = $this->db->get('transaksi');
		if ($query->num_rows() <> 0) {
			$data = $query->row();
			$kode = intval($data->kode) + 1;
		}else{
			$kode = 1;
		}
		$kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
		$kodemenjadi = "TRK-0527-".$kodemax;
		return $kodemenjadi;	
	}
}