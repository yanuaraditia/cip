<?php 

class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('status') == "login"){
			redirect(base_url("dashboard"));
		}
        else {
            $this->load->model('m_login');
        }
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
				$cek = $this->m_login->m_cek_mail()->result_array();
				foreach($cek as $data) {
					$data_session = array(
						'id_user' => $data['id_user'],
						'email_user' => $email_user,
						'status' => "login"
					);
				}
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

	function lupasandi() {
		$this->load->view('session_header');
		$this->load->view('forgetpass');
		$this->load->view('session_footer');
		if ($this->input->post()) {
			$question = array(
				'email_user' => $this->input->post('email'),
				'nopol_user' => $this->input->post('nopol'),
				'notelp_user' => $this->input->post('notelp')
			);
			$data = $this->m_login->reset_check($question);
			$row = $data->num_rows();
			if($row > 0) {
				$reset_key = random_string('alnum', 50);
				foreach($data->result_array() as $do) {
					$data = array(
						'id_user' => $do['id_user'],
						'reset_key' => $reset_key,
						'tanggal_request' => date('Y-m-d'),
						'tanggal_update' => date('0000-00-00'),
						'status' => 0
					);
					$this->session->set_flashdata('class', 'success');
					$this->session->set_userdata( array(
						'temp_user' => $do['id_user'],
						'reset_key' => $reset_key
					));
					$this->session->set_flashdata('info', 'Reset anda tercatat dengan tag <br><b>'. $reset_key.'</b><br>User ID : <b>'.$do['id_user']).'</b>';
					$this->m_login->reset_request($data);
				}
				redirect('login/lupasandi');
			}
			else {
				$this->session->set_flashdata('info', 'Pertanyaan yang anda isikan salah, silahkan isi kembali');
				$this->session->set_flashdata('class', 'danger');
			}
		}
	}
	function proses_reset() {
		if($this->session->userdata('temp_user') && $this->session->userdata('reset_key')) {
			$password = password_hash($this->input->post('password'),PASSWORD_DEFAULT);
			$this->m_login->reset_progress($password,$this->session->userdata('temp_user'));
			$this->m_login->update_reset($this->session->userdata('reset_key'));
			$this->session->sess_destroy();
			redirect('login');
		}
	}
}