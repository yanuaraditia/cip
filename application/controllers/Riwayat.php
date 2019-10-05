<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayat extends CI_Controller {
    function __construct(){
        parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
	public function index()
	{
		$data['bar'] = 2;
		$this->load->view('link_rel');
		$this->load->view('header',$data);
		$this->load->view('content_riwayat');
        $this->load->view('footer');
	}
}
