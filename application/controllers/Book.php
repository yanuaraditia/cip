<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller {
    function __construct(){
        parent::__construct();
		if($this->session->userdata('status') != "login" or $this->session->userdata('booking') == 'ada'){
			redirect(base_url("login"));
		}
		else {
			$this->load->model('m_book');
			$this->load->helper('location');
		}
	}
	public function index()
	{
		if($this->input->get('id')) {
			$kd_lokasi = base64_decode($this->input->get('id'));
			$data = array(
				'title' => "Booking Slot Parkir",
				'list_lantai' => $this->m_book->list_lantai(),
				'bar' => 1,
				'detail_lokasi' => $this->m_book->detail_lokasi()
			);
			$this->load->view('link_rel',$data);
			$this->load->view('header');
			$this->load->view('content_book');
			$this->load->view('footer');
		}
		else {
			header('location:mainpage');
		}
	}
	function confirm()
	{
		if($this->input->get('kd')) {
			$this->load->model('m_dash');
			$id_user = $this->m_dash->show_me($this->session->userdata('email_user'))->result_array();
			foreach($id_user as $doit) {
				$id_user = $doit['id_user'];
			}
			$data = array(
				'kd_slot' => base64_decode($this->input->get('kd')),
				'tgl_booking' => date('Y-m-d'),
				'status' => 0,
				'id_user' => $id_user
			);
			$this->m_book->book_confirm($data);
			$this->session->set_userdata('booking','ada');
			redirect(base_url()."dashboard");
		}
	}
}
