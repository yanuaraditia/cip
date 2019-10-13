<?php
class M_mitra extends CI_Model{	
	function show_me($mail){
      $q = $this->db->get_where('akun',array('email_user'=>$mail));
      return $q;
  }
  function mitra_login() {
	  return $this->db->get_where('mitra',array('email_mitra' => $this->input->post('email')),1);
	}
  function mitra_history($id_mitra) {
    return $this->db->query("SELECT transaksi.*, booking.* FROM transaksi JOIN booking ON transaksi.kd_booking = booking.kd_booking WHERE id_mitra = $id_mitra");
  }
  function antrian($id_mitra) {
    return $this->db->query("SELECT booking.*, slot.nama_slot, lantai.kd_lantai, lantai.nama_lantai, lantai.tarif_lantai, lokasi.nama_lokasi, transaksi.kd_transaksi, transaksi.tanggal_bayar, transaksi.total_bayar, akun.* FROM transaksi RIGHT JOIN booking ON transaksi.kd_booking = booking.kd_booking RIGHT JOIN slot ON booking.kd_slot = slot.kd_slot LEFT JOIN lantai ON slot.kd_lantai = lantai.kd_lantai RIGHT JOIN lokasi ON lantai.kd_lokasi = lokasi.kd_lokasi JOIN akun ON akun.id_user = booking.id_user WHERE lokasi.kd_lokasi = $id_mitra AND booking.status <> 2");
  }
  function lokasi_mitra($id_mitra) {
    return $this->db->query("SELECT lokasi.nama_lokasi FROM lokasi JOIN mitra ON mitra.kd_lokasi = lokasi.kd_lokasi WHERE id_mitra = $id_mitra")->row(1);
  }
}