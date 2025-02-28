<?php
class Fakultas extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_fakultas');
    }


    public function index()
    {
        $data = array(
            'judul' => 'Fakultas',
            'page' => 'fakultas/v_fakultas',
            'fakultas' => $this->m_fakultas->all_data(),
        );
        $this->load->view('v_template', $data, false);
    }
    public function input_fakultas()
    {
        $this->form_validation->set_rules('nama_fakultas', 'Nama Fakultas', 'required', [
            'required' => '%s Harus diisi'
        ]);

        if ($this->form_validation->run() == FALSE) {

            $data = array(
                'judul' => 'Input Fakultas',
                'page' => 'fakultas/v_input_fakultas',
            );
            $this->load->view('v_template', $data, false);
        } else {
            $data = array(
                'nama_fakultas' => $this->input->post('nama_fakultas'),
            );
            $this->m_fakultas->insert_data($data);
            redirect('fakultas/index');
        }
    }

    public function edit_fakultas($id_fakultas)
    {
        $this->form_validation->set_rules('nama_fakultas', 'Nama Fakultas', 'required', [
            'required' => '%s Harus diisi'
        ]);

        if ($this->form_validation->run() == FALSE) {

            $data = array(
                'judul' => 'Edit Fakultas',
                'page' => 'fakultas/v_edit_fakultas',
                'fakultas' => $this->m_fakultas->detail_data($id_fakultas),
            );
            $this->load->view('v_template', $data, false);
        } else {
            $data = array(
                'id_fakultas' => $id_fakultas,
                'nama_fakultas' => $this->input->post('nama_fakultas'),
            );
            $this->m_fakultas->insert_data($data);
            redirect('fakultas/index');
        }
    }
}
