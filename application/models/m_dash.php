<?php
class M_dash extends CI_Model{	
	function show_me($mail){
        $q = $this->db->query("SELECT * FROM akun WHERE email_user = '$mail'");
        return $q;
    }
}