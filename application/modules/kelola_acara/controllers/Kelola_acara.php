<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelola_acara extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('kelola_acara/M_kelola_acara');
    }

    public function backend_acara()
    {
        $data['title'] = 'Backend Acara';
        $data['user'] = $this->db->get_where(
            'user',
            ['username' => $this->session->userdata('username')]
        )->row_array();

        $data['view'] = $this->M_kelola_acara->readDataAcara();

        $this->load->view('_templates/backend_header', $data);
        $this->load->view('_templates/sidebar', $data);
        $this->load->view('_templates/backend_navbar', $data);
        $this->load->view('kelola_acara/v_kelola_backend_acara', $data);
        $this->load->view('_templates/backend_footer');
    }

    public function detailAcara($id)
    {
        $data['view'] = $this->M_kelola_acara->readDataDetailAcara($id);

        $this->load->view('_templates/header', $data);
        $this->load->view('_templates/navbar', $data);
        $this->load->view('kelola_acara/v_detail_acara', $data);
        $this->load->view('_templates/footer');
    }

    public function tambahDataAcara()
    {
        $this->M_kelola_acara->insertDataAcara();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data Acara Berhasil Ditambahkan! </div>');
        redirect('kelola_acara/backend_acara');
    }

    public function ubahDataAcara()
    {
        $this->M_kelola_acara->updateDataAcara();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data Acara Berhasil Diubah! </div>');
        redirect('kelola_acara/backend_acara');
    }

    public function ubahDataStatusAcara()
    {
        $this->M_kelola_acara->updateDataStatusAcara();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data Status Acara Berhasil Diubah! </div>');
        redirect('kelola_acara/backend_acara');
    }

    public function hapusDataAcara($id)
    {
        $this->M_kelola_acara->deleteDataAcara($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data Acara Berhasil Dihapus! </div>');
        redirect('kelola_acara/backend_acara');
    }
}
