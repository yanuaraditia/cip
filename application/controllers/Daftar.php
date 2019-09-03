<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Daftar extends CI_Controller {
    public function index()
    {
        $this->load->view('session_header');
        $this->load->view('register_content');
        $this->load->view('session_footer');
    }
}