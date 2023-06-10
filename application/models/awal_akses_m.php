<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class awal_akses_m extends CI_Model{

	function tampil_data_buku_terbaru(){
		return $this->db->get('buku_terbaru');
	}
    function tampil_data_rekomendasi_buku(){
		return $this->db->get('rekomendasi_buku');
	}
	
}