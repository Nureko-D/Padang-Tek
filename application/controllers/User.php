<?php
class User extends CI_Controller
{
    public function index()
    {
        $data = array(
            'judul' => 'User',
            'subJudul' => '',
            'page' => 'v_user', //file page di folder  view
        );
        $this->load->view('v_template', $data, false); //load template
    }
}
