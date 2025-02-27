<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_mahasiswa extends CI_Model
{

    public function all_data()
    {
        $this->db->select('*');
        $this->db->from('tbl_mahasiswa');
        return $this->db->get()->result();
    }
}
