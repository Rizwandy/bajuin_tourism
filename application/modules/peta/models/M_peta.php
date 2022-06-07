<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');

class M_Pelajaran extends CI_Model{

    function get_pelajaran()
    {
        $data = "SELECT * 
            FROM `pelajaran`
            ";
        return $this->db->query($data)->result();
    }

    public function delete($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function view($where, $table)
    {
        
    }
    public function insert_data()
    {
        
    }
}

