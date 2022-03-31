<?php

class Dokter extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Dokter';
        $this->load->view('templates/header2', $data);
        $this->load->view('dokter/index');
        $this->load->view('templates/footer');
    }
}
