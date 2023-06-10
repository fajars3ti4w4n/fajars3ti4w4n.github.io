<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin_halaman_utama extends CI_Controller {

    function __construct(){
		parent::__construct();		
		$this->load->model('buku_terbaru_m');
        $this->load->model('rekomendasi_buku');
                $this->load->helper('url');
	}

    // if (!$this->session->userdata('logged')) {
    //     $url = base_url('login');
    //     redirect($url);
    // }

    function index(){
		$data['buku_terbaru'] = $this->buku_terbaru_m->tampil_data()->result();
        $data['rekomendasi_buku'] = $this->rekomendasi_buku->tampil_data()->result();
		$this->load->view('admin/halaman_utama',$data);
	}
        function update(){
            $id_buku = $this->input->post('id_buku');
            $judul_buku_terbaru = $this->input->post('judul_buku_terbaru');
            $caption_buku_terbaru = $this->input->post('caption_buku_terbaru');
            $gambar_buku = $_FILES['gambar_buku'];
            if ($gambar_buku=''){}else{
                $config['upload_path']          = 'assets/buku_terbaru';
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
                'judul_buku_terbaru' => $judul_buku_terbaru,
                'caption_buku_terbaru' => $caption_buku_terbaru,
                'gambar_buku' => $gambar_buku,
            );
            $where = array(
                'id_buku' => $id_buku
            );
            $this->buku_terbaru_m->update_data($where,$data,'buku_terbaru');
            $this->session->set_flashdata('notif',' <div class="row">
        <div class="container">
            <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Selamat!</strong> Data Berhasil Di Perbaharui!!!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
            </div>
    </div>');
            redirect('admin_halaman_utama');
        }
    
    }

    function update_rekomendasi_buku(){
        $id_rekomendasi = $this->input->post('id_rekomendasi');
        $gambar_buku_1 = $_FILES['gambar_buku_1'];
        if ($gambar_buku_1=''){}else{
            $config['upload_path']          = 'assets/rekomendasi_buku';
                    $config['allowed_types']        = 'gif|jpg|png|jpeg|svg';
                    $config['max_size']             = 5000;
                    $config['max_width']            = 5000;
                    $config['max_height']           = 5000;
    
                    $this->upload->initialize($config);
    
                    if ( ! $this->upload->do_upload('gambar_buku_1'))
                    {
                           echo "gagal";
                    }
                    else
                    {
                           $gambar_buku_1=$this->upload->data('file_name');
                    }
        $judul_buku_1 = $this->input->post('judul_buku_1');
        $keterangan_buku_1 = $this->input->post('keterangan_buku_1');
        $gambar_buku_2 = $_FILES['gambar_buku_2'];
        if ($gambar_buku_2=''){}else{
            $config['upload_path']          = 'assets/rekomendasi_buku';
                    $config['allowed_types']        = 'gif|jpg|png|jpeg|svg';
                    $config['max_size']             = 5000;
                    $config['max_width']            = 5000;
                    $config['max_height']           = 5000;
    
                    $this->upload->initialize($config);
    
                    if ( ! $this->upload->do_upload('gambar_buku_2'))
                    {
                           echo "gagal";
                    }
                    else
                    {
                           $gambar_buku_2=$this->upload->data('file_name');
                    }
        $judul_buku_2 = $this->input->post('judul_buku_2');
        $keterangan_buku_2 = $this->input->post('keterangan_buku_2');
        $gambar_buku_3 = $_FILES['gambar_buku_3'];
        if ($gambar_buku_3=''){}else{
            $config['upload_path']          = 'assets/rekomendasi_buku';
                    $config['allowed_types']        = 'gif|jpg|png|jpeg|svg';
                    $config['max_size']             = 5000;
                    $config['max_width']            = 5000;
                    $config['max_height']           = 5000;
    
                    $this->upload->initialize($config);
    
                    if ( ! $this->upload->do_upload('gambar_buku_3'))
                    {
                           echo "gagal";
                    }
                    else
                    {
                           $gambar_buku_3=$this->upload->data('file_name');
                    }
        $judul_buku_3 = $this->input->post('judul_buku_3');
        $keterangan_buku_3 = $this->input->post('keterangan_buku_3');
        $gambar_buku_4 = $_FILES['gambar_buku_4'];
        if ($gambar_buku_4=''){}else{
            $config['upload_path']          = 'assets/rekomendasi_buku';
                    $config['allowed_types']        = 'gif|jpg|png|jpeg|svg';
                    $config['max_size']             = 5000;
                    $config['max_width']            = 5000;
                    $config['max_height']           = 5000;
    
                    $this->upload->initialize($config);
    
                    if ( ! $this->upload->do_upload('gambar_buku_4'))
                    {
                           echo "gagal";
                    }
                    else
                    {
                           $gambar_buku_4=$this->upload->data('file_name');
                    }
        $judul_buku_4 = $this->input->post('judul_buku_4');
        $keterangan_buku_4 = $this->input->post('keterangan_buku_4');
        $gambar_buku_5 = $_FILES['gambar_buku_5'];
        if ($gambar_buku_5=''){}else{
            $config['upload_path']          = 'assets/rekomendasi_buku';
                    $config['allowed_types']        = 'gif|jpg|png|jpeg|svg';
                    $config['max_size']             = 5000;
                    $config['max_width']            = 5000;
                    $config['max_height']           = 5000;
    
                    $this->upload->initialize($config);
    
                    if ( ! $this->upload->do_upload('gambar_buku_5'))
                    {
                           echo "gagal";
                    }
                    else
                    {
                           $gambar_buku_5=$this->upload->data('file_name');
                    }
        $judul_buku_5 = $this->input->post('judul_buku_5');
        $keterangan_buku_5 = $this->input->post('keterangan_buku_5');

        $data = array(
            'id_rekomendasi' => $id_rekomendasi,
            'gambar_buku_1' => $gambar_buku_1,
            'judul_buku_1' => $judul_buku_1,
            'keterangan_buku_1' => $keterangan_buku_1,
            'gambar_buku_2' => $gambar_buku_2,
            'judul_buku_2' => $judul_buku_2,
            'keterangan_buku_2' => $keterangan_buku_2,
            'gambar_buku_3' => $gambar_buku_3,
            'judul_buku_3' => $judul_buku_3,
            'keterangan_buku_3' => $keterangan_buku_3,
            'gambar_buku_4' => $gambar_buku_4,
            'judul_buku_4' => $judul_buku_4,
            'keterangan_buku_4' => $keterangan_buku_4,
            'gambar_buku_5' => $gambar_buku_5,
            'judul_buku_5' => $judul_buku_5,
            'keterangan_buku_5' => $keterangan_buku_5,

        );
        $where = array(
            'id_rekomendasi' => $id_rekomendasi
        );
        $this->rekomendasi_buku->update_data($where,$data,'rekomendasi_buku');
        $this->session->set_flashdata('notif',' <div class="row">
      <div class="container">
        <div class="col-md-6">
         <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Selamat!</strong> Data Berhasil Di Perbaharui!!!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
        </div>
    </div>');
        redirect('admin_halaman_utama');
    }

    
}
}
}
    }
}
}