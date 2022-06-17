<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_kuliner extends CI_Model
{
    public function tampil_kuliner()
    {
        return $this->db->get('kuliner');
    }

    public function tambah_kuliner($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function edit_kuliner($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_kuliner($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
