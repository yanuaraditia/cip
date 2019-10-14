<?php 
class Mitra_login extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('status') == "login"){
			$this->session->sess_destroy();
		}
		else {
    		$this->load->model('M_mitra');
			$this->load->helper('user');
		}
	}
	public function index()
    {
        $this->load->view('mitra_login');
    }
	function aksi_login(){
		$email_mitra = $this->input->post('email');
		$password = $this->input->post('password');
		$cek = $this->M_mitra->mitra_login()->row(1);
		if($this->M_mitra->mitra_login()->num_rows()==1) {
			if(hash_verified($this->input->post('password'),$cek->password) && !empty($cek->password)){
				$cek = $this->M_mitra->mitra_login()->result_array();
				foreach($cek as $data) {
					$id_mitra = $data['id_mitra'];
					$data_session = array(
						'id_mitra' => $id_mitra,
						'email_mitra' => $email_mitra,
						'status_mitra' => "login"
						);
				}
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