<?php
class M_login extends CI_Model{	
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}
    public function m_cek_mail() {
		return $this->db->get_where('akun',array('email_user' => $this->input->post('email')),1);
	}
    public function m_cek_nopol() {
		return $this->db->get_where('akun',array('nopol_user' => $this->input->post('nopol')));
	}
    public function m_cek_notelp() {
		return $this->db->get_where('akun',array('notelp_user' => $this->input->post('nopol')));
	}
	function daftar($data,$table) {
		$this->db->insert($table,$data);
	}
	function kirim_email($email){
		$config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'mail.paparkir.com.',
			'smtp_port' => 465,
			'smtp_user' => 'noreply@paparkir.com',
			'smtp_pass' => '7829367-noreply',
			'mailtype' => 'html',
			'charset' => 'iso-8859-1',
			'wordwrap' => TRUE
		);
		
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		$this->email->from('noreply@paparkir.com', "Paparkir | Sarana Teknotama");
		$this->email->to($email);  
		$this->email->subject("Informasi registrasi");
		$this->email->message("Dear User,\n
							Terimakasih telah mendaftarkan akun di www.paparkir.com\n\n
							Silahkan hubungi customer support kami melalui support@paparkir.com apabila terjadi kendala\n"."\n\n
							From : \nSarana Teknotama Team");
		$this->email->send();
	}
}