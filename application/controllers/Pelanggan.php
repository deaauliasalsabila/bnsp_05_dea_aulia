<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		/*membuat if untuk memastikan bahwa yang bisa mengakses controller pelanggan adalah user dengan id level 5(pelanggan), yang id levelnya bukan = 5 akan di redirect ke halaman login awal*/
		if ($this->session->userdata('id_level')!=="5") {
			redirect('index.php/view/vlogin');
		}
		/*function untuk menghubungkan controller pelanggan dengan model mpelanggan di folder model*/
		$this->load->model('mpelanggan');
		/*function untuk me-load library cart karna saya memakai cart didalam aplikasi ini*/
		$this->load->library('cart');
	}

/*function index dari controller pelanggan (keluar ketika pertama kali membuka controller pelanggan pada browser)*/
	public function index()
	{
		$this->load->view('pelanggan/home');		
	}
/*function untuk membuka view riwayat order di pelanggan*/
public function priwayatorder()
	{
		/*membuat variabel untuk menampung data dari model mpelanggan function getriwayat setelah itu membuka view list riwayat beserta mengirim variabel data*/
		$data['riwayat'] = $this->mpelanggan->getriwayat();
		$this->load->view('pelanggan/priwayatorder',$data);
	}



	/*function untuk membuka view menu(sudah login)*/
	public function menu2()
	{
		/*membuat variabel untuk menampung data dari model mpelanggan function getmasakan setelah itu membuka view menu beserta mengirim variabel data*/
		$data['masakan'] = $this->mpelanggan->getmasakan();
		
		$this->load->view('pelanggan/menu2', $data);
		
	}

