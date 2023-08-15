<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller
{
	//Function ini untuk Logout
	public function index(){
		$this->session->sess_destroy();
		redirect('login','refresh');    
	}
}