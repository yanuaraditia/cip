<?php

class m_lokasi extends CI_Model{
      function list_lokasi(){
            $lokasi=$this->db->get('lokasi');
            return $lokasi;
      }
	function lokasi($number,$offset){
		return $query = $this->db->get('lokasi',$number,$offset)->result();
	}
	function jumlah_lokasi(){
		return $this->db->get('lokasi')->num_rows();
	}
}