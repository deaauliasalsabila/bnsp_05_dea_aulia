<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		/*menghubungkan controller view dengan model mview di folder model*/
		$this->load->model('mview');
	}

	/*function index dari default conroller (keluar ketika pertama kali membuka project)*/
	public function index()
	{
		$this->load->view('index');
	}

	/*function untuk membuka view bernama header*/
	public function header()
	{
		$this->load->view('header');
	}

	/*function untuk membuka view menu*/
	public function menu()
	{
		$this->load->model('mpelanggan');
		$data['masakan'] = $this->mpelanggan->getmasakan();
		$this->load->view('menu', $data);
	}

	/*function untuk membuka view login*/
	public function vlogin()
	{
		$this->load->view('login');
	}

	/*function untuk proses login memakai session, dipanggil ketika user mengklik tombol login. */
	function proses_login()
	{
		/*membuat variabel untuk menampung data dari input type login*/
		$user=$this->input->post('username');
		$pass= md5($this->input->post('password'));
		/*membuat variabel untuk menampung data dari model mview function login dengan membawa serta variabel user dan pass*/
		$ceklogin=$this->mview->login($user, $pass);
		/*membuat if untuk mengecek $ceklogin ada datanya atau tidak*/
		if ($ceklogin) {
			/*membuat foreach untuk memecah data ceklogin*/
			foreach ($ceklogin as $row) {
				$this->session->set_userdata('dataUser', $ceklogin);
				$this->session->set_userdata('id_level', $row->id_level);
				/*membuat if untuk mnegecek level login, jika id level=3(owner)maka akan masuk kedalam halaman owner */
				if ($this->session->userdata('id_level')=="3") {
					redirect('index.php/owner/index');
				}
				/*jika id level=4(waiter) maka akan masuk kehalaman dashboard waiter */
				elseif ($this->session->userdata('id_level')=="4") {
					redirect('index.php/waiter/index');
				}
				/*jika id level=5(pelanggan) maka akan masuk ke halaman home pelanggan*/
				elseif ($this->session->userdata('id_level')=="5") {
					redirect('index.php/pelanggan/index');
				}elseif ($this->session->userdata('id_level') == '1'){
					redirect('admin','refresh');
				}elseif($this->session->userdata('id_level') == '2'){
					redirect('kasir','refresh');
			}

			/*jika tidak ada username dan password yang sesuai maka akan mengeluarkan pesan/alert*/
		}
	}else{
			$data['pesan']="Username atau Password tidak terdaftar.";
			$this->load->view('login', $data);
		}
	}
	/*function untuk logout, akan di redirect ke halaman login awal*/
	function logout()
	{
		$this->session->sess_destroy();
		redirect('index.php/view/vlogin');
	}

	

	

}

/* End of file view.php */
/* Location: ./application/controllers/view.php */