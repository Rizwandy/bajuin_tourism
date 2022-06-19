<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_beranda extends CI_Model
{
    function insert($data)
    {
        $this->db->insert('user', $data);
        return $this->db->insert_id();
    }

    public function readDataPengguna()
    {
        return $this->db->get('user');
    }

    public function readDataWisata()
    {
        return $this->db->get('wisata');
    }

    public function readDataAcara()
    {
        return $this->db->get('acara');
    }

    public function readDataPetaWisata()
    {
        $this->db->select('*');
        $this->db->from('wisata');
        $this->db->where('id_status_wisata', 1);
        $query = $this->db->get();
        return $query;
    }

    public function insertDataPengajuanWisata()
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
            'nama_user' => htmlspecialchars($this->input->post('nama_user', true)),
            'nomor_wa' => htmlspecialchars($this->input->post('nomor_wa', true)),
            'nama_wisata' => htmlspecialchars($this->input->post('nama_wisata', true)),
            'deskripsi_wisata' => htmlspecialchars($this->input->post('deskripsi_wisata', true)),
            'alamat' => htmlspecialchars($this->input->post('alamat', true)),
            'gambar' => $foto,
            'id_level_user' => 2,
            'id_status_user' => 2
        ];

        $this->db->insert('wisata', $data);
    }
}
