<?php
class Mahasiswa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // ini wajib agar bisa memanggil, jadi seperti bembuatan variabel
        $this->load->model('m_mahasiswa');
    }


    public function index()
    {
        $data = array(
            'judul' => 'Mahasiswa',
            'subJudul' => '',
            'page' => 'mahasiswa/v_mahasiswa', //file page di folder  view
            'mhs' => $this->m_mahasiswa->all_data(),
        );
        $this->load->view('v_template', $data, false); //load template
    }
}
