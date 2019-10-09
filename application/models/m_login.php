<?php
class M_login extends CI_Model{	
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	
    public function m_cek_mail() {
		return $this->db->get_where('akun',array('email_user' => $this->input->post('email')));
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
}