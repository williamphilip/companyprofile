<?php

class Layanan extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Layanan';
        $this->load->view('templates/header2', $data);
        $this->load->view('layanan/index');
        $this->load->view('templates/footer');
    }
}
