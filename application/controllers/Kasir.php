<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Kasir extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('id_level') !== '2') {
			redirect('login','refresh');
		}

		$this->load->model('Kasir_M');
		$this->load->model('Admin_M');
	}
	//Function ini untuk ke Halaman Dashboard Kasir
	public function index()
	{
		$data['listPelanggan'] = $this->Kasir_M->Count_pelanggan();
		$data['count_transaksi'] = $this->Kasir_M->Count_transaksi();
		$this->load->view('kasir/dashboard_kasir', $data);
	}
	//fUNCTION ini untuk ke Halaman list Data Pelanggan
	public function v_all_dataPelanggan()
	{
		$data['dataPelanggan'] = $this->Kasir_M->getAllPelanggan();
		$this->load->view('kasir/data_pelanggan', $data);
	}
	//Function ini untuk ke Halaman TForm Tambah Data Pelanggan
	public function tambahdataPelanggan()
	{
		$this->load->model('Admin_M');
		$data['kode'] = $this->Admin_M->buatKode();
		$this->load->view('kasir/tambahdataPelanggan',$data);
	}
	//Function ini untuk Proses Tambah Pelanggan
	public function proses_tambahPelanggan()
	{
		$data = array(
				'id_user' => $this->input->post('id_user'),
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password')),
				'nama_user' => $this->input->post('nama_user'),
				'id_level' => '5'
			);
			$this->Admin_M->tambah('user', $data);
			redirect('kasir/v_all_dataPelanggan','refresh');
	}
	//Function ini untuk ke Halaman Detail Pelanggan yang berdasarkan ID
	public function detailDataPelanggan($id)
	{
			$where = array(
				'id_user' => $id
			);
			$data['tampilDataPelanggan'] = $this->Kasir_M->tampilPelanggan($where, 'v_all_users');
			$this->load->view('kasir/detailDataPelanggan', $data);
	}
	//Function ini untuk ke halaman profil yang berdasarkan id
	public function profil($id)
	{
		$where  = array(
				'id_user' => $id
			);

			$data['profil'] = $this->Admin_M->edit($where, 'v_all_users')->result();
			$this->load->view('kasir/profil', $data);
	}
	//Function ini untuk proses edit Profil
	public function proses_editProfil($id)
	{
		$data = array(
						'username' => $this->input->post('username'),
						'password' => md5($this->input->post('password')),
						'nama_user' => $this->input->post('nama_user'),
						'id_level'  => '2'
		);
		$this->Kasir_M->edit_data($id, $data, 'user');
			redirect('kasir/v_all_dataPelanggan','refresh');
	}
	//Function ini untuk ke Halaman List Data Transaksi
	public function v_all_dataTransaksi()
	{
		$data['tampilOrder'] = $this->Kasir_M->tampilTransaksi();
		$this->load->view('kasir/data_transaksi',$data);
	}
	//Function ini untuk ke Halaman Detail Transaksi yang berdasarkan ID
	public function detailDataTransaksi($id)
	{
		$where = array('id_transaksi' => $id );
		$data['tampilDataOrder'] = $this->Kasir_M->getAllTransaksi($where, 'getTransaksi');
		$this->load->view('kasir/detailDataTransaksi', $data);
	}
	//Function ini untuk ke Halaman EDit transaksi berdarkan ID
	public function editDataTransaksi($id)
	{
		$where = array('id_order' => $id);
		$data['dataTransaksi'] = $this->Kasir_M->getAllTransaksi($where, 'getTransaksi');
		$this->load->view('kasir/editDataTransaksi', $data);
	}
	public function proses_editTransaksi($value='')
	{
		# code...
	}
	//Function ini untuk Hapus Data Transaksi berdasarkan ID
	public function hapusDataTransaksi($id)
	{
		$where = array('id_transaksi' => $id);
		
		$this->Admin_M->hapusData($where, 'transaksi'); 	
    	redirect('kasir/v_all_dataTransaksi','refresh');

	}
	//Function ini untuk ke Halaman Data Laporan
	public function v_all_dataLaporan()
	{
		$data['laporan'] = $this->Admin_M->getLaporan();
		$this->load->view('kasir/data_laporan', $data);
	}


}