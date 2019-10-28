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
            $lokasi=$this->db->get('lokasi', $batas, $posisi);
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
      public function cek_slot_kosong($kd_lokasi) {
            $this->db->select('slot.kd_slot')->from('slot');
            $this->db->join('lantai','slot.kd_lantai = lantai.kd_lantai');
            $this->db->join('lokasi','lantai.kd_lokasi = lokasi.kd_lokasi');
            $this->db->join('booking','booking ON slot.kd_slot = booking.kd_slot','left');
            $where = 'lokasi.kd_lokasi = '.$kd_lokasi.' AND booking.kd_slot IS NULL OR lokasi.kd_lokasi = '.$kd_lokasi.' AND booking.status = 2';
            $this->db->where($where);
            return $this->db->get();
      }
      public function cek_tarif($kd_lokasi) {
            $this->db->select(array(
                  'min(tarif_lantai) as min',
                  'max(tarif_lantai) as max',
            ))->from('lantai')->where('kd_lokasi',$kd_lokasi);
            return $this->db->get();
      }
}