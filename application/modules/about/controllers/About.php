<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');

class About extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('id')) {
            redirect('elerning');
        }
        $this->load->library('form_validation');
        $this->load->library('encrypt');
    }


    public function index()
    {
        $this->load->view('v_about');
    }

}

