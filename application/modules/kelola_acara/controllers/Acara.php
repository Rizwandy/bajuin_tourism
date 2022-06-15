<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Acara extends CI_Controller
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
        $this->load->view('v_acara');
    }
    ///////////////////////////////// validation untuk Registrasii ////////////////////////////////////

}
