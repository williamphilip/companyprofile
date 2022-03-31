<?php

class Informasi extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Informasi';
        $this->load->view('templates/header2', $data);
        $this->load->view('informasi/index');
        $this->load->view('templates/footer');
    }
}
