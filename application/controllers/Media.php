<?php

class Media extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Media';
        $this->load->view('templates/header2', $data);
        $this->load->view('media/index');
        $this->load->view('templates/footer');
    }
}
