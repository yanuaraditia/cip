<?php 
class Mitra extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('email_user')){
			$this->session->sess_destroy();
		}
		else {
			$this->load->model('m_dash');
			$this->load->helper('user');
		}
	}
	function index(){
		$this->load->model('M_mitra');
		$data = array(
			'profile'=> $this->M_mitra->show_me($this->session->userdata('email_mitra'))
		);
    	$this->load->view('link_rel',$data);
		$this->load->view('mitra_dash');
    	$this->load->view('footer');
    }
    function login()
    {
        $this->load->view('mitra_login');
    }
	function aksi_login(){
		$this->load->model('M_mitra');
		$email_mitra = $this->input->post('email');
		$password = $this->input->post('password');
		$cek = $this->M_mitra->mitra_login()->row(1);
		if($this->M_mitra->mitra_login()->num_rows()==1) {
			if(hash_verified($this->input->post('password'),$cek->password) && !empty($cek->password)){
				$data_session = array(
					'id_mitra' => $id_mitra,
					'email_mitra' => $email_mitra,
					'status' => "login"
					);
				$this->session->set_userdata($data_session);
				redirect(base_url("Mitra"));
			}else{
				$data = array(
					'error' => 'Username atau password salah'
				);
				$this->load->view('session_header',$data);
				$this->load->view('login_content');
				$this->load->view('session_footer');
			}
		}
		else {
			$data = array(
				'error' => 'Username atau password salah'
			);
			$this->load->view('session_header',$data);
			$this->load->view('login_content');
			$this->load->view('session_footer');
		}
	}
}