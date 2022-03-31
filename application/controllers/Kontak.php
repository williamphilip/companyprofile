<?php

class Kontak extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Komentar_model');
        // form validation
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Kontak';

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('notlp', 'No Telepon', 'required|numeric');
        $this->form_validation->set_rules('pesan', 'Pesan', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header2', $data);
            $this->load->view('kontak/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Komentar_model->tambahKomentarPasien();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('kontak');
        }
    }
}
