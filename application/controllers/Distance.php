<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
class Distance extends CI_Controller {
    public function index()
    {
        if($this->input->post('latitude') && $this->input->post('longitude')) {
            $latt = trim($this->input->post('latitude'));
            $long = trim($this->input->post('longitude'));
            setcookie('latt',$latt,time()+3600);
            setcookie('long',$long,time()+3600);
        }
        else {
            redirect(base_url());
        }
    }
}