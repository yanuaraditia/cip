<?php

class M_lokasi extends CI_Model{
      function list_lokasi($batas){
            $batas   = $batas;
            $halaman = $this->input->get('page');
            if(empty($halaman)){
                  $posisi  = 0;
                  $halaman = 1;
            }
            else{ 
                  $posisi  = ($halaman-1) * $batas; 
            }
            $lokasi=$this->db->get('lokasi', $posisi, $batas);
            return $lokasi;
      }
      function jml_lokasi($batas) {
            if($this->input->get('q')) {
                  $this->db->like('nama_lokasi', $this->input->get('q'));
                  $jml_data = $this->db->get('lokasi')->num_rows();
                  $jml_halaman = ceil($jml_data/$batas);
            }
            else {
                  $jml_data = $this->db->get('lokasi')->num_rows();
                  $jml_halaman = ceil($jml_data/$batas);
            }
            return $jml_halaman;
      }
      function cari_lokasi($do){
            $this->db->like('nama_lokasi', $do);
            $res = $this->db->get('lokasi');
            return $res;
      }
}