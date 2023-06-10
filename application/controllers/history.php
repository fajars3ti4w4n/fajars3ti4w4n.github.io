<?php 

class history extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('history_m');
                $this->load->helper('url');
	}

	function index(){
		$data['history'] = $this->history_m->tampil_data()->result();
		$this->load->view('user/history',$data);
	}

}