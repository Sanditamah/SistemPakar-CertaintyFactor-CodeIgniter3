<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Bobot_model extends CI_Model
{

    public $table = "tb_rules";

    public function rules()
    {
        return [
            [
                'field' => 'kd_penyakit',
                'label' => 'Penyakit',
                'rules' => 'required'
            ],
            [
                'field' => 'kd_gejala',
                'label' => 'Gejala',
                'rules' => 'required'
            ],
            [
                'field' => 'nilai_mb',
                'label' => 'Nilai_MB',
                'rules' => 'required'
            ],
            [
                'field' => 'nilai_md',
                'label' => 'Nilai_MD',
                'rules' => 'required'
            ],
            [
                'field' => 'cf_rule',
                'label' => 'Nilai Cf Rule',
                'rules' => 'required'
            ]
        ];
    }

    public function getPenyakitCf($gejalaKd, $kd_penyakit)
    {
        $this->db->select('cf_rule');
        $this->db->from('tb_rules');
        $this->db->where('kd_gejala', $gejalaKd);
        $this->db->where('kd_penyakit', $kd_penyakit);
        $query = $this->db->get();
        return $query->result();
    }
    // public function getPenyakitCf($gejalaIds)
    // {
    //     // Ambil nilai CF[Rule] dari tabel Aturan berdasarkan gejala yang diamati
    //     $this->db->select('id_penyakit, cf_rule');
    //     $this->db->from('tb_gabungan');
    //     $this->db->where_in('id_gejala', explode(',', $gejalaIds));
    //     $query = $this->db->get();

    //     if ($query->num_rows() > 0) {
    //         return $query->result_array();
    //     } else {
    //         return 0; // Nilai default jika tidak ada basis pengetahuan yang sesuai
    //     }
    // }

    public function get_data()
    {
        $this->db->select('*')->from('tb_rules')
            ->join('tb_gejala', 'tb_rules.kd_gejala = tb_gejala.kd_gejala')
            ->join('tb_penyakit', 'tb_rules.kd_penyakit = tb_penyakit.kd_penyakit');
        $query = $this->db->get();
        return $query;
    }

    public function bobot_by_id($id)
    {
        $this->db->select('*')->from('tb_rules')->where('id_rules', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function get_nilai_cf($kd_penyakit, $kd_gejala)
    {
        $this->db->select('cf_rule');
        $this->db->from('tb_rules');
        $this->db->where('kd_penyakit', $kd_penyakit);
        $this->db->where('kd_gejala', $kd_gejala);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $row = $query->row();
            $cf_rule = $row->cf_rule;

            return [
                'cf_rule' => $cf_rule,
            ];
        }

        return null;
    }

    /* 
    public function get_nilai_mb($nilai_mb)
    {
        $this->db->select('nilai_mb');
        $this->db->from('tb_gabungan');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $row = $query->row();
            $nilai_mb = $row->nilai_mb;

            return [
                'nilai_mb' => $nilai_mb,
            ];
        }
    }
    */

    public function get_by_gejala($gejala)
    {
        $sql = "SELECT p.kd_penyakit,
                   p.nama_penyakit,
                   p.keterangan
            FROM tb_rules AS gp
            INNER JOIN tb_penyakit AS p
                ON gp.kd_penyakit = p.kd_penyakit
            WHERE gp.kd_gejala IN (" . $gejala . ")
            GROUP BY p.kd_penyakit
            ORDER BY p.kd_penyakit";

        return $this->db->query($sql);
    }

    public function get_cf_rule($gejalaId, $penyakitId)
    {
        $this->db->select('cf_rule');
        $this->db->from('tb_rules');
        $this->db->where('kd_gejala', $gejalaId);
        $this->db->where('kd_penyakit', $penyakitId);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row()->cf_rule;
        } else {
            return 0;
        }
    }

    public function get_gejala_by_penyakit($id, $gejala = null)
    {
        $sql = "SELECT gb.kd_gejala, gb.cf_rule, gjl.nama_gejala
        FROM tb_rules AS gb
        INNER JOIN tb_gejala AS gjl ON gjl.kd_gejala = gb.kd_gejala
        WHERE kd_penyakit = " . $id;

        if ($gejala != null) {
            $sql .= " AND gb.kd_gejala IN (" . $gejala . ")";
        }
        $sql .= " ORDER BY gb.kd_gejala ASC"; // Mengurutkan dari besar ke kecil

        return $this->db->query($sql);
    }

    public function get_aturan_by_gejala($gejala_ids)
    {
        $this->db->select('id_rules, kd_penyakit, kd_gejala, cf_rule');
        $this->db->from('tb_rules');
        $this->db->where_in('kd_gejala', $gejala_ids);
        $query = $this->db->get();
        return $query;
    }


    public function loadgejala()
    {
        return $this->db->get('tb_gejala')->result();
    }

    public function loadpenyakit()
    {
        return $this->db->get('tb_penyakit')->result();
    }

    public function save($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function update($data, $id)
    {
        return $this->db->update($this->table, $data, ['id_rules' => $id]);
    }

    function delete($id)
    {
        $this->db->where('id_rules', $id);
        return $this->db->delete('tb_rules');
    }
}
