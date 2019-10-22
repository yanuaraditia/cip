<?php
class M_admin extends CI_Model{	
	function show_me(){
        return $this->db->get('lokasi');
    }
    function tambah($data,$tabel) {
        $this->db->insert($tabel,$data);
    }
}