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
            'page' => 'mahasiswa/v_mahasiswa', //file page di folder  view
            'mhs' => $this->m_mahasiswa->all_data(),
        );
        $this->load->view('v_template', $data, false); //load template
    }
    public function input_mahasiswa()
    {
        // membaca validasi form input, cek input apakah kosong / isi
        $this->form_validation->set_rules('nim', 'NIM', 'required', [
            'required' => '%s Harus diisi'
        ]);
        $this->form_validation->set_rules('nama_mahasiswa', 'Nama Mahasiswa', 'required', [
            'required' => '%s Harus diisi'
        ]);
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required', [
            'required' => '%s Harus diisi'
        ]);
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required', [
            'required' => '%s Harus diisi'
        ]);
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', [
            'required' => '%s Harus diisi'
        ]);

        if ($this->form_validation->run() == FALSE) {
            // jika validasi form gagal/tidak lolos
            $data = array(
                'judul' => 'Input Mahasiswa',
                'page' => 'mahasiswa/v_input_mahasiswa', //file page di folder  view
            );
            $this->load->view('v_template', $data, false); //load template
        } else {
            // jika lolos validasi, semua inputan ditampung di dalam array
            $data = array(
                'nim' => $this->input->post('nim'),
                'nama_mahasiswa' => $this->input->post('nama_mahasiswa'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            );
            $this->m_mahasiswa->insert_data($data);

            // notif berhasil ditambah
            $this->session->set_flashdata('pesan', 'Data Mahasiswa Berhasil Ditambahkan');

            // jika sudah diinput, akan diarahkan ke halaman mahasiswa
            redirect('mahasiswa/index');
        }
    }

    public function edit_mahasiswa($id_mahasiswa)
    {
        // membaca validasi form input, cek input apakah kosong / isi
        $this->form_validation->set_rules('nim', 'NIM', 'required', [
            'required' => '%s Harus diisi'
        ]);
        $this->form_validation->set_rules('nama_mahasiswa', 'Nama Mahasiswa', 'required', [
            'required' => '%s Harus diisi'
        ]);
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required', [
            'required' => '%s Harus diisi'
        ]);
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required', [
            'required' => '%s Harus diisi'
        ]);
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', [
            'required' => '%s Harus diisi'
        ]);

        if ($this->form_validation->run() == FALSE) {
            // jika validasi form gagal/tidak lolos

            $data = array(
                'judul' => 'Edit Mahasiswa',
                'mhs' => $this->m_mahasiswa->detail_data($id_mahasiswa),
                'page' => 'mahasiswa/v_edit_mahasiswa', //file page di folder  view
            );
            $this->load->view('v_template', $data, false); //load template
        } else {
            // jika lolos validasi, semua inputan ditampung di dalam array
            $data = array(
                'id_mahasiswa' => $id_mahasiswa,
                'nim' => $this->input->post('nim'),
                'nama_mahasiswa' => $this->input->post('nama_mahasiswa'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            );
            $this->m_mahasiswa->update_data($data);

            // notif berhasil ditambah
            $this->session->set_flashdata('pesan', 'Data Mahasiswa Berhasil DI Update');

            // jika sudah diinput, akan diarahkan ke halaman mahasiswa
            redirect('mahasiswa/index');
        }
    }


    // ----
}
