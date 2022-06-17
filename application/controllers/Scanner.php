<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Scanner extends CI_Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Halaman Kasir',
            'isi'   => 'kasir/content/scanner',
        );
        // $data['wahana'] = $this->m_wahana->tampil_wahana()->result();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('kasir/layout/v_wrapper', $data);
    }

    public function scan($data)
    {
        $this->db->set('status_qr', '1');
        $this->db->where('nomor_tiket', $data);
        $this->db->update('pengunjung');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Status Berhasil diubah</div>');

        // $this->load->view('petugas/layout/v_wrapper', $data);
    }
}
