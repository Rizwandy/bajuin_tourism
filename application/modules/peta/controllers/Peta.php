<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');

class Pelajaran extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('level') == "Admin"){

        } else{
            redirect('elerning');
        }

        $this->load->model('M_Pelajaran');
    }

    public function index()
    {

        $data['title'] = 'Data Pelajaran';
        $data['pelajaran'] = $this->db->get('pelajaran')->result();

        $data['detail'] = $this->db->get('pelajaran')->result();


        $this->load->view('beranda/template/meta',$data);
        $this->load->view('beranda/template/navbar');
        $this->load->view('v_pelajaran',$data);
        $this->load->view('beranda/template/sidebar',$data);
        $this->load->view('beranda/template/footer');
        $this->load->view('beranda/template/js');
    }

    public function delete($id)
    {
        $where = array('id' => $id);
        $this->M_Pelajaran->delete($where, 'pelajaran');
        $this->session->set_flashdata('pesan', 'Berhasil Dihapus');
        redirect('Pelajaran','refresh');
    }

    public function view($id)
    {
        $where = array('id' => $id);
        $this->M_Pelajaran->view($where, 'pelajaran');
        redirect('Pelajaran','refresh');
    }

    public function tambah_file($id)
    {
        $file = $_FILES['materi'];
        if($file=''){}else {
            $config['upload_path']  =   './assets/file';
            $config['allowed_types']    ='jpg|png|pdf|word|docx';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('materi')){
                echo "Upload Gagal"; die;
            }else {
                $file = $this->upload->data('file_name');
            }
        }
        $data = array(
            'kode_pelajaran' => $id,
            'nama_materi'    => $file,
        );

        $where = array('kode_pelajaran'=>$id);
        $this->db->insert('materi', $data, $where);
        $this->session->set_flashdata('pesan', 'Berhasil Ditambah');
        redirect('Pelajaran');
    }

    // public function tambahpelajaran()
    // {
    //     $this->_rules();
    //     if ($this->form_validation->run() == false) {
    //     $this->index();            
    //     } else{
    //         $data = array(
    //             'kode_pelajaran' =>$this->input->post('kode'),
    //             'title' =>$this->input->post('nama_pelajaran'),
    //             'icon' =>$this->input->post('icon'),
    //             'url_admin' =>$this->input->post('url_admin'),
    //             'url_kursus' =>$this->input->post('url_kursus'),
    //             'caption' => $this->input->post('caption'),
    //             'is_active' => 1
    //         );
    //         $this->db->insert('pelajaran', $data);
    //         $this->session->set_flashdata('pesan', 'Ditambah');
    //         redirect('Pelajaran');
    //     }
    // }

    public function _rules()
    {
        $this->form_validation->set_rules('kode', 'Kode Pelajaran', 'required', array(
            'required' => '%s hasus diisi'
        ));
    }

    // public function print()
    // {
    //     $this->load->model('M_Kursus');
    //     $data['kursus'] = $this->M_Kursus->get_data();
    //     $this->load->view('print_kursus', $data);
    // }

    // public function pdf()
    // {
    //     $this->load->library('dompdf_gen');
    //     $this->load->model('M_Kursus');
    //     $data['kursus'] = $this->load->M_Kursus->get_data();
    //     $this->load->view('laporan_pdf', $data);

    //     $paper_size = 'A4';
    //     $orientation = 'potrait';
    //     $html = $this->output->get_output();
    //     $this->dompdf->set_paper($paper_size, $orientation);

    //     $this->dompdf->load_html($html);
    //     $this->dompdf->render();
    //     $this->dompdf->stream('Laporan_kursus.pdf', array('Attachment' =>0));

    // }
    
}

