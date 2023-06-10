<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('auth');
	}

	public function index()
	{
		$this->load->view('vw_register');
	}

	public function proses()
	{
        $this->form_validation->set_rules('email', 'email','trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('username', 'username','trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('password', 'password','trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('level');

		if ($this->form_validation->run()==true)
	   	{
            $email = $this->input->post('email');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
            $level = $this->input->post('level');
			
			$this->auth->register($email,$username,$password,$level);
			$this->session->set_flashdata('success_register',' <div class="row">
			<div class="container">
				<div class="col-md-12">
				<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Akun berhasil di buat!</strong> Silahkan Login
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
				</div>
		</div>');
			redirect('login');
		}
		else
		{
			$this->session->set_flashdata('error', validation_errors());
			redirect('register');
		}
	}
}