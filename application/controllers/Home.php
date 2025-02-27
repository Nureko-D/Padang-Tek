<?php
class Home extends CI_Controller
{
    public function index()
    {
        $data = array(
            'judul' => 'Dashboard',
            'subJudul' => '',
            'page' => 'v_dashboard', //file page di folder  view
        );
        $this->load->view('v_template', $data, false); //load template
    }
}
