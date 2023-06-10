<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class halaman_utama_m extends CI_Model{

	function tampil_data_buku_terbaru(){
		return $this->db->get('buku_terbaru');
	}
    function tampil_data_rekomendasi_buku(){
		return $this->db->get('rekomendasi_buku');
	}
	function tampil_data_history(){
		return $this->db->get('history');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
}

	
	
}