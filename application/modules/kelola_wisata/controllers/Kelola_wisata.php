<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelola_wisata extends MX_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('kelola_wisata/M_kelola_wisata');
  }

  public function index()
  {
    $data['title'] = 'Wisata';
    $data['user'] = $this->db->get_where(
      'user',
      ['username' => $this->session->userdata('username')]
    )->row_array();

    $data['view'] = $this->M_kelola_wisata->readDataWisata();
    $data['kategori_status_wisata'] = $this->M_kelola_wisata->readDataStatusWisata();

    $this->load->view('_templates/header', $data);
    $this->load->view('_templates/sidebar', $data);
    $this->load->view('_templates/navbar', $data);
    $this->load->view('kelola_wisata/v_backend_wisata', $data);
    $this->load->view('_templates/footer');
  }

  public function readDataPengguna()
  {
    return $this->db->get('user');
  }

  public function tambahDataWisata()
  {
    $this->M_kelola_wisata->insertDataWisata();
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data Wisata Berhasil Ditambahkan! </div>');
    redirect('kelola_wisata');
  }

  public function ubahDataWisata()
  {
    $this->M_kelola_wisata->updateDatawisata();
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data Wisata Berhasil Diubah! </div>');
    redirect('kelola_wisata');
  }

  public function ubahDataStatus_wisata()
  {
    $this->M_kelola_wisata->updateDataStatus_Wisata();
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Status Wisata Berhasil Diubah! </div>');
    redirect('kelola_wisata');
  }

  public function hapusDataWisata($id)
  {
    $this->M_kelola_wisata->deleteDataWisata($id);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data Wisata Berhasil Dihapus! </div>');
    redirect('kelola_wisata');
  }

  public function cetak_laporan()
  {
    $tgl_awal = $this->input->post('tgl_awal', true);
    $tgl_akhir = $this->input->post('tgl_akhir', true);

    $data['view'] = $this->M_kelola_wisata->readCetakWisata($tgl_awal, $tgl_akhir);
    $data['tgl_awal'] = date_format(date_create($tgl_awal), "d-M-Y");
    $data['tgl_akhir'] = date_format(date_create($tgl_akhir), "d-M-Y");

    $this->load->view('kelola_wisata/v_cetak_laporan', $data);
  }
}
