<?php
class Prodi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_prodi');
    }
    public function index()
    {
        $data = array(
            'judul' => 'Prodi',
            'page' => 'prodi/v_prodi',
            'prodi' => $this->m_prodi->all_data(),
        );
        $this->load->view('v_template', $data, false);
    }

    public function edit_prodi($id_prodi)
    {
        $this->form_validation->set_rules('nama_prodi', 'Nama Prodi', 'required', [
            'required' => '%s Harus diisi'
        ]);

        if ($this->form_validation->run() == FALSE) {

            $data = array(
                'judul' => 'Edit Prodi',
                'page' => 'prodi/v_edit_prodi',
                'prodi' => $this->m_prodi->datail_data($id_prodi),
            );
            $this->load->view('v_template', $data, false);
        } else {
            $data = array(
                'id_prodi' => $id_prodi,
                'nama_prodi' => $this->input->post('nama_prodi'),
            );
            $this->m_prodi->insert_data($data);
            redirect('prodi/index');
        }
    }
}
