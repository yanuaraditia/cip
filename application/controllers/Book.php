<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('m_book');
		$this->load->helper('location');
    }
	public function index()
	{
		if(isset($_GET['id'])) {
			$data = array(
				'list_lantai'=>$this->m_book->list_lantai(),
				'bar'=>1,
				'detail_lokasi'=>$this->m_book->detail_lokasi()
			);
			$this->load->view('header',$data);
			$this->load->view('content_book');
			$this->load->view('footer');
		}
		else {
			header('location:mainpage');
		}
	}
}
