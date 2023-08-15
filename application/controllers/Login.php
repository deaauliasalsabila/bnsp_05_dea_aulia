<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();	
		$this->load->model('Auth_M');
	}
	//Function Ini untuk ke Halaman Login
	public function index()
	{
		$this->load->view('login');
	}
	//Funtion ini untuk proses login
	public function proses_login()
	{
		$username = $this->input->post('username', true);
		$password = md5($this->input->post('password', true));
		$cek = $this->Auth_M->cekLogin($username, $password);
		if ($cek) {
			foreach ($cek as $row) {
				$this->session->set_userdata('dataUser', $cek);
				$this->session->set_userdata('id_level', $row->id_level);
				
				if ($this->session->userdata('id_level') == '1'){
					redirect('admin','refresh');
				}elseif($this->session->userdata('id_level') == '2'){
					redirect('kasir','refresh');
				}elseif($this->session->userdata('id_level') == '3'){
					redirect('owner','refresh');
				}elseif($this->session->userdata('id_level') == '4'){
					redirect('waiter','refresh');
				}elseif($this->session->userdata('id_level') == '5'){
					redirect('pelanggan','refresh');
				}
			}
		}else{
			echo "<script>alert('Username dan Password Anda Salah');</script>";
			redirect('login','refresh');
		}
	}
}