<?php 

class halaman_utama extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('halaman_utama_m');
                $this->load->helper('url');
	}

	function index(){
		$data['buku_terbaru'] = $this->halaman_utama_m->tampil_data_buku_terbaru()->result();
        $data['rekomendasi_buku'] = $this->halaman_utama_m->tampil_data_rekomendasi_buku()->result();
		$data['history'] = $this->halaman_utama_m->tampil_data_history()->result();
		$this->load->view('user/halaman_utama',$data);
	}

	function pinjam_buku1(){

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
 
		 $this->halaman_utama_m->input_data($data,'history');
		 $this->session->set_flashdata('notif',' <div class="row">
	   <div class="container">
		 <div class="col-md-6">
		  <div class="alert alert-success alert-dismissible fade show" role="alert">
		 <strong>Selamat!</strong> Data Berhasil Ditambahkan!!!
		 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	   </div>
		 </div>
	 </div>');
		 redirect('history');
 }

 function pinjam_buku2(){

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

	 $this->halaman_utama_m->input_data($data,'history');
	 $this->session->set_flashdata('notif',' <div class="row">
   <div class="container">
	 <div class="col-md-6">
	  <div class="alert alert-success alert-dismissible fade show" role="alert">
	 <strong>Selamat!</strong> Data Berhasil Ditambahkan!!!
	 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>
	 </div>
 </div>');
	 redirect('history');
}
function pinjam_buku3(){

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

	 $this->halaman_utama_m->input_data($data,'history');
	 $this->session->set_flashdata('notif',' <div class="row">
   <div class="container">
	 <div class="col-md-6">
	  <div class="alert alert-success alert-dismissible fade show" role="alert">
	 <strong>Selamat!</strong> Data Berhasil Ditambahkan!!!
	 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>
	 </div>
 </div>');
	 redirect('history');
}
function pinjam_buku4(){

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

	 $this->halaman_utama_m->input_data($data,'history');
	 $this->session->set_flashdata('notif',' <div class="row">
   <div class="container">
	 <div class="col-md-6">
	  <div class="alert alert-success alert-dismissible fade show" role="alert">
	 <strong>Selamat!</strong> Data Berhasil Ditambahkan!!!
	 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>
	 </div>
 </div>');
	 redirect('history');
}

function pinjam_buku5(){

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

	 $this->halaman_utama_m->input_data($data,'history');
	 $this->session->set_flashdata('notif',' <div class="row">
   <div class="container">
	 <div class="col-md-6">
	  <div class="alert alert-success alert-dismissible fade show" role="alert">
	 <strong>Selamat!</strong> Data Berhasil Ditambahkan!!!
	 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>
	 </div>
 </div>');
	 redirect('history');
}



}