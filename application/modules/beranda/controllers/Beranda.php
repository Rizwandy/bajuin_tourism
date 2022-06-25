<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('id')) {
            redirect('elerning');
        }
        $this->load->library('form_validation');
        $this->load->library('encrypt');
        $this->load->model('M_beranda');
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////
    public function index()
    {
        $data['view'] = $this->M_beranda->readDataPetaWisata();

        $this->load->view('_templates/header', $data);
        $this->load->view('_templates/navbar', $data);
        $this->load->view('v_beranda', $data);
        $this->load->view('_templates/footer');
    }

    public function wisata()
    {
        $data['view'] = $this->M_beranda->readDataWisata();

        $this->load->view('_templates/header', $data);
        $this->load->view('_templates/navbar', $data);
        $this->load->view('kelola_wisata/v_frontend_wisata');
        $this->load->view('_templates/footer');
    }

    public function acara()
    {
        $data['view'] = $this->M_beranda->readDataAcara();

        $this->load->view('_templates/header', $data);
        $this->load->view('_templates/navbar', $data);
        $this->load->view('kelola_acara/v_kelola_frontend_acara');
        $this->load->view('_templates/footer');
    }

    public function tentang()
    {
        $data['view'] = $this->M_beranda->readDataWisata();

        $this->load->view('_templates/header', $data);
        $this->load->view('_templates/navbar', $data);
        $this->load->view('beranda/v_tentang');
        $this->load->view('_templates/footer');
    }

    public function tambahDataPengajuanWisata()
    {
        $this->M_beranda->insertDataPengajuanWisata();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data Pengajuan Wisata Berhasil Ditambahkan! </div>');
        redirect('beranda');
    }
}