/*function untuk membuka view order*/
public function pesanview()
	{
		/*membuat variabel untuk menampung data dari model mpelanggan function idorder(function berisi kode otomatis untuk id order) setelah itu membuka view order beserta mengirim variabel data*/
		$data['idorder'] = $this->mpelanggan->idorder();
		$this->load->view('pelanggan/order', $data);
	}

	/*function untuk membuka view profil berdasarkan id user*/
	public function pprofil($iduser)
	{
		/*membuat variabel untuk menampung id user*/
		$where = array('id_user'=>$iduser);
		/*membuat variabel untuk menampung data dari model mpelanggan function profil setelah itu membuka view profil beserta membawa variabel data*/
		$data['ambil'] = $this->mpelanggan->profil($where,'user');
		$this->load->view('pelanggan/pprofil', $data);
	}

	/*function untuk membuka view edit profil berdasarkan id user*/
	public function peditprofil($iduser)
	{
		/*membuat variabel untuk menampung id user*/
		$where = array('id_user'=>$iduser);
		/*membuat variabel untuk menampung data dari model mpelanggan function profil setelah itu membuka view edit profil beserta membawa variabel data*/
		$data['ambil'] = $this->mpelanggan->profil($where,'user');	
		$this->load->view('pelanggan/peditprofil', $data);
	}

	/*function untuk proses edit memakai id, dipanggil ketika user mengklik tombol edit pada halama edit user. */
	public function prosesedit($id)
			{
		$where = array('id_user'=>$id);
		$data['ambil'] = $this->mpelanggan->profil($where,'user');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Username','required|min_length[5]|max_length[15]');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('nama_user','Nama User','required');
		if ($this->form_validation->run()==false) {
			$this->load->view('pelanggan/peditprofil',$data);
		}else{

			/*membuat variabel untuk menampung data array berisi input post dari view*/
			$data = array(
				'username'=> $this->input->post('username'),			
				'password'=> $this->input->post('password'),
				'nama_user'=> $this->input->post('nama_user'),
			);
			/*setelah itu masuk ke model mpelanggan function update beserta membawa variabel id, data dan tabel user, lalu di redirect ke function index dari controller pelanggan*/
			$this->mpelanggan->update($id,$data,'user');
			redirect('index.php/pelanggan/index','refresh');
			}		
}
	/*functon untuk membuka view home*/
	public function home()
	{
		$this->load->view('home');
	}

	/*functon untuk memasukan makanan/pesanan ke dalam cart berdasarkan id*/
	public function addtocart($id)
	{
		/*membuat variabel untuk membawa idorder kehalaman view order di pelanggan*/
		$data1['idorder'] = $this->mpelanggan->idorder();
		/*membuat variabel untuk menampung data dari model mpelanggan function getcartmasakan, dari tabel masakan dan membawa id*/
		$ambildata=$this->mpelanggan->getcartmasakan('masakan',$id);
		/*membuat variabel untuk menampung data array berisi input post dari view, setelah itu cart di insert, kemudian akan diarahkan ke view order pelanggan membawa beserta id order*/
		$data = array(
        'id'      => $ambildata->id_masakan,
        'qty'     => 1,
        'price'   => $ambildata->harga,
        'name'    => $ambildata->nama_masakan,
        'options' => array('Keterangan' => 'isi disini'));
		$this->cart->insert($data);
		$this->load->view('pelanggan/order',$data1);
	}
	/*membuat function untuk menampilkan cart*/
	public function showcart()
			{
				$lihatcart=$this->cart->contents();
				$this->load->view('pelanggan/order');
			}
	/*membuat function untuk menghapus cart. yang sebenarnya cara kerjanya adalah menghapus qty menjadi 0 sehingga makanan akan menghilang dari cart*/
	public function removecart($rowid)
	{
		/*membuat variabel untuk membawa idorder kehalaman view order di pelanggan*/
		$data['idorder'] = $this->mpelanggan->idorder();
		$this->cart->update(array('rowid'=>$rowid, 'qty'=>0));
		$this->load->view('pelanggan/order',$data);

	}

	/*membuat function untuk mengecek sub-total cart yang disesuaikan dengan qty*/
	public function cekcart()
	{
		/*membuat variabel untuk membawa idorder kehalaman view order di pelanggan*/
		$data['idorder'] = $this->mpelanggan->idorder();
		$i=1;
		/*membuat foreach untuk memecah $this->cart->contents*/
		foreach ($this->cart->contents() as $masakan) {
			$this->cart->update(array('rowid'=>$masakan['rowid'], 'qty'=> $_POST['qty'.$i]));
			$i++; 
		}
		$this->load->view('pelanggan/order',$data);
	}

	/*membuat function untuk memasukan order yang ada di cart kedalam database*/
	public function addorder()
	{
		/*meload model mwaiter agar function tidak bikin dua kali*/
		$this->load->model('Mwaiter');
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
		$id_order = $this->mpelanggan->tambah_order($data_order);
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
                        $proses = $this->mpelanggan->tambah_detailo($data_detail);
                    }
            }
            /*membuat variabel untuk menampung data array berisi input post dari view*/
            $data_transaksi = array('id_order' => $data_order['id_order'],
        							'id_user'=>$this->session->dataUser[0]->id_user,
        							'id_transaksi'=>$this->Mwaiter->idtransaksi(),
        							'tanggal_transaksi'=>date('Y-m-d'),
        							'total_bayar'=>$this->cart->total());
             /*membuat variabel untuk menampung data dari model mpelanggan function tambah_transaksi beserta membawa $data_transaksi(data array diatas)*/
            	$proses_transaksi = $this->mpelanggan->tambah_transaksi($data_transaksi);


            $this->load->view('pelanggan/home');
	}

	/*function untuk membuka detail order berdasarkan id order*/
	public function pdetailorder($id)
	{
		$where = array('id_order'=>$id);
		$data['detail'] = $this->mpelanggan->dataorder($where,'detailorder');
			
		$this->load->view('pelanggan/pdetailorder', $data);
	}
}

/* End of file pelanggan.php */
/* Location: ./application/controllers/pelanggan.php */