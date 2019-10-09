<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayat extends CI_Controller {
    function __construct(){
        parent::__construct();
		$this->load->model('m_history');
		$this->load->helper('user_helper');
	}
	public function index()
	{
		$data['bar'] = 2;
		$data = array(
			'bar' => 2,
			'riwayat' => $this->m_history->show_history()
		);
		$this->load->view('link_rel');
		$this->load->view('header',$data);
		$this->load->view('content_riwayat');
        $this->load->view('footer');
	}
}
