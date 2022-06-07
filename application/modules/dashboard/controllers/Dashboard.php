<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends MX_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('dashboard/M_dashboard');
  }

  public function index()
  {
    $data['title'] = 'Dashboard';
    $data['user'] = $this->db->get_where(
      'user',
      ['username' => $this->session->userdata('username')]
    )->row_array();

    $this->load->view('_templates/header', $data);
    $this->load->view('_templates/sidebar', $data);
    $this->load->view('_templates/navbar', $data);
    $this->load->view('dashboard/v_dashboard', $data);
  }
}
