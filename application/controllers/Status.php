<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Status extends CI_Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Halaman Kasir',
            'isi'   => 'kasir/content/status',
        );
        // $data['wahana'] = $this->m_wahana->tampil_wahana()->result();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('kasir/layout/v_wrapper', $data);
    }
}
