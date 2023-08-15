<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//class ini untuk User ADMIN
class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//session uini khusu level admin
		if ($this->session->userdata('id_level') !== '1') {
			redirect('login','refresh');
		}

		$this->load->model('Admin_M');
		$this->load->library(array('cart'));

	}
	//Function ini untuk ke halaman Admin dan Dashboard
	public function index()
	{
		$data['count_user'] = $this->Admin_M->Count_user();
		$data['count_order'] = $this->Admin_M->Count_order();
		$data['count_transaksi'] = $this->Admin_M->Count_transaksi();
		$this->load->view('admin/dashboard_admin', $data);
	}
	//Function ini untuk ke Halaman List User
	public function v_all_dataUser()
	{
		$data['tampilUsers'] = $this->Admin_M->getAllUsers();
		$this->load->view('admin/data_user', $data);
	}
	//Function ini untuk Halaman Tambah User
	public function tambahDataUser()
	{
		$data['kode'] = $this->Admin_M->buatKode();
		$data['dataLevel'] = $this->Admin_M->Level();
		$this->load->view('admin/tambahDataUser', $data);
	}
	//Function ini untuk Proses Tambah User
	public function proses_tambahUser()
	{
			$data = array(
				'id_user' => $this->input->post('id_user'),
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password')),
				'nama_user' => $this->input->post('nama_user'),
				'id_level' => $this->input->post('id_level')
			);
			$this->Admin_M->tambah('user', $data);
			redirect('admin/v_all_dataUser','refresh');
	}
	//Function ini untuk ke Halaman edit Data User
	public function editDataUser($id)
	{
			$where  = array(
				'id_user' => $id
			);

			$data['tampilIdLevel'] = $this->Admin_M->Level();
			$data['user'] = $this->Admin_M->edit($where, 'user')->result();
			$this->load->view('admin/editDataUser', $data, FALSE);
	}
	//Function ini untuk Proses edit Data User
	public function proses_editDataUser($id)
	{
			$data = array(
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password')),
				'nama_user' => $this->input->post('nama_user'),
				'id_level'  => $this->input->post('id_level')
			);
			$this->Admin_M->edit_data($id, $data, 'user');
			redirect('admin/v_all_dataUser','refresh');						
	}
	//Functiion ini untuk melihat Detail Data User berdasarkan ID
	public function detailDataUser($id)
	{
		if ($this->session->has_userdata('dataUser')) {
			$where = array(
				'id_user' => $id
			);
			$data['tampilDataUser'] = $this->Admin_M->tampilUser($where, 'v_all_users');
			$this->load->view('admin/detailDataUser', $data);
		}else{
			redirect('login','refresh');
		}
	}
	//Function ini untuk hapus Data User berdasarkan ID
	public function hapusDataUser($id)
    	{
    			$where = array(
    				'id_user' => $id
    			);
    			$this->Admin_M->hapusData($where, 'user');
    			redirect('admin/v_all_dataUser','refresh');
    	}
    //Function ini untuk ke halaman profil berdasarkan session
	public function profil($id)
	{

			$where  = array(
				'id_user' => $id
			);

			$data['profil'] = $this->Admin_M->edit($where, 'v_all_users')->result();
			$this->load->view('admin/profil', $data);
	}
	//Function ini untuk Proses edit Profil yang berdasarkan session
	public function proses_editProfil($id)
	{
			$data = array(
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password')),
				'nama_user' => $this->input->post('nama_user'),
				'id_level'  => '1'
			);
			$this->Admin_M->edit_data($id, $data, 'user');
			redirect('admin/v_all_dataUser','refresh');						
	}
	//Function ini untuk ke Halaman List Data Masakan
	public function v_all_dataMasakan()
	{
			$data['tampilMasakan'] = $this->Admin_M->getAllMasakan();
			$this->load->view('admin/data_masakan', $data);
	}
	//Function ini untuk ke Halaman Form tambah Data Masakan 
	public function tambahDataMasakan()
	{
		$this->load->view('admin/tambahDataMasakan');
	}
	//Function ini untuk ke Proses Data Tambah Masakan
	public function proses_tambahMasakan()
	{
			$config['upload_path']         = './gambar/';   
			$config['allowed_types']        = 'jpeg|jpg|png';
            $config['max_size']  = '3000';
            $config['max_width']  = '1024';
            $config['max_height']  = '768';
            $config['overwrite']			= true;

            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('foto'))
            {
            	echo "<script>alert('gagal upload, size gambar terlalu besar');</script>";
            	redirect('admin/tambahDataMasakan/','refresh');
            }
            else
            {
            	$id_masakan = $this->input->post('id_masakan');
            	$nama_masakan = $this->input->post('nama_masakan');
            	$harga = $this->input->post('harga');
            	$status_masakan = $this->input->post('status_masakan');
            	$file = $this->upload->data();
            	$foto = $file['file_name'];

            	$this->Admin_M->tambahMasakan(array(
            		'id_masakan' => $id_masakan,
            		'nama_masakan' => $nama_masakan,
            		'harga' => $harga,
            		'status_masakan' => $status_masakan,
            		'foto' => $foto
            	));
            	$this->session->set_flashdata('msg','data berhasil di upload');
            	redirect('admin/v_all_dataMasakan');

            }
        }
        //Function ini untuk melihat Detail data Masakan berdasarakan ID
	public function detailDataMasakan()
	{
		$this->load->view('admin/detailDataMasakan');
	}
	//Function ini untuk ke form Halaman Edit Data Masakan berdasarkan ID
	public function editDataMasakan($id)
	{
		$where = array('id_masakan' => $id);
		$data['tampilEditMasakan'] = $this->Admin_M->edit($where, 'masakan')->result();
		$this->load->view('admin/editDataMasakan', $data);
	}
	//Function ini untuk Proses edit data masakan berdasarkan ID
	public function proses_editDataMasakan($id)
	{
    		$config['upload_path']         = './gambar/';   
            $config['allowed_types']        = 'jpeg|jpg|png'; 
            $config['max_size']  = '3000';
            $config['max_width']  = '1024';
            $config['max_height']  = '768';
            $config['overwrite']			= true;

            $this->load->library('upload', $config);
 		
            if ( ! $this->upload->do_upload('foto')) 
            {
            	echo "<script>alert('gagal upload, size gambar terlalu besar');</script>";
            	redirect('admin/tambahDataMasakan/','refresh');
            }
            else
            {
            
            	$nama_masakan = $this->input->post('nama_masakan');
            	$harga = $this->input->post('harga');
            	$status_masakan = $this->input->post('status_masakan');
            	$file = $this->upload->data();
            	$foto = $file['file_name'];

            	$data = array(
            		'nama_masakan' => $nama_masakan,
            		'harga' => $harga,
            		'status_masakan' => $status_masakan,
            		'foto' => $foto			
            	);
            	$this->Admin_M->edit_masakan($id, $data, 'masakan');
            	$this->session->set_flashdata('msg','data berhasil di upload');
            	redirect('admin/v_all_dataMasakan');
			}
	}
	//Function ini untuk Hapus Data Masakan Berdasarkan ID
	public function hapusDataMasakan($id)
	{
		$where = array('id_masakan' => $id);
		
		$this->Admin_M->hapusData($where, 'masakan');
    	redirect('admin/v_all_dataMasakan','refresh');

	}
	//FUnction ini untuk ke Halaman list Data Order
	public function v_all_dataOrder()
    {
    	$data['tampilOrder'] = $this->Admin_M->getAllOrder();
    	$this->load->view('admin/data_order', $data);
    }
    //Function ini untuk ke Halaman Form Data Order
	public function tambahDataOrder()
	{
		$data['getMasakan'] = $this->Admin_M->getAllMasakan();
    	$this->load->view('admin/tambahDataOrder', $data);
	}
	//Function ini untuk tambah Pesanan berdasarkan ID dan untuk memasukkan Ke Keranjang
	public function tambahPesanan($id)
	{
		$data1['kodeOrder'] = $this->Admin_M->buatKodeOrder();
    	$data1['kodeTransaksi'] = $this->Admin_M->buatKodeTransaksi();
    	$ambildata=$this->Admin_M->getKeranjangMasakan('masakan',$id);
    	$data = array(
    		'id'      => $ambildata->id_masakan,
    		'qty'     => 1,
    		'price'   => $ambildata->harga,
    		'name'    => $ambildata->nama_masakan,
    		'options' => array('Keterangan' => 'isi disini'));
    	$this->cart->insert($data);
    	$this->load->view('admin/keranjang',$data1);
	}
	//Function ini untuk menyimpan Data yang ingin di pesan dan di Masukan ke halaman ini
	public function keranjang()
	{
		echo '<pre>';
    	$data = $this->cart->contents();
    	$this->load->view('admin/keranjang', $data);
	}
	//Function ini untuk menghapus data Pesanan yang tidak jadi di Pesan
	public function hapusKeranjang($rowid)
    {
    	$data1['kodeOrder'] = $this->Admin_M->buatKodeOrder();
    	$data1['kodeTransaksi'] = $this->Admin_M->buatKodeTransaksi();
    	$this->cart->update(array('rowid' => $rowid , 'qty' => 0));
    	$this->load->view('admin/keranjang', $data1);
    }
     public function editKeranjang()
    {
    	$i = 1;
    	foreach ($this->cart->contents() as $masakan) {
    		$this->cart->update(array('rowid' => $masakan['rowid'], 'qty' => $_POST['qty'.$i]));
    		$i++;
    	}
    	redirect('admin/keranjang', 'refresh');    		

    }
    //Function ini untuk Proses Pesanan yang ada di Keranjang dan menyimpan data lebih dari satu tabel
    public function proses_tambahDataOrder()
    {
    	echo "<pre>";
    	print_r ($this->cart->contents());
    	echo "</pre>";
    	$keterangan=$this->input->post('keterangan');
    	$index=0;
    	$data = array(
    		'id_order' => $this->input->post('id_order'),
    		'id_user'  => $this->session->dataUser[0]->id_user,
    		'no_meja'  => $this->input->post('no_meja'),
    		'tanggal_order' => date('Y-m-d'),
    		'status_order' => 'Dipesan',
    	);
    	$id_order = $this->Admin_M->tambah('torder', $data);
    	if ($cart = $this->cart->contents())
    	{
    		foreach ($cart as $item )
    		{
    			
    			$order_detail = array(
    				'id_order' => $data['id_order'],
    				'id_masakan'  => $item['id'],
    				'qty'     => $item['qty'],
    				'subtotal'     => $item['subtotal'],
    				'keterangan' => $keterangan[$index],
    				'status_detail_order' => 'Dipesan'
    			);		

    			$detail_order = $this->Admin_M->tambah('detail_order', $order_detail);
    		}
    		
    	}

    	$transaksi = array(
    		'id_transaksi' => $this->input->post('id_transaksi'),
    		'id_user'  => $this->session->dataUser[0]->id_user,
    		'id_order' => $data['id_order'],
    		'tanggal_transaksi' => date('Y-m-d'),
    		'total_bayar' => $this->cart->total()
    	);		


    	$tambah = $this->Admin_M->tambah('transaksi', $transaksi);
    			// die();
    	redirect('admin/v_all_dataOrder');
    }
    //Function ini untuk ke Detail Data order yang berdasarkan ID
	 public function detailDataOrder($id)
    {
    	$where = array(
    		'id_order' => $id
    	);
    	$data['tampilDataOrder'] = $this->Admin_M->tampilOrder($where,'gettransaksi');
    	$this->load->view('admin/detailDataOrder', $data);
    }
    //Function ini untuk Edit Data Order 
	public function editDataOrder($id)
	{
		$where = array('id_order' => $id );
		$data['tampil'] = $this->Admin_M->tampilOrder($where,'gettransaksi');
		$data['tampilSubtotal'] = $this->Admin_M->tampilOrder($where,'detail_order');
		$this->load->view('admin/editDataOrder', $data);
	}
	//Function ini untuk Hapus Data Order bersarkan ID
	public function hapusDataOrder($id)
	{
		$where = array('id_order' => $id);
		
		$this->Admin_M->hapusData($where, 'torder');
    	redirect('admin/v_all_dataOrder','refresh');

	}
	//Function ini untuk ke Halaman List Data Transaksi
	 public function v_all_dataTransaksi()
    {
    	$data['tampilDataTransaksi'] = $this->Admin_M->getTransaksi();
    	$this->load->view('admin/data_transaksi', $data);
    }
    //Function ini untuk ke Halaman Detail Data Transaksi berdasarkan ID
    public function detailDataTransaksi($id)
    {
    	$where = array('id_order' => $id);
    	$data['dataTransaksi'] = $this->Admin_M->tampilOrder($where, 'gettransaksi');
    	$this->load->view('admin/detailDataTransaksi',$data);
    }
    //Function ini untuk ke Hapus Data Transaksi berdasarkan ID
    public function hapusDataTransaksi($id)
	{
		$where = array('id_transaksi' => $id);
		
		$this->Admin_M->hapusData($where, 'transaksi'); 	
    	redirect('admin/v_all_dataTransaksi','refresh');

	}
	//Function ini untuk ke Halamn list data Laporan
    public function v_all_dataLaporan()
	{
		$data['dataLaporan'] = $this->Admin_M->getLaporan();
		$this->load->view('admin/data_laporan', $data);
	}
	public function search()
	{
		$keyword = $this->input->post('tanggal_transaksi');
		$keyword2 = $this->input->post('tanggal_transaksi');
		$data['dataLaporan'] = $this->Admin_M->getLaporan();
		$data['cari'] = $this->Admin_M->laporan($keyword, $keyword2);
		$this->load->view('admin/data_laporan', $data);
	}
}