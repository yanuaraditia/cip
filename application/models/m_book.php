<?php

class M_book extends CI_Model{
      function list_lantai(){
            $id = base64_decode($this->input->get('id'));
            $lantai=$this->db->get_where('lantai',array('kd_lokasi'=>$id));
            return $lantai;
      }
      function detail_lokasi() {
            $id = base64_decode($this->input->get('id'));
            $detail = $this->db->get_where('lokasi',array('kd_lokasi'=>$id));
            return $detail;
      }
      function book_confirm($data) {
            $this->db->insert('booking',$data);
      }
      function show_slot($kd_lantai) {
            return $this->db->get_where('slot',array('kd_lantai' => $kd_lantai));
      }
      function book_check($id_user) {
            $this->db->select('id_user');
            $this->db->from('booking');
            $this->db->where(array(
                  'status != 2',
                  'id_user' => $id_user 
            ));
            return $this->db->get();
      }
}