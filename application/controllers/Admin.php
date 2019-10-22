<?php 
 
class Admin extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('M_admin');
	}
 
	function index(){
        $data['lokasi'] = $this->M_admin->show_me();
		$this->load->view('link_rel',$data);
		$this->load->view('admin_dash');
		$this->load->view('footer');
    }
	function tambah_lokasi() {
		if($this->input->post()) {
			$data = array ( 
				'nama_lokasi' => $this->input->post('nama'),
				'lgtd_lokasi' => $this->input->post('longitude'),
				'lttd_lokasi' => $this->input->post('latitude'),
				'alamat_lokasi' => $this->input->post('alamat'),
				'notelp_lokasi' => $this->input->post('notelp')
			);
			$this->M_admin->tambah($data,'lokasi');
		}
		redirect(base_url('Admin'));
	}
	function tambah_mitra() {
		if($this->input->post()) {
			$data = array ( 
				'nama_mitra' => $this->input->post('nama'),
				'email_mitra' => $this->input->post('email'),
				'password' => password_hash($this->input->post('password'),PASSWORD_DEFAULT),
				'kd_lokasi' => $this->input->post('lokasi')
			);
			$this->M_admin->tambah($data,'mitra');
		}
		redirect(base_url('Admin'));
	}
}