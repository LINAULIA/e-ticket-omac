<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kuliner extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_kuliner');
    }

    public function index()
    {
        $data = array(
            'title' => 'Halaman Admin',
            'isi'   => 'admin/content/datakuliner',
        );
        $data['kuliner'] = $this->m_kuliner->tampil_kuliner()->result();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('admin/layout/v_wrapper', $data);
    }

    public function tambah_data()
    {
        $nama_kuliner = $this->input->post('nama_kuliner');
        $gambar      = $_FILES['gambar']['name'];
        if ($gambar = '') {
        } else {
            $config['upload_path']          = './upload';
            $config['allowed_types']        = 'jpg|jpeg|png';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Gambar Gagal di Upload!";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }
        $keterangan = $this->input->post('keterangan');
        $data = array(
            'nama_kuliner'  => $nama_kuliner,
            'gambar' => $gambar,
            'keterangan' => $keterangan
        );
        $this->m_kuliner->tambah_kuliner($data, 'kuliner');
        redirect('kuliner');

        $this->load->view('admin/layout/v_wrapper', $data);
    }

    public function edit($id)
    {
        $data = array(
            'title' => 'Halaman Admin',
            'isi'   => 'admin/content/editkuliner',
        );
        $where = array('id_kuliner' => $id);
        $data['kuliner'] = $this->m_kuliner->edit_kuliner($where, 'kuliner')->result();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('admin/layout/v_wrapper', $data);
    }

    public function update()
    {
        $id         = $this->input->post('id_kuliner');
        $nama_kuliner = $this->input->post('nama_kuliner');
        $gambar      = $_FILES['gambar']['name'];
        if ($gambar = '') {
        } else {
            $config['upload_path']          = './upload';
            $config['allowed_types']        = 'jpg|jpeg|png';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Gambar Gagal di Upload!";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }
        $keterangan = $this->input->post('keterangan');

        $data = array(
            'nama_kuliner'  => $nama_kuliner,
            'gambar' => $gambar,
            'keterangan' => $keterangan
        );

        $where = array(
            'id_kuliner' => $id
        );

        $this->m_kuliner->update_kuliner($where, $data, 'kuliner');
        redirect('kuliner');

        $this->load->view('admin/layout/v_wrapper', $data);
    }

    public function delete($id)
    {
        $where = array('id_kuliner' => $id);
        $this->m_kuliner->hapus_data($where, 'kuliner');
        redirect('kuliner/index');
    }
}

    
    // 
    // {
    //     $data = array(
    //         'title' => 'Halaman Admin',
    //         'isi'   => 'admin/content/editkuliner',
    //     );
    //     
    //     $this->load->view('admin/layout/v_wrapper', $data);
    // }

    // public function update(){
    //     $id = $this->input->post('id');
    //     $nama = $this->input->post('nama');
    //     $gambar = $this->input->post('gambar');
    //     $keterangan = $this->input->post('keterangan');
    // }
