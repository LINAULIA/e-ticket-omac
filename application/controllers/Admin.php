<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'text'));
        $this->load->model('m_admin');
        is_logged_in();
    }

    public function index()
    {
        $data = array(
            'title' => 'Halaman Admin',
            'isi'   => 'admin/v_admin',
        );
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('admin/layout/v_wrapper', $data);
    }

    public function datauser()
    {
        $data = array(
            'title' => 'Halaman Admin',
            'isi'   => 'admin/content/datauser'
        );
        $data['datauser'] = $this->m_admin->user()->result();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('admin/layout/v_wrapper', $data);
    }

    public function datatiket()
    {
        $data = array(
            'title' => 'Halaman Admin',
            'isi'   => 'admin/content/datatiket'
        );
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('admin/layout/v_wrapper', $data);
    }
    public function berita()
    {
        $data = array(
            'title' => 'Halaman Admin',
            'isi'   => 'admin/content/berita'
        );
        $data['berita'] = $this->m_admin->tampil_berita()->result();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('admin/layout/v_wrapper', $data);
    }
    public function simpanberita()
    {
        $judul = $this->input->post('judul');
        $keterangan = $this->input->post('keterangan');
        $tgl = date("Y-m-d");

        $gambar      = $_FILES['gambar']['name'];
        if ($gambar = '') {
        } else {
            $config['upload_path']          = './upload/berita/';
            $config['allowed_types']        = 'jpg|jpeg|png';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Gambar Gagal di Upload!";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }
        $data = array(
            'judul'  => $judul,
            'keterangan' => $keterangan,
            'tanggal_publikasi' => $tgl,
            'gambar' => $gambar
        );
        $this->m_admin->tambah_berita($data, 'berita');
        redirect('admin/berita');

        $this->load->view('admin/layout/v_wrapper', $data);
    }
    public function pengunjung()
    {
        $data = array(
            'title' => ' Detail Status',
            'isi'   => 'admin/content/datapengunjung'
        );
        $data['pengunjung'] = $this->m_admin->pengunjung();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('admin/layout/v_wrapper', $data, FALSE);
    }
}
