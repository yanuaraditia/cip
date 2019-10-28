<?php 
 
class Dashboard extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
		else {
			$this->load->model('M_dash');
			$this->load->helper('user');
		}
	}
	function index(){
		$id_user = $this->session->userdata('id_user');
		$email_user = $this->session->userdata('email_user');
		$data = array(
			'profile' => $this->M_dash->show_me($email_user),
			'title' => "Dashboard Paparkir",
			'booking' => $this->M_dash->booking_status($id_user),
			'riwayat' => $this->M_dash->show_history($id_user)
		);
    	$this->load->view('link_rel',$data);
		$this->load->view('dashboard_v');
    	$this->load->view('footer');
    }
	function profil() {
		$id_user = $this->session->userdata('id_user');
		$email_user = $this->session->userdata('email_user');
		$data = array(
			'profile' => $this->M_dash->show_me($email_user),
			'title' => "Ubah Profil",
			'booking' => $this->M_dash->booking_status($id_user),
			'riwayat' => $this->M_dash->show_history($id_user)
		);
    	$this->load->view('link_rel',$data);
		$this->load->view('user_profile');
		$this->load->view('footer');
		if($this->input->post()) {
			$nama_baru = $this->input->post('nama');
			$password_baru = $this->input->post('password');
			$data = array(
				'nama_user' => $nama_baru,
				'password' => password_hash($password_baru,PASSWORD_DEFAULT)
			);
			$this->M_dash->update_profile($this->session->userdata('id_user'),$data);
			redirect(base_url('dashboard'));
		}
	}
}