<?php
class M_dash extends CI_Model{	
	function show_me($mail){
        $q = $this->db->get_where('akun',array('email_user'=>$mail));
        return $q;
    }
    function booking_status($id) {
        $this->db->select(array(
            'booking.kd_booking', 
            'booking.tgl_booking', 
            'slot.nama_slot', 
            'lantai.tarif_lantai', 
            'lantai.nama_lantai', 
            'lokasi.nama_lokasi',
            'lokasi.lttd_lokasi', 
            'lokasi.lgtd_lokasi', 
            'booking.status'
        ))->from('booking');
        $this->db->join('slot','booking.kd_slot = slot.kd_slot','left');
        $this->db->join('lantai','slot.kd_lantai = lantai.kd_lantai','left');
        $this->db->join('lokasi','lantai.kd_lokasi=lokasi.kd_lokasi');
        $this->db->where(array(
            'id_user' => $id,
            'status !=' => 2
        ));
        return $this->db->get();
    }
    function show_history($id) {
        $this->db->select('*')->from('booking');
        $this->db->where(array(
            'id_user' => $id,
            'status' => 2
        ));
        $this->db->limit(5);
        return $this->db->get();
    }
}