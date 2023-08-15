<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mowner extends CI_Model {

	/*function ambil masakan dari tabel masakan*/
	function getmasakan()
			{
				return $this->db->get('masakan')->result();
			}
	/*functon untuk ambil data transaksi dari tabel transaksi*/
	function gettransaksi()
			{
				return $this->db->get('transaksi')->result();
			}
	/*function untuk ambil count masakan di view v_cmasakan*/
	public function getcmasakan()
			{
				return $this->db->get('v_cmasakan')->result();
			}
/*function untuk ambil count transaksi di view v_ctransaksi*/
	public function getctransaksi()
			{
				return $this->db->get('v_ctransaksi')->result();
			}
	/*functon untuk memflter data tabel berdasarkan where*/
	function detailtrans($where, $table)
	{
		return $this->db->get_where($table,$where)->result();
	}
	/*function ambil transaksi dari view listlaporan*/
	function getransaksi()
			{
				return $this->db->get('listlaporan')->result();
			}

}

/* End of file mowner.php */
/* Location: ./application/models/mowner.php */