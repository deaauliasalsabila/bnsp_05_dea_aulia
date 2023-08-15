<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpelanggan extends CI_Model {

	/*function ambil masakan dari tabel masakan*/
	function getmasakan()
			{
				return $this->db->get('masakan')->result();
			}
/*function untuk memflter data tabel berdasarkan where*/
	function profil($where,$table)
			{
				return $this->db->get_where($table,$where)->result();
			}
/*function untuk memflter data tabel berdasarkan where*/
			function order($where,$table)
			{
				return $this->db->get_where($table,$where)->result();
			}
/*function untuk update tabel berdasarkan id user dan diupdate ke tabel user*/
	function update($id,$data)
			{
				$this->db->where('id_user',$id);
				$this->db->update('user',$data);
			}
/*function untuk get cart di tabel masakan berdasarkan id masakan*/
			public function getcartmasakan($table,$id)
			{
				$this->db->where('id_masakan', $id);
				$ambildata=$this->db->get('masakan');
				return $ambildata->row();
			}

/*function untuk membuat id order secara otomatis*/
	function idorder()
		{
			$this->db->select('RIGHT(torder.id_order,3) as id_order', FALSE);
		  	$this->db->order_by('id_order','DESC');    
		  	$this->db->limit(1);    
			$query = $this->db->get('torder');      //cek apakah ada sudah ada kode di tabel.    
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

		/*function untuk menambah data order ke database*/
		public function tambah_order($data)
    {
        $this->db->insert('torder', $data);
        $id = $this->db->insert_id();
        return (isset($id)) ? $id : FALSE;
    }

    /*function untuk menambah datatransaksi ke database*/
     public function tambah_transaksi($data)
    {
        $this->db->insert('transaksi', $data);
    }

    
    /*function untuk menambah data detai order ke database*/
    public function tambah_detailo($data)
    {
        $this->db->insert('detail_order', $data);
    }

			/*public function getcartdetmasakan($table,$id)
			{
				$this->db->where('id_detail_order', $id);
				$ambildatadet=$this->db->get('detail_order');
				return $ambildatadet->row();
			}
*/

	/*function untuk nge get list riwayat berdasarka session id user, dari view listlaporan dan order descending*/
	function getriwayat()
			{
				$id=$this->session->dataUser[0]->id_user;
				$this->db->where('id_user', $id);
				$this->db->from('listlaporan');
				$this->db->order_by("id_order", "desc");
				return $this->db->get()->result();
			}
			
/*function untuk memflter data tabel berdasarkan where*/
	function dataorder($where, $table)
	{
		return $this->db->get_where($table, $where)->result();
	}

			
}

/* End of file mpelanggan.php */
/* Location: ./application/models/mpelanggan.php */