<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_kelola_wisata_admin extends CI_Model
{
  public function readDataWisataAdmin()
  {
    $this->db->select('*');
    $this->db->from('wisata');
    $this->db->join('user', 'user.id_user=wisata.id_user');
    $this->db->join('status_wisata', 'status_wisata.id_status_wisata=wisata.id_status_wisata');
    $query = $this->db->get();
    return $query;
  }

  public function readDataStatusWisata()
  {
    return $this->db->get('status_wisata');
  }

  public function readDataFasilitasWisata()
  {
    $this->db->select('*');
    $this->db->from('fasilitas_wisata');
    $this->db->join('wisata', 'wisata.id_wisata=fasilitas_wisata.id_wisata');
    $query = $this->db->get();
    return $query;
  }

  public function insertDataWisata()
  {
    $kode = $this->db->query('SELECT RIGHT(id_wisata, 5) as kode FROM wisata ORDER BY id_wisata DESC LIMIT 1')->result()[0]->kode + 1;
    $buat_id = str_pad($kode, 5, "0", STR_PAD_LEFT);
    $id_wisata = "OW-$buat_id";

    $id = $this->input->post('id_wisata', true);

    $foto_sampul_wisata = $_FILES['foto_sampul_wisata'];
    if ($foto_sampul_wisata !== NULL) {
      $config['upload_path'] = './assets/imgs/foto_wisata/';
      $config['allowed_types'] = 'jpg|png|gif|jpeg';

      $this->load->library('upload', $config);
      if ($this->upload->do_upload('foto_sampul_wisata') == NULL) {
        $foto_sampul_wisata = $this->db->get_where('wisata', ['id_wisata' => $id])->row_array()['foto_sampul'];
      } else {
        $foto_sampul_wisata = $this->upload->data('file_name');
      }
    }


    $data = [
      'id_wisata' => $id_wisata,
      'nama_wisata' => htmlspecialchars($this->input->post('nama_wisata', true)),
      'deskripsi_wisata' => htmlspecialchars($this->input->post('deskripsi_wisata', true)),
      'alamat' => htmlspecialchars($this->input->post('alamat', true)),
      'foto_sampul' => $foto_sampul_wisata,
      'foto_galeri' => 'default.jpg',
      'longitude' => htmlspecialchars($this->input->post('longitude', true)),
      'latitude' => htmlspecialchars($this->input->post('latitude', true)),
      'id_user' => 2,
      'id_status_wisata' => 2
    ];

    $this->db->where('id_wisata', $id);
    $this->db->insert('wisata', $data);
  }

  public function updateDataWisata()
  {
    $id = $this->input->post('id_wisata', true);
    $data = [
      'id_wisata' => htmlspecialchars($this->input->post('id_wisata', true)),
      'nama_wisata' => htmlspecialchars($this->input->post('nama_wisata', true)),
      'deskripsi_wisata' => htmlspecialchars($this->input->post('deskripsi_wisata', true)),
      'alamat' => htmlspecialchars($this->input->post('alamat', true)),
      'longitude' => htmlspecialchars($this->input->post('longitude', true)),
      'latitude' => htmlspecialchars($this->input->post('latitude', true))
    ];

    $this->db->where('id_wisata', $id);
    $this->db->update('wisata', $data);
  }

  public function updateDataStatus_Wisata()
  {
    $id = $this->input->post('id_wisata', true);
    $data = [
      'id_status_wisata' => htmlspecialchars($this->input->post('kategori_status_wisata', true))
    ];
    $this->db->where('id_wisata', $id);
    $this->db->update('wisata', $data);
  }

  public function deleteDataWisata($id)
  {
    $this->db->where('id_wisata', $id);
    $this->db->delete('wisata');
  }
}
