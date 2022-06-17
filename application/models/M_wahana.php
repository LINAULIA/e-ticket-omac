<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_wahana extends CI_Model
{
    public function tampil_wahana()
    {
        return $this->db->get('wahana');
    }

    public function tambah_wahana($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function update($data, $where)
    {
        $this->db->update('wahana', $data, $where);
    }
    public function get_by_id($id)
    {
        return $this->db->get_where('wahana', array('id_wahana' => $id))->row();
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
