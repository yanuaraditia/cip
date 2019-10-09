<?php

class m_book extends CI_Model{
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
}