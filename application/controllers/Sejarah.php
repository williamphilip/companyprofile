<?php

class Sejarah extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Sejarah';
        $this->load->view('templates/header2', $data);
        $this->load->view('sejarah/index');
        $this->load->view('templates/footer');
    }
}
