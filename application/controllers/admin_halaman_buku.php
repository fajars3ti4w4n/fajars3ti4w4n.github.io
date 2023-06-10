<?php 

class admin_halaman_buku extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('admin_buku_m');
                $this->load->helper('url');
	}

	function index(){
		$data['buku'] = $this->admin_buku_m->tampil_data()->result();
		$this->load->view('admin/halaman_buku',$data);
	}
	function tambah_aksi(){
		$id_buku = $this->input->post('id_buku');
		 $judul_buku = $this->input->post('judul_buku');
		 $caption_buku = $this->input->post('caption_buku');
		 $penulis_buku = $this->input->post('penulis_buku');
		 $tahun_terbit = $this->input->post('tahun_terbit');
		 $penerbit = $this->input->post('penerbit');
		 $jumlah_halaman = $this->input->post('jumlah_halaman');
		 $keterangan = $this->input->post('keterangan');
		 $gambar_buku = $this->input->post('gambar_buku');
		 if ($gambar_buku=''){}else{
		 $config['upload_path']          = 'assets/buku/';
				 $config['allowed_types']        = 'gif|jpg|png|jpeg|svg';
				 $config['max_size']             = 5000;
				 $config['max_width']            = 5000;
				 $config['max_height']           = 5000;
 
				 $this->upload->initialize($config);
 
				 if ( ! $this->upload->do_upload('gambar_buku'))
				 {
						echo "gagal";
				 }
				 else
				 {
						$gambar_buku=$this->upload->data('file_name');
				 }
 
  
		 $data = array(
			 'id_buku' => $id_buku,
			 'judul_buku' => $judul_buku,
			 'caption_buku' => $caption_buku,
			 'penulis_buku' => $penulis_buku,
			 'tahun_terbit' => $tahun_terbit,
			 'penerbit' => $penerbit,
			 'jumlah_halaman' => $jumlah_halaman,
			 'keterangan' => $keterangan,
			 'gambar_buku' => $gambar_buku,
			 );
 
		 $this->admin_buku_m->input_data($data,'buku');
		 $this->session->set_flashdata('notif',' <div class="row">
	   <div class="container">
		 <div class="col-md-6">
		  <div class="alert alert-success alert-dismissible fade show" role="alert">
		 <strong>Selamat!</strong> Buku Berhasil Ditambahkan!!!
		 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	   </div>
		 </div>
	 </div>');
		 redirect('admin_halaman_buku');
 }
} function update(){
	$id_buku = $this->input->post('id_buku');
		 $judul_buku = $this->input->post('judul_buku');
		 $caption_buku = $this->input->post('caption_buku');
		 $penulis_buku = $this->input->post('penulis_buku');
		 $tahun_terbit = $this->input->post('tahun_terbit');
		 $penerbit = $this->input->post('penerbit');
		 $jumlah_halaman = $this->input->post('jumlah_halaman');
		 $keterangan = $this->input->post('keterangan');
		 $gambar_buku = $this->input->post('gambar_buku');
		 
		 if ($gambar_buku=''){}else{
		 $config['upload_path']          = 'assets/buku/';
				 $config['allowed_types']        = 'gif|jpg|png|jpeg|svg|JPEG';
				 $config['max_size']             = 5000;
				 $config['max_width']            = 5000;
				 $config['max_height']           = 5000;
 
				 $this->upload->initialize($config);
 
				 if ( ! $this->upload->do_upload('gambar_buku'))
				 {
						echo "gagal";
				 }
				 else
				 {
						$gambar_buku=$this->upload->data('file_name');
				 }
				 $data = array(
					'id_buku' => $id_buku,
					'judul_buku' => $judul_buku,
					'caption_buku' => $caption_buku,
					'penulis_buku' => $penulis_buku,
					'tahun_terbit' => $tahun_terbit,
					'penerbit' => $penerbit,
					'jumlah_halaman' => $jumlah_halaman,
					'keterangan' => $keterangan,
					'gambar_buku' => $gambar_buku,
					);

					$where = array(
						'id_buku' => $id_buku
					);
	$this->admin_buku_m->update_data($where,$data,'buku');
	$this->session->set_flashdata('notif',' <div class="row">
      <div class="container">
        <div class="col-md-6">
         <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Selamat!</strong> Data Berhasil Diperbarui !!!

        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        </div>
    </div>');
	redirect('admin_halaman_buku');
}

}
public function hapus($id_buku)
{
	// Panggil model untuk menghapus data dari database
	$delete = $this->admin_buku_m->hapus_data($id_buku);

	if ($delete) {
		redirect('admin_halaman_buku');
		echo "Gagal menghapus data";
	} else {
		 echo "Gagal menghapus data";
		// Tampilkan pesan error atau lakukan tindakan lain
	}
}

}