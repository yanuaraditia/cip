<?php
class M_mitra extends CI_Model{	
	function show_me($mail){
      $q = $this->db->get_where('akun',array('email_user'=>$mail));
      return $q;
  }
  function mitra_login() {
	  return $this->db->get_where('mitra',array('email_mitra' => $this->input->post('email')),1);
	}
  function mitra_history($d) {
    return $this->db->query("SELECT transaksi.kd_transaksi, booking.kd_booking FROM transaksi JOIN booking ON transaksi.kd_booking = booking.kd_booking WHERE id_mitra = $d");
  }
}