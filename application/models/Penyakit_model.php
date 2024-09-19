<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Penyakit_model extends CI_Model
{
    public $kd_penyakit;
    public $table = "tb_penyakit";

    public function kd_penyakit()
    {
        $this->db->select('RIGHT(tb_penyakit.kd_penyakit,2) as kd_penyakit', FALSE);
        $this->db->order_by('kd_penyakit', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('tb_penyakit');
        if ($query->num_rows() <> 0) {
            $data = $query->row();
            $kode = intval($data->kd_penyakit) + 1;
        } else {
            $kode = 1;
        }
        $batas = str_pad($kode, 2, "0", STR_PAD_LEFT);
        $kodetampil = "P" . $batas;
        return $kodetampil;
    }

    public function rules()
    {
        return [
            [
                'field' => 'nama_penyakit',
                'label' => 'penyakit',
                'rules' => 'required'
            ],
            [
                'field' => 'keterangan',
                'label' => 'keterangan',
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
        $this->db->select('*')->from('tb_penyakit');
        $query = $this->db->get();
        return $query;
    }

    public function penyakit_by_kd($kd)
    {
        $this->db->select('*')->from('tb_penyakit')->where('kd_penyakit', $kd);
        $query = $this->db->get();
        return $query->row();
    }

    public function save($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function update($data, $kd)
    {
        return $this->db->update($this->table, $data, ['kd_penyakit' => $kd]);
        $this->db->error();
    }

    function delete($kd)
    {
        $this->db->where('kd_penyakit', $kd);
        return $this->db->delete('tb_penyakit');
    }

    public function get_by_kd($penyakit_kd)
    {
        // Lakukan query ke database untuk mendapatkan data penyakit berdasarkan ID
        $this->db->where('kd_penyakit', $penyakit_kd);
        $query = $this->db->get('tb_penyakit');

        // Mengembalikan hasil query dalam bentuk objek atau array
        return $query->row();
    }

    public function get_penyakit_name($id_penyakit)
    {
        $this->db->select('nama_penyakit, keterangan');
        $this->db->where('kd_penyakit', $id_penyakit);
        return $this->db->get('tb_penyakit');
    }
}
