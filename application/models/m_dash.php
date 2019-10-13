<?php
class M_dash extends CI_Model{	
	function show_me($mail){
        $q = $this->db->get_where('akun',array('email_user'=>$mail));
        return $q;
    }
    function booking_status($id) {
        return $this->db->query("SELECT booking.kd_booking, booking.tgl_booking, slot.nama_slot, lantai.tarif_lantai, lantai.nama_lantai, lokasi.nama_lokasi,lokasi.lttd_lokasi, lokasi.lgtd_lokasi, booking.status FROM booking LEFT JOIN slot ON booking.kd_slot = slot.kd_slot LEFT JOIN lantai ON slot.kd_lantai = lantai.kd_lantai JOIN lokasi ON lantai.kd_lokasi=lokasi.kd_lokasi WHERE id_user = $id and status != 2");
    }
    function show_history($id) {
        return $this->db->query("SELECT * FROM booking WHERE id_user = $id AND status = 2 LIMIT 5");
    }
}