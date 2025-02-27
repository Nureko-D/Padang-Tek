<?php
class Mahasiswa extends CI_Controller
{
    public function index()
    {
        $data = array(
            'judul' => 'Mahasiswa',
            'subJudul' => '',
            'page' => 'mahasiswa/v_mahasiswa', //file page di folder  view
        );
        $this->load->view('v_template', $data, false); //load template
    }
}
