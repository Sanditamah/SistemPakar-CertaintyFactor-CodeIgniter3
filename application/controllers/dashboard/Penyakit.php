<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penyakit extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_login', 'm_login');
        $this->load->model('Penyakit_model', 'm_penyakit');
        if (!$this->m_login->CurrentUser()) {
            $this->session->set_flashdata('msg', "Pastikan anda sudah login akun!");
            $this->session->set_flashdata('msg_class', 'alert-danger');
            redirect('login');
        }
    }

    public function index()
    {
        $data = [
            'data' => $this->m_penyakit->get_data(),
        ];
        $this->load->view('admin/partials/head', $data);
        $this->load->view('admin/penyakit/data_penyakit', $data);
        $this->load->view('admin/partials/footer', $data);
    }

    public function insert()
    {
        if ($this->input->method() === 'post') {
            $this->form_validation->set_rules($this->m_penyakit->rules());
            if ($this->form_validation->run() == FALSE) {
                //var_dump($this->form_validation->error_array());
                $this->load->view('admin/partials/head');
                $this->load->view('admin/penyakit/add');
                $this->load->view('admin/partials/footer');
            } else {
                date_default_timezone_set("Asia/Jakarta");
                $time = date('Y-m-d');
                $data = array(
                    'nama_penyakit'     => $this->input->post('nama_penyakit', TRUE),
                    'keterangan'        => $this->input->post('keterangan', TRUE),
                    'level_id'          => $this->input->post('level_id', TRUE),
                    'kd_penyakit'       => $this->input->post('kd_penyakit', TRUE),
                    'date'              => $time,
                );
                $this->m_penyakit->save($data);
                $this->session->set_flashdata('msg', "Insert Success!.");
                $this->session->set_flashdata('msg_class', 'alert-success');
                redirect('penyakit');
            }
        } else {
            $this->load->view('admin/partials/head');
            $this->load->view('admin/penyakit/add');
            $this->load->view('admin/partials/footer');
        }
    }

    public function edit($kd_penyakit)
    {
        if ($this->input->method() === 'post') {
            $this->form_validation->set_rules($this->m_penyakit->rules());
            if ($this->form_validation->run() == FALSE) {
                $data = [
                    'data' => $this->m_penyakit->penyakit_by_kd($kd_penyakit),
                ];
                $this->load->view('admin/partials/head', $data);
                $this->load->view('admin/penyakit/edit', $data);
                $this->load->view('admin/partials/footer', $data);
            } else {
                date_default_timezone_set("Asia/Jakarta");
                $inptanggal = date('Y-m-d');
                $data = array(
                    'nama_penyakit'     => $this->input->post('nama_penyakit', TRUE),
                    'keterangan'        => $this->input->post('keterangan', TRUE),
                    'level_id'          => $this->input->post('level_id', TRUE),
                    'date'              => $inptanggal

                );
                $this->m_penyakit->update($data, $kd_penyakit);
                $this->session->set_flashdata('msg', "Update Success!.");
                $this->session->set_flashdata('msg_class', 'alert-success');
                redirect('penyakit');
            }
        } else {
            $data = [
                'data' => $this->m_penyakit->penyakit_by_kd($kd_penyakit),
            ];
            $this->load->view('admin/partials/head', $data);
            $this->load->view('admin/penyakit/edit', $data);
            $this->load->view('admin/partials/footer', $data);
        }
    }

    public function delete($kd)
    {
        $this->session->set_flashdata('msg', "Delete Success!.");
        $this->session->set_flashdata('msg_class', 'alert-success');
        $this->m_penyakit->delete($kd);
        redirect('penyakit');
    }
}
