<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    public $table = "tb_admin";

    public function rules()
    {
        return [
            [
                'field' => 'nama',
                'label' => 'Nama',
                'rules' => 'required'
            ],
            [
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required'
            ],
            [
                'field' => 'password',
                'label' => 'password',
                'rules' => 'required'
            ],
            [
                'field' => 'level_id',
                'label' => 'level_id',
                'rules' => 'required'
            ],
        ];
    }

    public function get_data()
    {
        $this->db->select('*')->from('tb_admin');
        $query = $this->db->get();
        return $query;
    }

    public function admin_by_id($id_admin)
    {
        return $this->db->select('*')->from('tb_admin')->where('id_admin', $id_admin)->get()->row();
    }


    public function save($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function update($data, $id_admin)
    {
        return $this->db->update($this->table, $data, ['id_admin' => $id_admin]);
    }

    public function delete($id_admin)
    {
        $this->db->where('id_admin', $id_admin);
        return $this->db->delete('tb_admin');
    }
}
