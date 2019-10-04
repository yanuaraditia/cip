<?php

class m_book extends CI_Model{
      function list_lantai(){
            $lantai=$this->db->query("SELECT * FROM lantai WHERE kd_lokasi = ".base64_decode($_GET['id']));
            return $lantai;
      }
      function detail_lokasi() {
            $lokasi=$this->db->query("SELECT * FROM lokasi WHERE kd_lokasi = ".base64_decode($_GET['id']));
            return $lokasi;
      }
}