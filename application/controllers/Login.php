<?php 

class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_login');
	}
	function index(){
		$this->load->view('session_header');
		$this->load->view('login_content');
		$this->load->view('session_footer');
	}

	function aksi_login(){
		$email_user = $this->input->post('email');
		$password = $this->input->post('password');
		$cek = $this->m_login->m_cek_mail()->row(1);
		if($this->m_login->m_cek_mail()->num_rows()==1) {
			if(hash_verified($this->input->post('password'),$cek->password) && !empty($cek->password)){
				$data_session = array(
					'id_user' => $id_user,
					'email_user' => $email_user,
					'status' => "login"
					);
				$this->session->set_userdata($data_session);
				redirect(base_url("dashboard"));
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

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}