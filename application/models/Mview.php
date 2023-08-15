<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mview extends CI_Model {

/*function untuk login dari tabel user*/
	function login($user, $pass)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username', $user);
		$this->db->where('password', $pass);
		$this->db->limit(1);

		$query = $this->db->get();

		/*dicek apakah datanya ada atau engga*/
		if ($query->num_rows()>0) {
			return $query->result();

		}else{
			return false;
		}
	}
	
	

}

/* End of file mview.php */
/* Location: ./application/models/mview.php */