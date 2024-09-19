<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gejala extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_login', 'm_login');
        $this->load->model('Gejala_model', 'm_gejala');
        if (!$this->m_login->CurrentPakar()) {
            $this->session->set_flashdata('msg', "Pastikan anda sudah login akun!");
            $this->session->set_flashdata('msg_class', 'alert-danger');
            redirect('login');
        }
    }

    public function index()
    {
        $data = [
            'data' => $this->m_gejala->get_data(),
        ];
        $this->load->view('pakar/partials/head', $data);
        $this->load->view('pakar/gejala/data_gejala', $data);
        $this->load->view('pakar/partials/footer', $data);
    }
}
