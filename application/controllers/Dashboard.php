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
		$data['profile'] = $this->m_dash->show_me($this->session->userdata('email_user'));
    	$this->load->view('link_rel');
		$this->load->view('dashboard_v',$data);
    	$this->load->view('footer');
    }
}