<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainPage extends CI_Controller {
	function __construct(){
        parent::__construct();
		if($this->session->userdata('booking') == 'ada'){
			redirect(base_url('dashboard'));
		}
        $this->load->model('M_lokasi');
		$this->load->helper('location');
    }
	public function index()
	{
		$batas = 6;
		$data = array(
			'bar' => 1,
			'list_lokasi' => $this->M_lokasi->list_lokasi($batas),
			'jml_lokasi' => $this->M_lokasi->jml_lokasi($batas),
		);
		$this->load->view('link_rel');
		$this->load->view('header',$data);
		$this->load->view('content');
        $this->load->view('footer');
		
	}
	function cari()
	{
        if ($this->input->get('q')) {
            $search = $this->input->get('q');
            $query = $this->M_lokasi->cari_lokasi($search);
            foreach ($query->result_array() as $row) {
                $wow = explode($search,$row['nama_lokasi']);
                $wow = implode("<b class=found>".$search."</b>",$wow);
                echo '<a class="panel-block" href="'.base_url('book?id=').base64_encode($row['kd_lokasi']).'">'.$wow.'</a>';
            }
        }
        else {
            redirect(base_url());
        }
	}
}
