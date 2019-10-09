<?php
class M_dash extends CI_Model{	
	function show_me($mail){
        $q = $this->db->get_where('akun',array('email_user'=>$mail));
        return $q;
    }
}