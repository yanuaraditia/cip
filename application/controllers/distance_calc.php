<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
class Distance_Calc extends CI_Controller {
    public function index()
    {
        $this->load->helper('location');
    }
}