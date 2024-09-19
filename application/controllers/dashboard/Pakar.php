<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pakar extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_login', 'm_login');
        $this->load->model('Pakar_model', 'm_pakar');
        if (!$this->m_login->CurrentUser()) {
            $this->session->set_flashdata('msg', "Pastikan anda sudah login akun!.");
            $this->session->set_flashdata('msg_class', 'alert-danger');
            redirect('login');
        }
    }

    public function index()
    {
        $data = [
            'data' => $this->m_pakar->get_data(),
        ];
        $this->load->view('admin/partials/head', $data);
        $this->load->view('admin/pakar/data_pakar', $data);
        $this->load->view('admin/partials/footer', $data);
    }

    public function insert()
    {
        if ($this->input->method() === 'post') {
            $this->form_validation->set_rules($this->m_pakar->rules());
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('admin/partials/head');
                $this->load->view('admin/pakar/add');
                $this->load->view('admin/partials/footer');
            } else {
                $data = array(
                    'nama'        => $this->input->post('nama', TRUE),
                    'username'    => $this->input->post('username', TRUE),
                    'password'    => md5($this->input->post('password')),
                    'level_id'    => $this->input->post('level_id', TRUE),
                );
                $this->m_pakar->save($data);
                $this->session->set_flashdata('msg', "Insert Success!.");
                $this->session->set_flashdata('msg_class', 'alert-success');
                redirect('pakar');
            }
        } else {
            $this->load->view('admin/partials/head');
            $this->load->view('admin/pakar/add');
            $this->load->view('admin/partials/footer');
        }
    }

    public function edit($id_pakar)
    {
        if ($this->input->method() === 'post') {
            $this->form_validation->set_rules($this->m_pakar->rules());
            if ($this->form_validation->run() == FALSE) {
                $data = [
                    'data' => $this->m_pakar->pakar_by_id($id_pakar),
                ];
                $this->load->view('admin/partials/head', $data);
                $this->load->view('admin/pakar/edit', $data);
                $this->load->view('admin/partials/footer', $data);
            } else {
                $cek = $this->m_pakar->pakar_by_id($id_pakar);
                if ($this->input->post('password') == NULL) {
                    $pass = $cek->password;
                } else {
                    $pass = md5($this->input->post('password'));
                }
                $data = array(
                    'nama'   => $this->input->post('nama', TRUE),
                    'username' => $this->input->post('username', TRUE),
                    'password' => $pass,
                    'level_id'    => $this->input->post('level_id', TRUE),
                );
                $this->m_pakar->update($data, $id_pakar);
                $this->session->set_flashdata('msg', "Update Success!.");
                $this->session->set_flashdata('msg_class', 'alert-success');
                redirect('pakar');
            }
        } else {
            $data = [
                'data' => $this->m_pakar->pakar_by_id($id_pakar),
            ];
            $this->load->view('admin/partials/head', $data);
            $this->load->view('admin/pakar/edit', $data);
            $this->load->view('admin/partials/footer', $data);
        }
    }

    public function delete($id)
    {
        $this->session->set_flashdata('msg', "Delete Success!.");
        $this->session->set_flashdata('msg_class', 'alert-success');
        $this->m_pakar->delete($id);
        redirect('pakar');
    }
}
