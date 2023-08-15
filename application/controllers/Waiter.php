<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Waiter extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		/*membuat if untuk memastikan bahwa yang bisa mengakses controller waiter adalah user dengan id level 4(waiter), yang id levelnya bukan = 4 akan di redirect ke halaman login awal*/
		if ($this->session->userdata('id_level') !=="4") {
			redirect('index.php/view/vlogin');
		}
		/*me load library form validation*/
		$this->load->library('form_validation');
		/*function untuk menghubungkan model waiter dengan model mwaiter di folder model*/
		$this->load->model('Mwaiter');
	}


	/*function index dari controller pelanggan (keluar ketika pertama kali membuka controller pelanggan pada browser)*/
	public function index()
	{
		/*membuat variabel untuk menampung data dari model mpelanggan function getcmasakan, getcuser dan getcorder setelah itu diarahkan ke view dashboard waiter beserta mengirim variabel data*/
		$data['data_masakan'] = $this->Mwaiter->getcmasakan();
		$data['data_user'] = $this->Mwaiter->getcuser();
		$data['data_order'] = $this->Mwaiter->getcorder();
		$this->load->view('waiter/dashboard_waiter', $data);
	}

	/*function untuk membuka view profil berdasarkan id user*/
	public function wprofil($iduser)
	{
		/*membuat variabel untuk menampung id user*/
			$where = array('id_user'=>$iduser);
			/*membuat variabel untuk menampung data dari model mwaiter function profil setelah itu membuka view profil beserta membawa variabel data*/
		$data['ambil'] = $this->Mwaiter->profil($where,'user');
		$this->load->view('waiter/wprofil', $data);
	}

	/*function untuk membuka view edit profil berdasarkan id user*/
	public function weditprofil($iduser)
	{
		/*membuat variabel untuk menampung id user*/
		$where = array('id_user'=>$iduser);
		/*membuat variabel untuk menampung data dari model mwaiter function profil setelah itu membuka view edit profil beserta membawa variabel data*/
		$data['ambil'] = $this->Mwaiter->profil($where,'user');	
		$this->load->view('waiter/weditprofil', $data);
	}

	/*function untuk proses edit memakai id, dipanggil ketika user mengklik tombol edit pada halaman edit user. */
	public function prosesedit($id)
		{
		/*membuat variabel untuk menampung id user*/
		$where = array('id_user'=>$id);
		$data['ambil'] = $this->Mwaiter->profil($where,'user');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Username','required|min_length[5]|max_length[15]');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('nama_user','Nama User','required');
		if ($this->form_validation->run()==false) {
			$this->load->view('waiter/weditprofil',$data);
		}else{
			/*membuat variabel untuk menampung data array berisi input post dari view*/
			$data = array(
				'username'=> $this->input->post('username'),
				'password'=> $this->input->post('password'),
				'nama_user'=> $this->input->post('nama_user'),
			);
			$this->Mwaiter->update($id,$data,'user');
			redirect('index.php/waiter/','refresh');
		}
	}		
	/*function untuk membuka detail user berdasarkan id user*/
	public function wreaduser($iduser)
	{
		$where=array('id_user'=>$iduser);
		$data['detus']=$this->Mwaiter->detailuser($where,'listpelanggan');		
		$this->load->view('waiter/wreaduser',$data);
	}

	/*function untuk membuka tambah user di view beserta membawa iduser*/
	function wtambahuser()
	{
		$data['idnya']=$this->Mwaiter->iduser();
			$this->load->view('waiter/wtambahuser',$data);
	}

	/*membuat function untuk memasukan user kedalam database*/
	function tambahuser_aksi()
	{
		/*variabel untuk memanggil iduser di model waiter*/
		$data['idnya']=$this->Mwaiter->iduser();
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Username','required|min_length[5]|max_length[15]');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('nama','Nama User','required');
		if ($this->form_validation->run()==false) {
			$this->load->view('waiter/wtambahuser',$data);
		}else{

		/*membuat variabel untuk menampung input post dari view*/
		$id_user = $this->input->post('id_user');
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$nama = $this->input->post('nama');
		$level = $this->input->post('level');

		$query = array('id_user'=>$id_user,'username'=>$username,'password'=>$password,'nama_user'=>$nama,'id_level'=>$level);
		$this->Mwaiter->inputuser($query);
		redirect('index.php/waiter/wlistuser');
	}
	}
	/*function untuk membuka view list order di owner*/
	public function wlistorder()
	{
		/*membuat variabel untuk menampung data dari model mowner function getorder setelah itu membuka view list masakan beserta mengirim variabel data*/
		$data['order']=$this->Mwaiter->getorder();
		$this->load->view('waiter/wlistorder', $data);
	}

	/*membuka view tambah order*/
	public function wtambahorder()
	{
		$this->load->view('waiter/wtambahorder');
	}
	/*membuka detail order berdasarkan id*/
	public function wreadorder($idorder)
	{

		$where = array('id_order'=>$idorder);
		$data['detail'] = $this->Mwaiter->order($where,'detailorder');		
		$this->load->view('waiter/wreadorder', $data);
	}

	/*membuka edit order berdasarkan id*/
	public function weditorder($idorder)
	{
		$where = array('id_order'=>$idorder);
		$data['ambil'] = $this->Mwaiter->editorder($where,'detailorder');
		$this->load->view('waiter/weditorder',$data);
	}

	/*memproses edit order berdasarkan id*/
	public function proseseditorder($id)
			{
			$data = array(
							'no_meja'=>$this->input->post('nomeja'),
							'tanggal_order'=> date('Y-m-d'),
							'status_order'=> $this->input->post('status')
			);
			//ar_dump($data);exit();
			$this->Mwaiter->updateorder($id,$data,'torder');
			redirect('index.php/waiter/wlistorder','refresh');
			}

