<?php 
 
class Dashboard extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
		else {
			$this->load->model('m_dash');
			$this->load->helper('user');
		}
	}
 
	function index(){
		$id_user = $this->session->userdata('id_user');
		$email_user = $this->session->userdata('email_user');
		$data = array(
			'profile' => $this->m_dash->show_me($email_user),
			'title' => "Dashboard Paparkir",
			'booking' => $this->m_dash->booking_status($id_user),
			'riwayat' => $this->m_dash->show_history($id_user)
		);
    	$this->load->view('link_rel',$data);
		$this->load->view('dashboard_v');
    	$this->load->view('footer');
    }
}