<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainPage extends CI_Controller {
    function __construct(){
            parent::__construct();
            $this->load->model('m_lokasi');

    }
	public function index()
	{
		$data = array('list_lokasi'=>$this->m_lokasi->list_lokasi(),'bar'=>1);
		$this->load->view('header',$data);
		$this->load->view('content');
        $this->load->view('footer');
	}
}
