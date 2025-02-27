<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_fakultas extends CI_Model
{
    public function all_data()
    {
        $this->db->select('*');
        $this->db->from('tbl_fakultas');
        return $this->db->get()->result();
    }
}
