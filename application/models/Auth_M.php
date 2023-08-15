<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Auth_M extends CI_Model
{
	//Function untuk cek user ada atau tidak di database
	public function cekLogin($user, $pass)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username', $user);
		$this->db->where('password', $pass);
		$this->db->limit(1);
		$data =  $this->db->get();
		if ($data->num_rows() > 0) {
			return $data->result();
		}else{
			return false;
		}
	}
}