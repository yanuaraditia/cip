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
		$data = array(
			'profile' => $this->m_dash->show_me($this->session->userdata('email_user')),
			'title' => "Dashboard Paparkir"
		);
    	$this->load->view('link_rel',$data);
		$this->load->view('dashboard_v');
    	$this->load->view('footer');
    }
}