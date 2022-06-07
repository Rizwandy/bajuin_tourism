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
    function validation()
    {
        $this->form_validation->set_rules('Username', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_lenght[8]');
        $this->form_validation->set_rules(
            'password2',
            'RePassword',
            'required|min_lenght[8]|matches[password]',
            array('matches' => '%s Tidak Sesuai dengan password')
        );


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('v_registeruser');
        } else {
            echo "sudah selesai";
        }
    }

    /// untuk tampilan verifikasi sesaat sudah email di verifikasiii.......
    function verify_email()
    {
        if ($this->uri->segment(3)) {
            $verification_key = $this->uri->segment(3);
            if ($this->M_beranda->verify_email($verification_key)) {
                $data['message'] = '<h1 align="Center">Email Sudah Diverifikasi <a href="' . base_url() . 'Beranda/loginuser">here</a></h1>';
            } else {
                $data['message'] = '<h1 align="Center"> Invalid Link</h1>';
            }

            $this->load->view('v_mailregister', $data);
        }
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ///////////////////////////////////////////// Validation untuk Login //////////////////////////////////////////////////////

    function validationuser()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run()) {
            $result = $this->M_beranda->can_loginuser($this->input->post('email'), $this->input->post('password'));
            if ($result == '') {
                redirect('Elerning');
            } else {
                $this->session->set_flashdata('pesan', 'Gagal Login');
                redirect('Beranda/loginuser');
            }
        } else {
            redirect('Beranda/loginuser');
        }
    }
}
