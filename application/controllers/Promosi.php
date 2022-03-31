<?php 

class Promosi extends CI_Controller 
{
    public function index()
    {
        $data["judul"] = 'Promosi';
        $this->load->view('templates/header2', $data);
        $this->load->view('promosi/index');
        $this->load->view('templates/footer');
    }
}
