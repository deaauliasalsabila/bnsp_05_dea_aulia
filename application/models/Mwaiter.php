<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mwaiter extends CI_Model {

/*function untuk membuat id user secara otomatis*/
	function iduser()
		{
			$this->db->select('RIGHT(user.id_user,3) as id_user', FALSE);
		  	$this->db->order_by('id_user','DESC');    
		  	$this->db->limit(1);    
			  $query = $this->db->get('user');      //cek dulu apakah ada sudah ada kode di tabel.    
			  if($query->num_rows() <> 0){      
			   //jika kode ternyata sudah ada.      
			   $data = $query->row();      
			   $kode = intval($data->id_user) + 1;    
			  }
			  else {      
			   //jika kode belum ada      
			   $kode = USR-0527-001;    
			  }
			  $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
			  $id = "USR-0527-".$kodemax;    // hasilnya USR-0527-001 dst.
		  	return $id;
		}

		/*function tambah user ke tabel user*/
			function inputuser($query)
				{
					$this->db->insert('user', $query);
					return $query;
				}

			/*functon untuk ambil data user di view listpelanggan*/
			function getuser()
			{
				return $this->db->get('listpelanggan')->result();
			}

			/*function untuk ambil data masakan di tabel masakan*/
			function getmasakan()
			{
				return $this->db->get('masakan')->result();
			}

			/*function untuk ambil data order di view lorder order dari id_order secara descending*/
			function getorder()
			{
				$this->db->from('lorder');
				$this->db->order_by("id_order","desc");
				return $this->db->get()->result();	
			}

			/*function untuk ambil count masakan di view v_cmasakan*/
			public function getcmasakan()
			{
				return $this->db->get('v_cmasakan')->result();
			}

			/*function untuk ambil count user di view v_cuser*/
			public function getcuser()
			{
				return $this->db->get('v_cuser')->result();
			}

			/*function untuk ambil count order di view v_corder*/
			public function getcorder()
			{
				return $this->db->get('v_corder')->result();
			}

			/*function untuk memflter data detail berdasarkan where*/
			function detailuser($where,$table)
			{
				return $this->db->get_where($table,$where)->result();
			}
			/*function untuk memflter data profil berdasarkan where*/
			function profil($where,$table)
			{
				return $this->db->get_where($table,$where)->result();
			}
			/*function untuk memflter data edit orderr berdasarkan where*/
			function editorder($where,$table)
			{
				return $this->db->get_where($table,$where)->result();
			}
			/*function untuk update tabel berdasarkan id user dan diupdate ke tabel user*/
			function update($id,$data)
			{
				$this->db->where('id_user',$id);
				$this->db->update('user',$data);
			}

			/*function untuk update tabel berdasarkan id user dan diupdate ke tabel torder*/
			function updateorder($id,$data)
			{
				$this->db->where('id_order',$id);
				$this->db->update('torder',$data);
			}

			/*function untuk membuat id order secara otomatis*/
			function idorder()
		{
			$this->db->select('RIGHT(torder.id_order,3) as id_order', FALSE);
		  	$this->db->order_by('id_order','DESC');    
		  	$this->db->limit(1);    
			$query = $this->db->get('torder');      //cek dulu apakah ada sudah ada kode di tabel.    
			  if($query->num_rows() <> 0){      
			   //jika kode ternyata sudah ada.      
			   $data = $query->row();      
			   $kode = intval($data->id_order) + 1;    
			  }
			  else {      
			   //jika kode belum ada      
			   $kode = 'ORD-0527-001';    
			  }

			  $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
			  $id = 'ORD-0527-'.$kodemax;    // hasilnya ORD-0527-001 dst.
		  	return $id;
		}
		/*function untuk membuat id transaksii secara otomatis*/
		function idtransaksi()
		{
			$this->db->select('RIGHT(transaksi.id_transaksi,3) as id_transaksi', FALSE);
		  	$this->db->order_by('id_transaksi','DESC');    
		  	$this->db->limit(1);    
			  $query = $this->db->get('transaksi');      //cek dulu apakah ada sudah ada kode di tabel.    
			  if($query->num_rows() <> 0){      
			   //jika kode ternyata sudah ada.      
			   $data = $query->row();      
			   $kode = intval($data->id_transaksi) + 1;    
			  }
			  else {      
			   //jika kode belum ada      
			   $kode = TRS-0527-001;    
			  }
			  $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
			  $id = "TSR-0527-".$kodemax;    // hasilnya TRS-0527-001 dst.
		  	return $id;
		}


		/*function untuk menambah data order ke database*/
		public function tambah_order($data)
    {
        $this->db->insert('torder', $data);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }
   /*function untuk menambah data detai order ke database*/
    public function tambah_detailo($data)
    {
        $this->db->insert('detail_order', $data);
    }
    /*function untuk menambah datatransaksi ke database*/
     public function tambah_transaksi($data)
    {
        $this->db->insert('transaksi', $data);
    }

	/*function untuk get cart di tabel masakan berdasarkan id masakan*/
	public function getcartmasakan($table,$id)
			{
				$this->db->where('id_masakan', $id);
				$ambildata=$this->db->get('masakan');
				return $ambildata->row();
			}


	function order($where, $table)
	{
		return $this->db->get_where($table,$where)->result();
	}

		/*get list laporan dari view listlaporan berdasarkan session*/
		function getwlaporan()
			{
				$id=$this->session->dataUser[0]->id_user;
				$this->db->where('id_user', $id);
				$query=$this->db->get('listlaporan');
				return $query->result();
			}

		/*function untuk menambah data order ke database*/
		public function tambah($data)
    {
        $this->db->insert('torder', $data);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }

    /*function untuk menambah datatransaksi ke database*/
     public function addtransaksi($data)
    {
        $this->db->insert('transaksi', $data);
    }

    
/*function untuk menambah data detai order ke database*/
    public function adddetailo($data)
    {
        $this->db->insert('detail_order', $data);
    }
}

/* End of file mwaiter.php */
/* Location: ./application/models/mwaiter.php */