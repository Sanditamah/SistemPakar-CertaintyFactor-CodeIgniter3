<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pasien_model extends CI_Model
{
    public $table = "tb_konsultasi";
    public $table2 = "tb_detail_konsultasi";

    public function get_data()
    {
        $this->db->select('*')->from('tb_konsultasi');
        $query = $this->db->get();
        return $query;
    }

    public function get_biodata_byuniq($uiniq_id)
    {
        $this->db->select('*')->from('tb_konsultasi')->where('id_konsultasi', $uiniq_id);
        $query = $this->db->get();
        return $query->row();
    }

    public function get_detail($id)
    {
        $this->db->select('*');
        $this->db->from('tb_konsultasi', 'tb_gejala', 'tb_detail_konsultasi');
        $this->db->join('tb_detail_konsultasi', 'tb_konsultasi.id_konsultasi = tb_detail_konsultasi.id_konsultasi');
        $this->db->join('tb_gejala', 'tb_detail_konsultasi.kd_gejala = tb_gejala.kd_gejala');
        $this->db->where('tb_konsultasi.id_konsultasi', $id);
        $query = $this->db->get();
        return $query;
    }

    public function get_no_urut()
    {
        $this->db->select('id_konsultasi');
        $this->db->from('tb_konsultasi');
        $this->db->order_by('id_konsultasi', 'DESC');
        return $this->db->get()->first_row();
    }

    public function save($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function savedetail($data)
    {
        return $this->db->insert($this->table2, $data);
    }
}
