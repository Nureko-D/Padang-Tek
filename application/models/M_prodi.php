<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_prodi extends CI_Model
{
    public function all_data()
    {
        $this->db->select('*');
        $this->db->from('tbl_prodi');
        return $this->db->get()->result();
    }
}
