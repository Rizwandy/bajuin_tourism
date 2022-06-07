<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_kelola_pengguna extends CI_Model
{
  public function readDataPengguna()
  {
    $this->db->select('*');
    $this->db->from('user');
    $this->db->join('status_user', 'status_user.id_status_user=user.id_status_user');
    $this->db->order_by('status_user', 'ASC');
    $query = $this->db->get();
    return $query;
  }

  public function readDataStatusPengguna()
  {
    return $this->db->get('status_user');
  }

  public function insertDataPengguna()
  {
    $data = [
      'username' => htmlspecialchars(strtolower($this->input->post('username', true))),
      'password' => password_hash('bajuin', PASSWORD_DEFAULT),
      'nama_user' => htmlspecialchars($this->input->post('nama_user', true)),
      'nomor_wa' => htmlspecialchars($this->input->post('nomor_wa', true)),
      'gambar' => 'default.jpg',
      'jenis_kelamin' => htmlspecialchars($this->input->post('jenisKelamin', true)),
      'id_level_user' => 2,
      'id_status_user' => 1
    ];

    $this->db->insert('user', $data);
  }

  public function updateDataPengguna()
  {
    $id = $this->input->post('iduser', true);
    $data = [
      'username' => htmlspecialchars(strtolower($this->input->post('username', true))),
      'nama_user' => htmlspecialchars($this->input->post('nama_user', true)),
      'nomor_wa' => htmlspecialchars($this->input->post('nomor_wa', true)),
      'jenis_kelamin' => htmlspecialchars($this->input->post('jenisKelamin', true))
    ];

    $this->db->where('id_user', $id);
    $this->db->update('user', $data);
  }

  public function updateDataStatusPengguna()
  {
    $id = $this->input->post('iduser', true);
    $data = [
      'id_status_user' => htmlspecialchars($this->input->post('kategori_status_user', true))
    ];

    $this->db->where('id_user', $id);
    $this->db->update('user', $data);
  }

  public function deleteDataPengguna($id)
  {
    $this->db->where('id_user', $id);
    $this->db->delete('user');
  }

  public function updatePassPengguna()
  {
    $id = $this->input->post('iduser', true);
    $data = [
      'password' => htmlspecialchars(password_hash($this->input->post('password'), PASSWORD_DEFAULT))
    ];

    $this->db->where('id_user', $id);
    $this->db->update('user', $data);
  }

  public function updateProfile()
  {
    $id = $this->input->post('iduser', true);

    $foto = $_FILES['foto'];
    if ($foto !== NULL) {
      $config['upload_path'] = './assets/img/profile/';
      $config['allowed_types'] = 'jpg|png|gif';

      $this->load->library('upload', $config);
      if ($this->upload->do_upload('foto') == NULL) {
        $foto = $this->db->get_where('user', ['id_user' => $id])->row_array()['gambar'];
      } else {
        $foto = $this->upload->data('file_name');
      }
    }

    $data = [
      'username' => htmlspecialchars(strtolower($this->input->post('username', true))),
      'nama_user' => htmlspecialchars($this->input->post('nama', true)),
      'gambar' => $foto,
      'jenis_kelamin' => htmlspecialchars($this->input->post('jenisKelamin', true)),
    ];

    $this->db->where('id_user', $id);
    $this->db->update('user', $data);
  }
}
