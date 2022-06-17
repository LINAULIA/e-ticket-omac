<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengunjung extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->model('m_pengunjung');
    }

    public function index()
    {
        $data = array(
            'title' => 'Halaman Admin',
            'isi'   => 'admin/content/datapengunjung',

        );

        $data['mahasiswa'] = $this->m_pengunjung->tampil_pengunjung()->result();
        $data['kode'] = $this->m_pengunjung->cekkodepengunjung();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $this->load->view('admin/layout/v_wrapper', $data);
    }

    public function simpan()
    {
        $data = array(
            'title' => 'Halaman Admin',
            'isi'   => 'admin/content/datapengunjung',

        );
        $data['mahasiswa'] = $this->m_pengunjung->tampil_pengunjung()->result();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $kd_pengunjung = $this->input->post('kd_pengunjung');
        $tanggal = $this->input->post('tanggal');
        $harga = $this->input->post('harga');

        $this->load->library('ciqrcode'); //pemanggilan library QR CODE

        $config['cacheable']    = true; //boolean, the default is true
        $config['cachedir']        = './assets/'; //string, the default is application/cache/
        $config['errorlog']        = './assets/'; //string, the default is application/logs/
        $config['imagedir']        = './assets/images/'; //direktori penyimpanan qr code
        $config['quality']        = true; //boolean, the default is true
        $config['size']            = '1024'; //interger, the default is 1024
        $config['black']        = array(224, 255, 255); // array, default is array(255,255,255)
        $config['white']        = array(70, 130, 180); // array, default is array(0,0,0)
        $this->ciqrcode->initialize($config);

        $image_name = $kd_pengunjung . '.png'; //buat name dari qr code sesuai dengan kd_pengunjung

        $params['data'] = $kd_pengunjung; //data yang akan di jadikan QR CODE
        $params['level'] = 'H'; //H=High
        $params['size'] = 10;
        $params['savename'] = FCPATH . $config['imagedir'] . $image_name; //simpan image QR CODE ke folder assets/images/
        $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE

        $this->m_pengunjung->simpan($kd_pengunjung, $tanggal, $harga, $image_name);
        redirect("pengunjung", $data);
    }
}
