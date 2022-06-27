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

    $this->form_validation->set_rules('username', 'username', 'trim|required');
    $this->form_validation->set_rules('password', 'password', 'trim|required');

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
      if (md5($password, $user['password'])) {
        $data = ['username' => $user['username'], 'id_level_user' => $user['id_level_user']];
        $this->session->set_userdata($data);

        // ? Menentukan hak akses saat login
        if ($user['id_level_user']) {
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

  public function registration()
  {
    if ($this->session->userdata('username')) {
      redirect('user');
    }

    $this->form_validation->set_rules('nama_user', 'nama_user', 'required|trim');
    $this->form_validation->set_rules('username', 'username', 'required|trim');
    $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
      'matches' => 'Password dont match!',
      'min_length' => 'Password too short!'
    ]);
    $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

    if ($this->form_validation->run() == false) {
      $data['title'] = 'Registration';
      $this->load->view('_templates/auth_header', $data);
      $this->load->view('login/registration');
      $this->load->view('_templates/auth_footer');
    } else {
      $data = [
        'username' => htmlspecialchars(strtolower($this->input->post('username', true))),
        'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
        'nama_user' => htmlspecialchars($this->input->post('nama_user', true)),
        'nomor_wa' => htmlspecialchars($this->input->post('nomor_wa', true)),
        'gambar' => 'default.jpg',
        'jenis_kelamin' => 'Laki-laki',
        'id_level_user' => 2,
        'id_status_user' => 2
      ];

      $this->db->insert('user', $data);

      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been created. Please activate your account</div>');
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
