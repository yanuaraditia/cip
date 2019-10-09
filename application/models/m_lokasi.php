<?php

class m_lokasi extends CI_Model{
      function list_lokasi(){
            $lokasi=$this->db->get('lokasi');
            return $lokasi;
      }
      function cari_lokasi($do){
            $this->db->like('nama_lokasi', $do);
            $res = $this->db->get('lokasi');
            return $res;
      }
}