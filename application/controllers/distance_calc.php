<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('cookie');        
class Distance_calc extends CI_Controller {
    public function index()
    {
        echo "";
    }
    public function get_latt()
    {
        if(!empty($this->input->get('latitude')) && !empty($this->input->get('longitude'))){
            $latt = trim($this->input->get('latitude'));
            $long = trim($this->input->get('longitude'));
            setcookie('latt',$latt,time()+3600);
            setcookie('long',$long,time()+3600);
        }
    }
}