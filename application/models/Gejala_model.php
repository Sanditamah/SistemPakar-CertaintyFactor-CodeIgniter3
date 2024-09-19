<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Gejala_model extends CI_Model
{

    public $table = "tb_gejala";

    public function kd_gejala()
    {
        $this->db->select('RIGHT(tb_gejala.kd_gejala,2) as kd_gejala', FALSE);
        $this->db->order_by('kd_gejala', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('tb_gejala');
        if ($query->num_rows() <> 0) {
            $data = $query->row();
            $kode = intval($data->kd_gejala) + 1;
        } else {
            $kode = 1;
        }
        $batas = str_pad($kode, 2, "0", STR_PAD_LEFT);
        $kodetampil = "G" . $batas;
        return $kodetampil;
    }

    public function rules()
    {
        return [
            [
                'field' => 'nama_gejala',
                'label' => 'gejala',
                'rules' => 'required'
            ],
            [
                'field' => 'level_id',
                'label' => 'level_id',
                'rules' => 'required'
            ]
        ];
    }

    public function get_data()
    {
        $this->db->select('*')->from('tb_gejala');
        $query = $this->db->get();
        return $query;
    }

    public function gejala_by_kd($id)
    {
        $this->db->select('*')->from('tb_gejala')->where('kd_gejala', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function save($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function update($data, $id)
    {
        return $this->db->update($this->table, $data, ['kd_gejala' => $id]);
    }

    function delete($kd)
    {
        $this->db->where('kd_gejala', $kd);
        return $this->db->delete('tb_gejala');
    }

    public function get_data_by_kd($gejala_kds)
    {
        $this->db->where_in('kd_gejala', explode(',', $gejala_kds));
        $query = $this->db->get('tb_gejala');
        return $query;
    }

    public function getCfGejala($gejala_kds)
    {
        $query = $this->db->select('cf_rule')
            ->from('tb_gabungan')
            ->where('kd_gejala', $gejala_kds)
            ->get();

        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row->cf_rule;
        } else {
            return 0; // Jika tidak ditemukan, return nilai CF gejala 0
        }
    }

    public function get_gejala_name($kd_gejala)
    {
        $this->db->select('nama_gejala');
        $this->db->where('kd_gejala', $kd_gejala);
        $query = $this->db->get('tb_gejala');

        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row->nama_gejala;
        }

        return false;
    }
}
