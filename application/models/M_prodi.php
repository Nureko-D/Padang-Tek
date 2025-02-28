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

    public function insert_data($data)
    {
        $this->db->insert('tbl_prodi', $data);
    }

    public function datail_data($id_prodi)
    {
        $this->db->select('*');
        $this->db->from('tbl_prodi');
        $this->db->where('id_prodi', $id_prodi);

        return $this->db->get()->row();
    }
}
