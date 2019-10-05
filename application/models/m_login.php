<?php
class M_login extends CI_Model{	
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}	
    public function m_cek_mail() {
		return $this->db->get_where('akun',array('email_user' => $this->input->post('email')));
	}	
}