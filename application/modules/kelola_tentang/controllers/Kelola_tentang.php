<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelola_tentang extends MX_Controller
{
    public function index()
    {
        $this->load->view('v_tentang');
    }
}
