<?php

class m_lokasi extends CI_Model{
      function list_lokasi(){
            $lokasi=$this->db->query("SELECT * FROM lokasi");
            return $lokasi;
      }
}