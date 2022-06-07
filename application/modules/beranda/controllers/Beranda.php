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
}
