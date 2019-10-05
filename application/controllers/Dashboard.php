<?php 
 
class Dashboard extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));
		}
	}
 
	function index(){
    	$this->load->view('link_rel');
		$this->load->view('dashboard_v');
    	$this->load->view('footer');
    }
}