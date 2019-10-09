<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainPage extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('m_lokasi');
		$this->load->helper('location');
    }
	public function index()
	{
		$batas = 5;
		$data = array(
			'bar' => 1,
			'list_lokasi'=>$this->m_lokasi->list_lokasi($batas),
			'jml_lokasi'=>$this->m_lokasi->jml_lokasi($batas)
		);
		$this->load->view('link_rel');
		$this->load->view('header',$data);
		$this->load->view('content');
        $this->load->view('footer');
		
	}
	function cari()
	{
		if(isset($_GET['q'])) {
			$data = array(
				'bar' => 1,
				'list_lokasi'=>$this->m_lokasi->cari_lokasi($_GET['q']),
				'vew' => '../asset/style.css'
			);
			$this->load->view('link_rel',$data);
			$this->load->view('header');
			$this->load->view('content');
			$this->load->view('footer');
		}
	}
}
