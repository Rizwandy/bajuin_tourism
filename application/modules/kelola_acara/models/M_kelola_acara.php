<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_kelola_acara extends CI_Model
{
    public function readDataAcara()
    {
        $this->db->select('*');
        $this->db->from('acara');
        $query = $this->db->get();
        return $query;
    }

    public function readDataDetailAcara($id)
    {
        $this->db->select('*');
        $this->db->from('acara');
        $this->db->where('id_acara', $id);
        $query = $this->db->get();
        return $query;
    }

    public function insertDataAcara()
    {
        $kode = $this->db->query('SELECT RIGHT(id_acara, 5) as kode FROM acara ORDER BY id_acara DESC LIMIT 1')->result()[0]->kode + 1;
        $tahun = date("Y");
        $buat_id = str_pad($kode, 5, "0", STR_PAD_LEFT);
        $id_acara = "ACARA-$tahun-$buat_id";

        $id = $this->input->post('id_acara', true);

        $foto_acara = $_FILES['foto_acara'];
        if ($foto_acara !== NULL) {
            $config['upload_path'] = './assets/imgs/foto_acara/';
            $config['allowed_types'] = 'jpg|png|gif|jpeg';

            $this->load->library('upload', $config);
            if ($this->upload->do_upload('foto_acara') == NULL) {
                $foto_acara = $this->db->get_where('acara', ['id_acara' => $id])->row_array()['gambar'];
            } else {
                $foto_acara = $this->upload->data('file_name');
            }
        }

        $data = [
            'id_acara' => $id_acara,
            'nama_acara' => htmlspecialchars($this->input->post('nama_acara', true)),
            'gambar' => $foto_acara,
            'deskripsi_acara' => htmlspecialchars($this->input->post('deskripsi_acara', true)),
            'tanggal' => htmlspecialchars($this->input->post('tanggal', true)),
            'id_user' => 1,
            'status_acara' => 'Aktif'
        ];

        $this->db->insert('acara', $data);
    }

    public function updateDataAcara()
    {
        $id = $this->input->post('id_acara', true);
        $data = [
            'id_acara' => htmlspecialchars($this->input->post('id_acara', true)),
            'nama_acara' => htmlspecialchars($this->input->post('nama_acara', true)),
            'gambar' => 'default.jpg',
            'deskripsi_acara' => htmlspecialchars($this->input->post('deskripsi_acara', true)),
            'tanggal' => htmlspecialchars($this->input->post('tanggal', true)),
        ];

        $this->db->where('id_acara', $id);
        $this->db->update('acara', $data);
    }

    public function updateDataStatusAcara()
    {
        $id = $this->input->post('id_acara', true);
        $data = [
            'id_acara' => htmlspecialchars($this->input->post('id_acara', true)),
            'nama_acara' => htmlspecialchars($this->input->post('nama_acara', true)),
            'gambar' => 'default.jpg',
            'deskripsi_acara' => htmlspecialchars($this->input->post('deskripsi_acara', true)),
            'tanggal' => htmlspecialchars($this->input->post('tanggal', true)),
            'status_acara' => htmlspecialchars($this->input->post('status_acara', true)),
        ];

        $this->db->where('id_acara', $id);
        $this->db->update('acara', $data);
    }

    public function deleteDataAcara($id)
    {
        $this->db->where('id_acara', $id);
        $this->db->delete('acara');
    }
}
