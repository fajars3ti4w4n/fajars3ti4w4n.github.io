<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->library('session');
        $this->load->helper('url');
		$this->load->model('login_m','lm');
	}
	
	function index(){
        
            $this->load->view('login');
    }
    
	public function autentikasi()
	{
		
		
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$cek = $this->lm->cek_user($username,$password);

		if($cek !== FALSE && $cek->num_rows() == 1) {
			foreach($cek->result() as $data){
				$user = array(
					'level' => $data->level
				);
				if ($data->level == 1){
					redirect(base_url("admin_halaman_utama"));
				}elseif ($data->level == 2){
					redirect(base_url("halaman_utama"));
				}else{
					echo "tidak masuk kategori";
				}
			}
		}else{
			$this->session->set_flashdata('error',' <div class="row">
			<div class="container">
				<div class="col-md-12">
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Login Gagal!!!</strong> Pastikan Username dan Password Benarl
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
				</div>
		</div>');
		}	redirect(base_url("login"));
	}

	public function logout(){
		$this->session->userdata('username');
			session_destroy();
		redirect('awal_akses');
	}
}
?>