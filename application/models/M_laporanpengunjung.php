<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_laporanpengunjung extends CI_Model
{
    public function getdata()
    {
        $this->db->select('*');
        $this->db->from('pengunjung');
        $this->db->where('status_qr', '1');
        $query = $this->db->get();
        return $query->result();
    }
}
