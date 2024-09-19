<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pasien extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_login', 'm_login');
        $this->load->model('Pasien_model', 'm_pasien');
        if (!$this->m_login->CurrentPakar()) {
            $this->session->set_flashdata('msg', "Pastikan anda sudah login akun!");
            $this->session->set_flashdata('msg_class', 'alert-danger');
            redirect('login');
        }
    }

    public function index()
    {
        $data = [
            'data' => $this->m_pasien->get_data(),
        ];
        $this->load->view('pakar/partials/head', $data);
        $this->load->view('pakar/pasien/data_pasien', $data);
        $this->load->view('pakar/partials/footer', $data);
    }

    public function detail($id)
    {
        $data = [
            'data' => $this->db->get_where('tb_konsultasi', array('id_konsultasi' => $id))->row_array(),
            'detail' => $this->m_pasien->get_detail($id),
        ];
        $this->load->view('pakar/partials/head', $data);
        $this->load->view('pakar/pasien/detail_pasien', $data);
        $this->load->view('pakar/partials/footer', $data);
    }
}
