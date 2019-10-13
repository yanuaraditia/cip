<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainPage extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('M_lokasi');
		$this->load->helper('location');
    }
	public function index()
	{
		$batas = 5;
		$data = array(
			'bar' => 1,
			'list_lokasi' => $this->M_lokasi->list_lokasi($batas),
			'jml_lokasi' => $this->M_lokasi->jml_lokasi($batas)
		);
		$this->load->view('link_rel');
		$this->load->view('header',$data);
		$this->load->view('content');
        $this->load->view('footer');
		
	}
	function cari()
	{
		if($this->input->get('q')) {
			$data = array(
				'title' => 'Hasil untuk : "'.$this->input->get('q').'"',
				'bar' => 1,
				'list_lokasi'=> $this->M_lokasi->cari_lokasi($this->input->get('q')),
				'jml_lokasi' => $this->M_lokasi->jml_lokasi(5)
			);
			$this->load->view('link_rel',$data);
			$this->load->view('header');
			$this->load->view('content');
			$this->load->view('footer');
		}
	}
}
