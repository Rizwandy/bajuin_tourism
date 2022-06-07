<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends MX_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
  }

  public function index()
  {
    $this->memeriksaStatusLogin();

    $this->form_validation->set_rules('username', 'Username', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');

    if ($this->form_validation->run() == false) {
      $data['title'] = 'Login';
      $this->load->view('_templates/auth_header', $data);
      $this->load->view('login/v_login');
      $this->load->view('_templates/auth_footer');
    } else {
      $this->_login();
    }
  }

  private function _login()
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $user = $this->db->get_where('user', ['username' => $username])->row_array();

    if ($user) {
      if (password_verify($password, $user['password'])) {
        $data = ['username' => $user['username'], 'id_level_user' => $user['id_level_user']];
        $this->session->set_userdata($data);

        // ? Menentukan hak akses saat login
        if ($user['id_level_user'] == 1) {
          redirect('dashboard');
        } else {
          redirect('dashboard');
        }
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah!</div>');
        redirect('login');
      }
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username tidak terdaftar!</div>');
      redirect('login');
    }
  }

  public function logout()
  {
    $this->session->unset_userdata('username');
    $this->session->unset_userdata('id_level_user');
    $this->cart->destroy();
    $this->session->set_flashdata('message', '<div class="alert alert-warning" role="alert">Kamu telah logout!</div>');
    redirect(base_url());
  }

  public function memeriksaStatusLogin()
  {
    // ? Menentukan hak akses dengan session
    if ($this->session->userdata('username')) {
      redirect('dashboard');
    }
  }
}
