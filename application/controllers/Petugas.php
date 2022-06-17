<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Petugas extends CI_Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Halaman Petugas',
            'isi'   => 'petugas/v_petugas'
        );
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('petugas/layout/v_wrapper', $data);
    }

    public function scan($data)
    {
        // $data = array(
        //     'title' => 'Halaman Petugas',
        //     'isi'   => 'petugas/content/scanner'
        // );

        $this->db->set('status', '1');
        $this->db->where('kd_pengunjung', $data);
        $this->db->update('mahasiswa');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Status Berhasil diubah</div>');

        // $this->load->view('petugas/layout/v_wrapper', $data);
    }
}
