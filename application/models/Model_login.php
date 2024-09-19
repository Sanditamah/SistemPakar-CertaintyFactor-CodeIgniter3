<?php
class Model_login extends CI_Model
{
    const SESSION_KEY = 'username';
    function __construct()
    {
        parent::__construct();
    }

    public function getSecurity()
    {
        $level    = $this->session->userdata('level_id');
        if (empty($level)) {
            $this->session->set_flashdata("info", "<i class=\"ace-icon fa fa-exclamation-circle red\"></i>Masukkan Nama Pengguna dan Kata Sandi Anda!");
            redirect('login');
        }
    }

    //Cek di database tb_pakar
    public function pakar($username)
    {
        $this->db->where('username', $username);
        return $this->db->get('tb_pakar');
    }

    //Cek di database tb_admin
    public function admin($username)
    {
        $this->db->where('username', $username);
        return $this->db->get('tb_admin');
    }

    public function CurrentUser()
    {
        if (!$this->session->has_userdata(self::SESSION_KEY)) {
            return null;
        }

        $user_id = $this->session->userdata(self::SESSION_KEY);
        $query = $this->db->get_where('tb_admin', ['username' => $user_id]);
        return $query->result();
    }

    public function CurrentPakar()
    {
        if (!$this->session->has_userdata(self::SESSION_KEY)) {
            return null;
        }

        $pakar_id = $this->session->userdata(self::SESSION_KEY);
        $query = $this->db->get_where('tb_pakar', ['username' => $pakar_id]);
        return $query->result();
    }
}
