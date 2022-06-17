<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model
{
    public function tampil_berita()
    {
        return $this->db->get('berita');
    }
    public function tambah_berita($data)
    {
        return $this->db->insert('berita', $data);
    }
    public function pengunjung()
    {
        $this->db->select('*');
        $this->db->from('pengunjung');
        $this->db->where('status_qr', '1');
        $query = $this->db->get();
        return $query->result();
    }

    public function user()
    {
        return $this->db->get('user');
    }
}