/*membuka view laporan*/
	public function wlaporan()
	{
		
		$data['ambilorder'] = $this->Mwaiter->getwlaporan();
		$this->load->view('waiter/wlaporan', $data);
	}

/*membuka view list user*/
	function wlistuser()
	{
		$data['user']=$this->Mwaiter->getuser();
		$this->load->view('waiter/wlistuser', $data);
	}
/*membuka view list masakan*/
	function wlistmasakan()
	{
		$data['masakan']=$this->Mwaiter->getmasakan();
		$this->load->view('waiter/wlistmasakan', $data);
	}
/*membuka view menu*/
	public function menu2()
	{

		$data['masakan'] = $this->Mwaiter->getmasakan();
		$this->load->view('waiter/menu2', $data);

	}
/*membuka view order*/
public function pesanview()
	{

		$data['idorder'] = $this->Mwaiter->idorder();
		$this->load->view('waiter/order', $data);
	}

	/*functon untuk memasukan makanan/pesanan ke dalam cart berdasarkan id*/
public function addtocart($id)
	{
		/*membuat variabel untuk membawa idorder kehalaman view order di pelanggan*/
		$data1['idorder'] = $this->Mwaiter->idorder();
		/*membuat variabel untuk menampung data dari model mpelanggan function getcartmasakan, dari tabel masakan dan membawa id*/
		$ambildata=$this->Mwaiter->getcartmasakan('masakan',$id);
		/*membuat variabel untuk menampung data array berisi input post dari view, setelah itu cart di insert, kemudian akan diarahkan ke view order pelanggan membawa beserta id order*/
		$data = array(
        'id'      => $ambildata->id_masakan,
        'qty'     => 1,
        'price'   => $ambildata->harga,
        'name'    => $ambildata->nama_masakan,
        'options' => array('Keterangan' => 'isi disini'));
        /*membuat function untuk menampilkan cart*/
		$this->cart->insert($data);
		$this->load->view('waiter/order',$data1);
	}
/*membuat function untuk menampilkan cart*/
	public function showcart()
			{
				$lihatcart=$this->cart->contents();
				$this->load->view('waiter/order');
			}
/*membuat function untuk menghapus cart. yang sebenarnya cara kerjanya adalah menghapus qty menjadi 0 sehingga makanan akan menghilang dari cart*/
	public function removecart($rowid)
	{
		/*membuat variabel untuk membawa idorder kehalaman view order di pelanggan*/
		$data['idorder'] = $this->Mwaiter->idorder();
		$this->cart->update(array('rowid'=>$rowid, 'qty'=>0));
		$this->load->view('waiter/order',$data);

	}
	/*membuat function untuk mengecek sub-total cart yang disesuaikan dengan qty*/
	public function cekcart()
	{
		/*membuat variabel untuk membawa idorder kehalaman view order di pelanggan*/
		$data['idorder'] = $this->Mwaiter->idorder();
		$i=1;
		/*membuat foreach untuk memecah $this->cart->contents*/
		foreach ($this->cart->contents() as $masakan) {
			$this->cart->update(array('rowid'=>$masakan['rowid'], 'qty'=> $_POST['qty'.$i]));
			$i++; 
		}
		$this->load->view('waiter/order',$data);
	}
	/*membuat function untuk memasukan order yang ada di cart kedalam database*/
	public function addorder()
	{
		$data['order']=$this->Mwaiter->getorder();
		/*$iduser=$this->session->set_userdata('dataUser');*/
		$keterangan=$this->input->post('keterangan');
		$index=0;
		/*membuat variabel untuk menampung data array berisi input post dari view*/
		$data_order = array('id_order'=> $this->input->post('id_order'),
							'no_meja'=>$this->input->post('nomeja'),
							'tanggal_order'=> date('Y-m-d'),
							'id_user'=> $this->session->dataUser[0]->id_user,
							'status_order'=> 'Dipesan',
							);
		/*membuat variabel untuk menampung data dari model mpelanggan function tambah_order beserta membawa $data_order(data array diatas)*/
		$id_order = $this->Mwaiter->tambah($data_order);
		/*membuat if sekalian membuat variabel untuk menampung cart*/
		if ($cart = $this->cart->contents())
            {
                foreach ($cart as $item)
                    {
                        $data_detail = array('id_order' =>$data_order['id_order'],
                                        'id_masakan' => $item['id'],
                                        'qty' => $item['qty'],
                                        'keterangan' => $keterangan[$index],
                        				'status_detail_order' => 'Dipesan');
                        /*membuat variabel untuk menampung data dari model mpelanggan function tambah_detailo beserta membawa $data_detail(data array diatas)*/
                        $proses = $this->Mwaiter->adddetailo($data_detail);
                    }
            }
             /*membuat variabel untuk menampung data array berisi input post dari view*/
            $data_transaksi = array('id_order' => $data_order['id_order'],
        							'id_user'=>$this->session->dataUser[0]->id_user,
        							'id_transaksi'=>$this->Mwaiter->idtransaksi(),
        							'tanggal_transaksi'=>date('Y-m-d'),
        							'total_bayar'=>$this->cart->total());
            /*membuat variabel untuk menampung data dari model mpelanggan function tambah_transaksi beserta membawa $data_transaksi(data array diatas)*/
            	$proses_transaksi = $this->Mwaiter->addtransaksi($data_transaksi);


            $this->load->view('waiter/wlistorder', $data);
	}






}

/* End of file waiter.php */
/* Location: ./application/controllers/waiter.php */