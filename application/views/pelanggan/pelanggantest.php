<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('id_level')!=="5") {
			redirect('index.php/view/vlogin');
		}
		$this->load->model('mpelanggan');
		$this->load->library('cart');
	}

public function tes()
{
	$this->load->view('pelanggan/tes');
}

	public function index()
	{
		$this->load->view('pelanggan/home');		
	}

public function priwayatorder()
	{
		$this->load->view('pelanggan/priwayatorder');
	}

	public function pdetailorder($idorder)
	{
		$where = array('id_order'=>$idorder);
		$data['detail'] = $this->mpelanggan->order($where,'torder');
		
		$this->load->view('pelanggan/pdetailorder',$data);
	}

	
	public function menu2()
	{

		$data['masakan'] = $this->mpelanggan->getmasakan();
		$this->load->view('pelanggan/menu2', $data);

	}

public function pesanview()
	{

		$data['idorder'] = $this->mpelanggan->idorder();
		$this->load->view('pelanggan/order', $data);	
	}

	public function pprofil($iduser)
	{

		$where = array('id_user'=>$iduser);
		$data['ambil'] = $this->mpelanggan->profil($where,'user');
		$this->load->view('pelanggan/pprofil', $data);
	}

	public function peditprofil($iduser)
	{
		$where = array('id_user'=>$iduser);
		$data['ambil'] = $this->mpelanggan->profil($where,'user');	
		$this->load->view('pelanggan/peditprofil', $data);
	}

	public function prosesedit($id)
			{
			$data = array(
				'username'=> $this->input->post('username'),			
				'password'=> $this->input->post('password'),
				'nama_user'=> $this->input->post('nama_user'),
			);
			//ar_dump($data);exit();
			$this->mpelanggan->update($id,$data,'user');
			redirect('index.php/pelanggan/index','refresh');
			}		

	public function home()
	{
		$this->load->view('home');
	}

	public function addtocart($id)
	{
		$data1['idorder'] = $this->mpelanggan->idorder();
		$ambildata=$this->mpelanggan->getcartmasakan('masakan',$id);
		/*$ambildetail=$this->mpelanggan->getcartdetmasakan('detail_order',$id);*/
		$data = array(
        'id'      => $ambildata->id_masakan,
        'qty'     => 1,
        'price'   => $ambildata->harga,
        'name'    => $ambildata->nama_masakan,
        'options' => array('Keterangan' => 'isi disini'));
		$this->cart->insert($data);
		$this->load->view('pelanggan/order',$data1);
	}

	public function showcart()
			{
				$lihatcart=$this->cart->contents();
				$this->load->view('pelanggan/order');
			}

	public function removecart($rowid)
	{
		$data['idorder'] = $this->mpelanggan->idorder();
		$this->cart->update(array('rowid'=>$rowid, 'qty'=>0));
		$this->load->view('pelanggan/order',$data);

	}
/*
	function ubah_cart()
    {
        $cart_info = $_POST['cart'] ;
        foreach( $cart_info as $id => $cart)
        {
            $rowid = $cartss['roswid'];
            $price = $cart['price'];
            $gambar = $cart['gambar'];
            $amount = $price * $cart['qty'];
            $qty = $cart['qty'];
            $data = array('rowid' => $rowid,
                            'price' => $price,
                            'gambar' => $gambar,
                            'amount' => $amount,
                            'qty' => $qty);
            $this->cart->update($data);
        }
        redirect('shopping/tampil_cart');
    }*/
 
	public function cekcart()
	{
		$data['idorder'] = $this->mpelanggan->idorder();
		$i=1;

		foreach ($this->cart->contents() as $masakan) {
			$this->cart->update(array('rowid'=>$masakan['rowid'], 'qty'=> $_POST['qty'.$i]));
			$i++; 
		}
		$this->load->view('pelanggan/order',$data);
	}


	public function addorder()
	{
		/*$iduser=$this->session->set_userdata('dataUser');*/
		$keterangan=$this->input->post('keterangan');
		$index=0;
		$data_order = array('id_order'=> $this->input->post('id_order'),
							'no_meja'=>$this->input->post('nomeja'),
							'tanggal_order'=> date('Y-m-d'),
							'id_user'=> $this->session->dataUser[0]->id_user,
							'status_order'=> 'Dipesan',
							);
		$id_order = $this->mpelanggan->tambah_order($data_order);

		if ($cart = $this->cart->contents())
            {
                foreach ($cart as $item)
                    {
                        $data_detail = array('id_order' =>$data_order['id_order'],
                                        'id_masakan' => $item['id'],
                                        'qty' => $item['qty'],
                                        'keterangan' => $keterangan[$index],
                        				'status_detail_order' => 'Dipesan');
                        $proses = $this->mpelanggan->tambah_detailo($data_detail);
                    }
            }
            $this->load->view('pelanggan/home');
	}
}

/* End of file pelanggan.php */
/* Location: ./application/controllers/pelanggan.php */