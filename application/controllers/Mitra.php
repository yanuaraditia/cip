<?php 
class Mitra extends CI_Controller{
	function index(){
		$data = array(
			'profile'=> $this->m_dash->show_me($this->session->userdata('email_user'))
		);
    	$this->load->view('link_rel');
		$this->load->view('dashboard_v',$data);
    	$this->load->view('footer');
    }
    function login()
    {
        $this->load->view('mitra_login');
    }
}