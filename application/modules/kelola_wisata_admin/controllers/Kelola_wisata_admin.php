<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kelola_wisata_admin extends MX_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('kelola_wisata_admin/M_kelola_wisata_admin');
  }

  public function index()
  {
    $data['title'] = 'Backend Wisata Admin';
    $data['user'] = $this->db->get_where(
      'user',
      ['username' => $this->session->userdata('username')]
    )->row_array();

    $data['view'] = $this->M_kelola_wisata_admin->readDataWisataAdmin();
    $data['kategori_status_wisata'] = $this->M_kelola_wisata_admin->readDataStatusWisata();

    $this->load->view('_templates/backend_header', $data);
    $this->load->view('_templates/sidebar', $data);
    $this->load->view('_templates/backend_navbar', $data);
    $this->load->view('kelola_wisata_admin/v_backend_wisata_admin', $data);
    $this->load->view('_templates/backend_footer');
  }

  public function tambahDataWisata()
  {
    $this->M_kelola_wisata_admin->insertDataWisata();
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data Wisata Berhasil Ditambahkan! </div>');
    redirect('kelola_wisata/backend_wisata');
  }

  public function ubahDataWisata()
  {
    $this->M_kelola_wisata_admin->updateDatawisata();
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data Wisata Berhasil Diubah! </div>');
    redirect('kelola_wisata');
  }

  public function ubahDataStatus_wisata()
  {
    $this->M_kelola_wisata_admin->updateDataStatus_Wisata();
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Status Wisata Berhasil Diubah! </div>');
    redirect('kelola_wisata');
  }

  public function hapusDataWisata($id)
  {
    $this->M_kelola_wisata_admin->deleteDataWisata($id);
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
