<?php
class M_history extends CI_Model{
    function show_history() {
        return $this->db->get_where('transaksi');
    }
}