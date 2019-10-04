<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayat extends CI_Controller {
	public function index()
	{
		$data['bar'] = 2;
		$this->load->view('header',$data);
		$this->load->view('content_riwayat');
        $this->load->view('footer');
	}
}
