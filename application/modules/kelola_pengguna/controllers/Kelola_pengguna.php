<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelola_pengguna extends MX_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('kelola_pengguna/M_kelola_pengguna');
  }

  public function index()
  {
    $data['title'] = 'pengguna';
    $data['user'] = $this->db->get_where(
      'user',
      ['username' => $this->session->userdata('username')]
    )->row_array();

    $data['view'] = $this->M_kelola_pengguna->readDataPengguna();
    $data['kategori_status_user'] = $this->M_kelola_pengguna->readDataStatusPengguna();
    $this->load->view('_templates/backend_header', $data);
    $this->load->view('_templates/sidebar', $data);
    $this->load->view('_templates/backend_navbar', $data);
    $this->load->view('kelola_pengguna/v_kelola_pengguna', $data);
    $this->load->view('_templates/backend_footer');
  }

  public function profile()
  {
    $data['title'] = 'Profile';
    $data['user'] = $this->db->get_where(
      'user',
      ['username' => $this->session->userdata('username')]
    )->row_array();

    $data['view'] = $this->M_kelola_pengguna->readDataPengguna();
    $this->load->view('_templates/backend_header', $data);
    $this->load->view('_templates/sidebar', $data);
    $this->load->view('_templates/backend_navbar', $data);
    $this->load->view('kelola_pengguna/v_profile', $data);
    $this->load->view('_templates/backend_footer');
  }

  public function ubah_password()
  {
    $data['title'] = 'Ubah Password';
    $data['user'] = $this->db->get_where(
      'user',
      ['username' => $this->session->userdata('username')]
    )->row_array();
    $data['view'] = $this->M_kelola_pengguna->readDataPengguna();

    $this->form_validation->set_rules('password_lama', 'Current Password', 'required|trim');
    $this->form_validation->set_rules('password', 'New Password', 'required|trim|min_length[3]|matches[password]');
    $this->form_validation->set_rules('ulangiPassword', 'Confirm New Password', 'required|trim|min_length[3]|matches[ulangiPassword]');

    if ($this->form_validation->run() == false) {
      $this->load->view('_templates/backend_header', $data);
      $this->load->view('_templates/sidebar', $data);
      $this->load->view('_templates/backend_navbar', $data);
      $this->load->view('kelola_pengguna/v_ubah_password', $data);
      $this->load->view('_templates/backend_footer');
    } else {
      $current_password = $this->input->post('password_lama');
      $new_password = $this->input->post('password');
      if (!password_verify($current_password, $data['user']['password'])) {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" 
                                                    role="alert"> Kata sandi sekarang 
                                                    salah!</div>');
        redirect('kelola_pengguna/ubah_password');
      } else {
        if ($current_password == $new_password) {
          $this->session->set_flashdata('message', '<div class="alert alert-danger" 
                                                    role="alert">Kata sandi baru tidak
                                                    boleh sama dengan yang sekarang!
                                                    </div>');
          redirect('kelola_pengguna/ubah_password');
        } else {
          $password_hash = password_hash($new_password, PASSWORD_DEFAULT);
          $this->db->set('password', $password_hash);
          $this->db->where('username', $this->session->userdata('username'));
          $this->db->update('user');
          $this->session->set_flashdata('message', '<div class="alert alert-success"
                                                    role="alert">Kata sandi berhasil
                                                    diubah!</div>');
          redirect('kelola_pengguna/ubah_password');
        }
      }
    }
  }

  public function tambahDataPengguna()
  {
    $this->M_kelola_pengguna->insertDatapengguna();
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data pengguna Berhasil Ditambahkan! </div>');
    redirect('kelola_pengguna');
  }

  public function ubahDataPengguna()
  {
    $this->M_kelola_pengguna->updateDatapengguna();
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data pengguna Berhasil Diubah! </div>');
    redirect('kelola_pengguna');
  }

  public function ubahDataStatusPengguna()
  {
    $this->M_kelola_pengguna->updateDataStatuspengguna();
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data Status pengguna Berhasil Diubah! </div>');
    redirect('kelola_pengguna');
  }

  public function hapusDataPengguna($id)
  {
    $this->M_kelola_pengguna->deleteDatapengguna($id);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data pengguna Berhasil Dihapus! </div>');
    redirect('kelola_pengguna');
  }

  public function ubahPassPengguna()
  {
    $this->M_kelola_pengguna->updatePassPengguna();
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Password pengguna Berhasil Diubah! </div>');
    redirect('kelola_pengguna');
  }

  public function ubahProfile()
  {
    $this->M_kelola_pengguna->updateProfile();
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Profile Berhasil Diubah! </div>');
    redirect('kelola_pengguna/profile');
  }
}
