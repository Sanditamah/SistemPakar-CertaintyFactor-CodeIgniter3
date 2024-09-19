<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_login');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('login');
    }

    public function chek_login()
    {
        $username = $this->input->post("username");
        $password = md5($this->input->post("password"));

        // Check user table
        $user = $this->Model_login->admin($username);
        $pakar = $this->Model_login->pakar($username);

        if ($user->num_rows() == 1) {
            $user_data = $user->row();
            $dashboard_url = 'dashboard'; // Sesuaikan dengan controller dashboard user
        } elseif ($pakar->num_rows() == 1) {
            $pakar_data = $pakar->row();
            $dashboard_url = 'dashboard/pakar'; // Sesuaikan dengan controller dashboard pakar
        } else {
            $this->session->set_flashdata('msg', "Maaf, username dan password Anda salah!!");
            $this->session->set_flashdata('msg_class', 'alert-danger');
            redirect('login');
        }

        if (
            (isset($user_data) && $user_data->password == $password) ||
            (isset($pakar_data) && $pakar_data->password == $password)
        ) {
            $data_session = array(
                'id'  => (isset($user_data)) ? $user_data->id_admin : $pakar_data->id_pakar,
                'nama'     => (isset($user_data)) ? $user_data->nama : $pakar_data->nama,
                'username' => $username,
                'level_id' => (isset($user_data)) ? $user_data->level_id : $pakar_data->level_id,
                'login'    => "berhasil-login"
            );

            $this->session->set_userdata($data_session);
            // echo " Session Data Before Login: ";
            // var_dump($this->session->userdata());
            //var_dump($password, $user_data, $pakar_data);
            // var_dump($password, $user_data->password, $pakar_data->password);
            $this->session->set_flashdata('msg', "Selamat, login Anda berhasil!");
            $this->session->set_flashdata('msg_class', 'alert-success');
            redirect($dashboard_url);
        } else {
            $this->session->set_flashdata('msg', "Maaf, username dan password Anda salah!");
            $this->session->set_flashdata('msg_class', 'alert-danger');
            redirect('login');
        }
    }


    public function logout()
    {
        $this->session->sess_destroy();
        $this->session->unset_userdata($data_session);
        $this->session->set_flashdata('msg', "Anda berhasil logout!");
        $this->session->set_flashdata('msg_class', 'alert-success');
        redirect('login');
    }
}
