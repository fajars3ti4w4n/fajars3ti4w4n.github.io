<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_history_m extends CI_Model{

	function tampil_data(){
		return $this->db->get('history');
	}
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
}
	
}