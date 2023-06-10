<?php 

class awal_akses extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('awal_akses_m');
                $this->load->helper('url');
	}

	function index(){
		$data['buku_terbaru'] = $this->awal_akses_m->tampil_data_buku_terbaru()->result();
        $data['rekomendasi_buku'] = $this->awal_akses_m->tampil_data_rekomendasi_buku()->result();
		$this->load->view('awal_akses',$data);
	}

}