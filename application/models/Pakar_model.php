<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pakar_model extends CI_Model
{
    public $table = "tb_pakar";

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
        $this->db->select('*')->from('tb_pakar');
        $query = $this->db->get();
        return $query;
    }

    public function pakar_by_id($id_pakar)
    {
        return $this->db->select('*')->from('tb_pakar')->where('id_pakar', $id_pakar)->get()->row();
    }


    public function save($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function update($data, $id_pakar)
    {
        return $this->db->update($this->table, $data, ['id_pakar' => $id_pakar]);
    }

    public function delete($id_pakar)
    {
        $this->db->where('id_pakar', $id_pakar);
        return $this->db->delete('tb_pakar');
    }
}
