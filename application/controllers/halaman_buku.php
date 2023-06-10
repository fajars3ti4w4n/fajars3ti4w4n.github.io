<?php 

class halaman_buku extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('halaman_buku_m');
                $this->load->helper('url');
	}

	function index(){
		$data['buku'] = $this->halaman_buku_m->tampil_data()->result();
		$this->load->view('user/halaman_buku',$data);
	}
	function pinjam_buku(){

		$id_history = $this->input->post('id_history');
		$nama_peminjam = $this->input->post('nama_peminjam');
		$judul_buku = $this->input->post('judul_buku');
		$dipinjam_pada_tanggal = $this->input->post('dipinjam_pada_tanggal');
		$status = $this->input->post('status');

		$data = array(
			'id_history' => $id_history,
			'nama_peminjam' => $nama_peminjam,
			'judul_buku' => $judul_buku,
			'dipinjam_pada_tanggal' => $dipinjam_pada_tanggal,
			'status' => $status,
			
			);
 
		 $this->halaman_buku_m->input_data($data,'history');
		 $this->session->set_flashdata('notif',' <div class="row">
	   <div class="container">
		 <div class="col-md-6">
		  <div class="alert alert-success alert-dismissible fade show" role="alert">
		 <strong>Data Berhasil Ditambahkan!</strong> Silahkan Konfirmasi ke Admin!!!
		 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	   </div>
		 </div>
	 </div>');
		 redirect('history');
 }

}