<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Daftar extends CI_Controller {
	function __construct(){
		parent::__construct();
		if($this->session->userdata('status') == "login"){
			redirect(base_url("dashboard"));
		}
	}
    public function index()
    {
        $this->load->view('session_header');
        $this->load->view('register_content');
        $this->load->view('session_footer');
    }
}