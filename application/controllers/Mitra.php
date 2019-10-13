<?php 
class Mitra extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('status_mitra') != "login") {
			redirect(base_url("Mitra_login"));
		}
		else {
			$this->load->helper('user');
			$this->load->model('M_mitra');
		}
	}
	function index(){
		$id_mitra = $this->session->userdata('id_mitra');
		$data = array(
			'profile' => $this->M_mitra->show_me($this->session->userdata('email_mitra')),
			'history' => $this->M_mitra->mitra_history($id_mitra),
			'antrian' => $this->M_mitra->antrian($id_mitra),
			'lokasi' => $this->M_mitra->lokasi_mitra($id_mitra),
			'title' => 'Mitra Paparkir'
		);
		$this->load->view('link_rel',$data);
		$this->load->view('mitra_dash');
		$this->load->view('footer');
    }
	function tambah_slot() {
		$id_mitra = $this->session->userdata('id_mitra');
		$data = array(
			'profile' => $this->M_mitra->show_me($this->session->userdata('email_mitra')),
			'lokasi' => $this->M_mitra->lokasi_mitra($id_mitra),
			'title' => 'Tambah Slot Baru'
		);
		$this->load->view('link_rel',$data);
		$this->load->view('mitra_tambah_slot');
		$this->load->view('footer');
	}
	function tambah_lantai() {
		$id_mitra = $this->session->userdata('id_mitra');
		$data = array(
			'profile' => $this->M_mitra->show_me($this->session->userdata('email_mitra')),
			'lokasi' => $this->M_mitra->lokasi_mitra($id_mitra),
			'title' => 'Tambah Lantai'
		);
		$this->load->view('link_rel',$data);
		$this->load->view('mitra_tambah_lantai');
		$this->load->view('footer');
	}
	function logout() {
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}