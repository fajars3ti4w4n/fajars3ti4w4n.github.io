<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class login_m extends CI_Model{

	function cek_user($username,$password)
	{
		$kondisi = array(

			'username' => $username,
			'password' => $password,

		);

		$this->db->select('*');
		$this->db->from('user');	
		$this->db->where($kondisi);
		$this->db->limit(1);
		return $this->db->get();
	}
}