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
    $this->db->select('*')->from('transaksi');
    $this->db->join('booking','transaksi.kd_booking = booking.kd_booking');
    $this->db->where('id_mitra',$id_mitra);
    return $this->db->get();
  }
  function antrian($kd_lokasi) {
    $this->db->select(array(
      'booking.*', 
      'slot.nama_slot', 
      'lantai.kd_lantai', 
      'lantai.nama_lantai', 
      'lantai.tarif_lantai', 
      'lokasi.nama_lokasi', 
      'transaksi.kd_transaksi', 
      'transaksi.tanggal_bayar', 'transaksi.total_bayar', 'akun.*'
    ));
    $this->db->from('transaksi');
    $this->db->join('booking','transaksi.kd_booking = booking.kd_booking','right');
    $this->db->join('slot','booking.kd_slot = slot.kd_slot','right');
    $this->db->join('lantai','slot.kd_lantai = lantai.kd_lantai','left');
    $this->db->join('lokasi','lantai.kd_lokasi = lokasi.kd_lokasi','right');
    $this->db->join('akun','akun.id_user = booking.id_user');
    $this->db->where(array(
      'lokasi.kd_lokasi' => $kd_lokasi,
      'booking.status <>' => 2
    ));
    return $this->db->get();
  }
  function lokasi_mitra($id_mitra) {
    $this->db->select(array('lokasi.kd_lokasi','lokasi.nama_lokasi'))->from('lokasi')->join('mitra','mitra.kd_lokasi = lokasi.kd_lokasi')->where('id_mitra',$id_mitra);
    return $this->db->get()->row(1);
  }
  function tampil_lantai($kd_lokasi) {
    return $this->db->get_where('lantai',array('kd_lokasi' => $kd_lokasi));
  }
  function tambah($tabel,$data) {
    $this->db->insert($tabel,$data);
  }
  function cek_tarif($kd_booking) {
    $this->db->select('tarif_lantai')->from('lantai');
    $this->db->join('slot','slot.kd_lantai = lantai.kd_lantai');
    $this->db->join('booking','slot.kd_slot = booking.kd_slot');
    $this->db->where('kd_booking',$kd_booking);
    return $this->db->get()->row(1);
  }
  function update($kd_booking,$status) {
    $this->db->where('kd_booking',$kd_booking)->update('booking',array('status'=> $status));
  }
}