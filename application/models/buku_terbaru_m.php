<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class buku_terbaru_m extends CI_Model{

	function tampil_data(){
		return $this->db->get('buku_terbaru');
	}
	function input_data($data,$table){
		$this->db->insert($table,$data);
}
 function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
}