<?php


class Komentar_model extends CI_Model
{
    public function getAllKomentar()
    {

        return $this->db->get('testimoni')->result_array();
    }

    public function tambahKomentarPasien()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "email" => $this->input->post('email', true),
            "notlp" => $this->input->post('notlp', true),
            "pesan" => $this->input->post('pesan', true),
            "image" => $upload_image = $_FILES['image']['name']
        ];

        // jika ada gambar diupload
        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']     = '2048';
            $config['upload_path'] = './assets/img/profile/';

            $this->load->library('upload', $config);
            if ($this->upload->do_upload('image')) { } else {
                echo $this->upload->display_errors();
            }
        }

        $this->db->insert('testimoni', $data);
    }
}
