<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Wahana extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_wahana');
    }

    public function index()
    {
        $data = array(
            'title' => 'Halaman Admin',
            'isi'   => 'admin/content/datawahana',
        );
        $data['wahana'] = $this->m_wahana->tampil_wahana()->result();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('admin/layout/v_wrapper', $data);
    }



    public function tambah_data()
    {
        $nama = $this->input->post('nama');
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
            'nama'  => $nama,
            'gambar' => $gambar,
            'keterangan' => $keterangan
        );
        $this->m_wahana->tambah_wahana($data, 'wahana');
        redirect('wahana');

        $this->load->view('admin/layout/v_wrapper', $data);
    }


    public function edit($id)
    {
        $data = array(
            'title' => 'Halaman Admin',
            'isi'   => 'admin/content/editwahana',
        );
        $where = array('id_wahana' => $id);
        $data['wahana'] = $this->m_wahana->edit_wahana($where, 'wahana')->result();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('admin/layout/v_wrapper', $data);
    }

    public function update()
    {
        $id         = $this->input->post('id_wahana');
        $nama = $this->input->post('nama');
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
            'nama'  => $nama,
            'gambar' => $gambar,
            'keterangan' => $keterangan
        );

        $where = array(
            'id_wahana' => $id
        );

        $this->m_wahana->update_wahana($where, $data, 'wahana');
        redirect('wahana');

        $this->load->view('admin/layout/v_wrapper', $data);
    }

    public function delete($id)
    {
        $where = array('id_wahana' => $id);
        $this->m_wahana->hapus_data($where, 'wahana');
        redirect('wahana/index');
    }
}

    
    // 081392615151
    // {
    //     $data = array(
    //         'title' => 'Halaman Admin',
    //         'isi'   => 'admin/content/editwahana',
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
