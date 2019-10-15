<?php
class M_login extends CI_Model{	
	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}
    function m_cek_mail() {
		return $this->db->get_where('akun',array('email_user' => $this->input->post('email')),1);
	}
    function m_cek_nopol() {
		return $this->db->get_where('akun',array('nopol_user' => $this->input->post('nopol')));
	}
    function m_cek_notelp() {
		return $this->db->get_where('akun',array('notelp_user' => $this->input->post('nopol')));
	}
	function daftar($data,$table) {
		$this->db->insert($table,$data);
	}
	function reset_check($where) {
		return $this->db->get_where('akun',$where);
	}
	function reset_request($data) {
		return $this->db->insert('reset',$data);
	}
	function reset_progress($pass,$id_user) {
		$this->db->where('id_user',$id_user);
		$this->db->update('akun',array(
			'password' => $pass
		));
	}
	function update_reset($reset_key) {
		$this->db->where('reset_key',$reset_key);
		$this->db->update('reset',array(
			'tanggal_update' => date('Y-m-d'),
			'status' => 1
		));
	}
}