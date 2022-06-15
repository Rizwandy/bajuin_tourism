<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_kelola_wisata extends CI_Model
{
  public function readDataWisata()
  {
    $this->db->select('*');
    $this->db->from('wisata');
    $this->db->join('status_wisata', 'status_wisata.id_status_wisata=wisata.id_status_wisata');
    $this->db->order_by('status_wisata', 'ASC');
    $query = $this->db->get();
    return $query;
  }

  public function readDataStatusWisata()
  {
    return $this->db->get('status_wisata');
  }

  public function readDataMenuWisata()
  {
    $this->db->select('*');
    $this->db->from('wisata');
    $this->db->where('id_status_wisata', 1);
    $query = $this->db->get();
    return $query;
  }

  public function readDataDetailWisata($id)
  {
    $this->db->select('*');
    $this->db->from('wisata');
    $this->db->where('id_wisata', $id);
    $query = $this->db->get();
    return $query;
  }

  public function insertDataWisata()
  {
    $kode = $this->db->query('SELECT RIGHT(id_wisata, 5) as kode FROM wisata ORDER BY id_wisata DESC LIMIT 1')->result()[0]->kode + 1;
    $buat_id = str_pad($kode, 5, "0", STR_PAD_LEFT);
    $id_wisata = "OW-$buat_id";

    $data = [
      'id_wisata' => $id_wisata,
      'nama_wisata' => htmlspecialchars($this->input->post('nama_wisata', true)),
      'deskripsi_wisata' => htmlspecialchars($this->input->post('deskripsi_wisata', true)),
      'alamat' => htmlspecialchars($this->input->post('alamat', true)),
      'longitude' => htmlspecialchars($this->input->post('longitude', true)),
      'latitude' => htmlspecialchars($this->input->post('latitude', true)),
      'id_user' => 1,
      'id_status_wisata' => 1
    ];

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
