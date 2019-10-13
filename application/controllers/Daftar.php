<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Daftar extends CI_Controller {
	function __construct(){
		parent::__construct();
		if($this->session->userdata('status') == "login"){
			redirect(base_url("dashboard"));
		}
        else {
            $this->load->model('m_login');
        }
	}
    public function index()
    {
        $this->load->view('session_header');
        $this->load->view('register_content');
        $this->load->view('session_footer');
    }
    function proses_daftar()
    {
        $tanggal_sekarang	= date('Y-m-d');
        $nama_user		    = $this->input->post('nama');
        $password_user	    = $this->input->post('password');
        $password_user	    = password_hash($password_user,PASSWORD_DEFAULT);
        $email_user		    = $this->input->post('email');
        $kd_jenis			= $this->input->post('jenis_kendaraan');
        $nopol				= $this->input->post('nopol');
        $notelp				= $this->input->post('notelp');
        $data               = array(
            'nama_user'     => $nama_user,
            'email_user'    => $email_user,
            'nopol_user'    => $nopol,
            'password'      => $password_user,
            'notelp_user'   => $notelp,
            'jml_roda_kendaraan' => $kd_jenis
        );
        if($this->m_login->m_cek_mail()->num_rows()>=1){
            $data = array(
                'error' => 'Akun dengan nopol / e-mail / nomor telepon yang sama telah terdaftar sebelumnya'
            );
			$this->load->view('session_header',$data);
			$this->load->view('register_content',$data);
			$this->load->view('session_footer');
        }
        elseif($this->m_login->m_cek_nopol()->num_rows()>=1) {
            $data = array(
                'error' => 'Akun dengan nopol / e-mail / nomor telepon yang sama telah terdaftar sebelumnya'
            );
			$this->load->view('session_header',$data);
			$this->load->view('register_content');
			$this->load->view('session_footer');
        }
        elseif($this->m_login->m_cek_notelp()->num_rows()>=1) {
            $data = array(
                'error' => 'Akun dengan nopol / e-mail / nomor telepon yang sama telah terdaftar sebelumnya'
            );
			$this->load->view('session_header',$data);
			$this->load->view('register_content');
			$this->load->view('session_footer');
        }
        else {
            $this->m_login->daftar($data,'akun');
            redirect(base_url());
        }
    }
}