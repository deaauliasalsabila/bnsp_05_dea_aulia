<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Owner extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		/*membuat if untuk memastikan bahwa yang bisa mengakses controller owner adalah user dengan id level 3(owner), yang id levelnya bukan = 3 akan di redirect ke halaman login awal*/
		if ($this->session->userdata('id_level')!=="3") {
			redirect('index.php/view/vlogin');
		}
		/*function untuk menghubungkan controller owner dengan model mowner di folder model*/
		$this->load->model('Mowner');
	}
/*function index dari controller owner (keluar ketika pertama kali membuka controller owner pada browser)*/
	public function index()
	{
		/*membuat variabel untuk menampung data dari model mowner function getcmasakan dan getctransaksi setelah itu diarahkan ke view odashboard(dashboard owner) beserta mengirim variabel data*/
		$data['data_masakan'] = $this->Mowner->getcmasakan();
		$data['data_transaksi'] = $this->Mowner->getctransaksi();
		$this->load->view('owner/odashboard', $data);		
	}

/*function untuk membuka view profil owner*/
public function oprofil()
	{
		$this->load->view('owner/oprofil');
	}

	/*function untuk membuka view edit profil owner*/
	public function oeditprofil()
	{
		$this->load->view('owner/oeditprofil');
	}

	/*function untuk membuka view list masakan di owner*/
	public function olistmasakan()
	{
		/*membuat variabel untuk menampung data dari model mowner function getmasakan setelah itu membuka view list masakan beserta mengirim variabel data*/
		$data['masakan']=$this->Mowner->getmasakan();
		$this->load->view('owner/olistmasakan', $data);
	}

	/*function untuk membuka view list transaksi di owner*/
	public function olistransaksi()
	{
		/*membuat variabel untuk menampung data dari model mowner function gettransaksi setelah itu membuka view list transaksi beserta mengirim variabel data*/
		$data['transaksi']=$this->Mowner->gettransaksi();
		$this->load->view('owner/olistransaksi',$data);
	}

	/*function untuk membuka detail transaksi berdasarkan id*/
	public function oreadtransaksi($idtransaksi)
	{
		/*membuat variabel untuk menampung id transaksi*/
		$where = array('id_transaksi'=>$idtransaksi);
		/*membuat variabel untuk menampung data dari model mowner function detaitrans beserta membawa variabel where yang berisi id dan tabel/view detailorder*/
		$data['detail'] = $this->Mowner->detailtrans($where,'detailorder');		
		$this->load->view('owner/oreadtransaksi', $data);
	}
	/*membuat function untuk membuka halaman laporan*/
	public function olaporan()
	{
		/*membuat variabel untuk menampung data transaksi dari model mowner function getransaksi setelah itu membuka view laporan beserta mengirim variabel data*/
		$data['getransaksi'] = $this->Mowner->getransaksi();
		$this->load->view('owner/olaporan', $data);
	}

}



/* End of file owner.php */
/* Location: ./application/controllers/owner.php */