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
			'lokasi' => $this->M_mitra->lokasi_mitra($id_mitra),
			'antrian' => $this->M_mitra->antrian($this->M_mitra->lokasi_mitra($id_mitra)->kd_lokasi),
			'title' => 'Mitra Paparkir'
		);
		$this->load->view('link_rel',$data);
		$this->load->view('mitra_dash');
		$this->load->view('footer');
    }
	function tambah_slot() {
		$id_mitra = $this->session->userdata('id_mitra');
		if($this->input->post('lantai')) {
			$data = array(
				'nama_slot' => $this->input->post('nama'),
				'kd_lantai' => base64_decode($this->input->post('lantai'))
			);
			$this->M_mitra->tambah('slot',$data);
			redirect(base_url().'Mitra/tambah_lantai');
		}
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
		if($this->input->post('number')) {
			$data = array(
				'nama_lantai' => $this->input->post('nama'),
				'kd_lokasi' => $this->M_mitra->lokasi_mitra($id_mitra)->kd_lokasi,
				'tarif_lantai' => $this->input->post('number'),
				'kelas_lantai' => 1
			);
			$this->M_mitra->tambah('lantai',$data);
			redirect(base_url().'Mitra/tambah_lantai');
		}
		$data = array(
			'profile' => $this->M_mitra->show_me($this->session->userdata('email_mitra')),
			'lokasi' => $this->M_mitra->lokasi_mitra($id_mitra),
			'title' => 'Tambah Lantai'
		);
		$this->load->view('link_rel',$data);
		$this->load->view('mitra_tambah_lantai');
		$this->load->view('footer');
	}
	function kelola() {
		if($this->input->get('act')) {
			$kd_booking = base64_decode($this->input->get('id'));
			switch($this->input->get('act')) {
				case 'checkin':
					$this->M_mitra->update($kd_booking,1);
					redirect(base_url('Mitra'));
					break;
				case 'bayar':
					$this->M_mitra->update($kd_booking,2);
					$data = array(
						'kd_booking' => $kd_booking,
						'tanggal_bayar' => date('Y-m-d'),
						'id_mitra' => $this->session->userdata('id_mitra')
					);
					$this->M_mitra->tambah('transaksi',$data);
					redirect(base_url('Mitra'));
				case 'cancel':
					$this->M_mitra->update($kd_booking,2);
					$this->M_mitra->batal_book($kd_booking);
					redirect(base_url('Mitra'));
				break;
			}
		}
	}
	function invoice() {
		if($this->input->get('id')) {
			$id = base64_decode($this->input->get('id'));
			$invoice = $this->M_mitra->invoice($id);
			$export = array(
				'lokasi' => $this->M_mitra->lokasi_mitra($this->session->userdata('id_mitra')),
				'invoice' => $invoice
			);
			$this->load->view('link_rel');
			$this->load->view('invoice',$export);
			$this->load->view('footer');
		}
		else {
			redirect(base_url('Mitra'));
		}
	}
}