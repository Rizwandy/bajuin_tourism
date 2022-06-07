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

    public function readDataPetaWisata()
    {
        $this->db->select('*');
        $this->db->from('wisata');
        $this->db->where('id_status_wisata', 1);
        $query = $this->db->get();
        return $query;
    }
}
