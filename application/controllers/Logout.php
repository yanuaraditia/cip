<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Logout extends CI_Controller {
	function index(){
        if($this->session->userdata('status') == "login") {
            $this->session->sess_destroy();
            redirect(base_url('login'));
        }
        else if($this->session->userdata('status_mitra') == "login") {
            $this->session->sess_destroy();
            redirect(base_url('Mitra_login'));
        }
	}
}