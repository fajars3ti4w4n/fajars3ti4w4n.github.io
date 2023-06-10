<?php 

class admin_history extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('admin_history_m');
                $this->load->helper('url');
	}

	function index(){
		$data['history'] = $this->admin_history_m->tampil_data()->result();
		$this->load->view('admin/history',$data);
	}

	function update(){

		$id_history = $this->input->post('id_history');
		$judul_buku = $this->input->post('judul_buku');
		$dipinjam_pada_tanggal = $this->input->post('dipinjam_pada_tanggal');
		$dikembalikan_pada_tanggal = $this->input->post('dikembalikan_pada_tanggal');
		$status = $this->input->post('status');
	 
			$data = array(
				'id_history' => $id_history,
				'judul_buku' => $judul_buku,
				'dipinjam_pada_tanggal' => $dipinjam_pada_tanggal,
				'dikembalikan_pada_tanggal' => $dikembalikan_pada_tanggal,
				'status' => $status,
				
				);
	
		$where = array(
			'id_history' => $id_history
		);
	
		$this->admin_history_m->update_data($where,$data,'history');
		$this->session->set_flashdata('notif',' <div class="row">
		  <div class="container">
			<div class="col-md-6">
			 <div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Selamat!</strong> Data Berhasil Diperbarui !!!
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		  </div>
			</div>
		</div>');
		redirect('admin_history');
	}
	function hapus($id_history){
		$where = array('id_history' => $id_history);
		$this->admin_history_m->hapus_data($where,'history');
		$this->session->set_flashdata('notif',' <div class="row">
		  <div class="container">
			<div class="col-md-6">
			 <div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Selamat!</strong> Data Berhasil Dihapus !!!
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		  </div>
			</div>
		</div>');
		redirect('admin_history');
	}	

}