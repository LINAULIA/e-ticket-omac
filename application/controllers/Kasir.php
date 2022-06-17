<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kasir extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'text'));
        $this->load->model('m_kasir');
    }

    public function index()
    {
        $data = array(
            'title' => 'Halaman Kasir',
            'isi'   => 'kasir/v_kasir'
        );
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('kasir/layout/v_wrapper', $data);
    }

    public function tampilhtm()
    {
        $data = array(
            'title' => 'Halaman Kasir',
            'isi'   => 'kasir/content/datapengunjung'
        );
        $data['pembayaran_tunai'] = $this->m_kasir->tampilhtm()->result();
        $data['no_tiket'] = $this->m_kasir->ceknotiket();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('kasir/layout/v_wrapper', $data);
    }

    public function htm()
    {
        $data = array(
            'title' => 'Halaman Kasir',
            'isi'   => 'kasir/content/datapengunjung',

        );
        $data['pembayaran_tunai'] = $this->m_kasir->tampilhtm()->result();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        // baca current date
        // $today = time();

        // $cek = $this->m_kasir->getPembayaran()->num_rows() + 1;

        // $no_pembayaran = 'LS' . $cek  . $today;

        $no_tiket = $this->input->post('nomor_tiket');

        $jumlah = $this->input->post('jumlah');

        $total_pembayaran = $this->input->post('total_pembayaran');

        $this->load->library('ciqrcode'); //pemanggilan library QR CODE

        $config['cacheable']    = true; //boolean, the default is true
        $config['cachedir']        = './assets/'; //string, the default is application/cache/
        $config['errorlog']        = './assets/'; //string, the default is application/logs/
        $config['imagedir']        = './assets/qrpemesan/'; //direktori penyimpanan qr code
        $config['quality']        = true; //boolean, the default is true
        $config['size']            = '1024'; //interger, the default is 1024
        $config['black']        = array(224, 255, 255); // array, default is array(255,255,255)
        $config['white']        = array(70, 130, 180); // array, default is array(0,0,0)
        $this->ciqrcode->initialize($config);

        $image_name = $no_tiket . '.png'; //buat name dari qr code sesuai dengan kd_pengunjung

        $params['data'] = $no_tiket; //data yang akan di jadikan QR CODE
        $params['level'] = 'H'; //H=High
        $params['size'] = 10;
        $params['savename'] = FCPATH . $config['imagedir'] . $image_name; //simpan image QR CODE ke folder assets/images/
        $this->ciqrcode->generate($params); // fungsi untuk generate QR CODE 

        // $data = array(
        //     'no_pembayaran' => $no_pembayaran,
        //     'nomor_tiket' => $no_tiket,
        //     'jumlah' => $jumlah,
        //     'total_pembayaran' => $total_pembayaran,
        //     'qr_code' => $image_name
        // );

        // $this->m_kasir->insertPembayaran($data);


        // //Generate No Tiket
        // $cek = $this->m_kasir->getTiket()->num_rows() + 1;


        // //input data tiket pemesan
        // for ($i = 1; $i <= $tiket_pemesan; $i++) {
        //     $data = array(
        //         'nomor_tiket' => $no_tiket,
        //     );

        //     $this->m_kasir->insertTiketPemesan($data);
        // };

        // input data pengunjung

        $data = array(
            'nomor_tiket' => $no_tiket,
            'status_qr' => 0
        );

        $this->m_kasir->insertpengunjung($data);

        // input data pemesan

        $data = array(
            'nomor_tiket' => $no_tiket,
            'tanggal' => $this->input->post('tanggal'),
            'jumlah' => $jumlah,
            'total_pembayaran' => $total_pembayaran,
            'qrcode' => $image_name,
            'status_qr' => 0
        );

        $this->m_kasir->insertPembayaranTunai($data);

        $this->session->set_flashdata('success', 'Berhasil Menambahkan Data Pengunjung');
        redirect('kasir/tampilhtm', $data);
    }



    public function eticketing()
    {
        $data = array(
            'title' => 'Halaman Kasir',
            'isi'   => 'kasir/content/eticketing'
        );
        $data['pembayaran'] = $this->m_kasir->getKonfirmasiPembayaran()->result();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('kasir/layout/v_wrapper', $data);
    }

    public function verifikasi($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $update = $this->m_kasir->updatePembayaran($id);

        if ($update) {
            $this->session->set_flashdata('notif', 'Berhasil Melakukan Verifikasi');
            redirect('kasir/eticketing', $data);
        } else {
            echo "gagal";
        }
    }

    public function tolak($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $ket_tolak = $this->input->post('ket_tolak');
        $update = $this->m_kasir->tolakPembayaran($id, $ket_tolak);

        if ($update) {

            $this->session->set_flashdata('notif', 'Pembayaran ditolak!!');
            redirect('kasir/eticketing', $data);
        } else {
            echo "gagal";
        }
    }

    public function detail_eticketing($id)
    {
        $data = array(
            'title' => ' Detail Pengunjung E-Ticketing',
            'isi'   => 'kasir/content/detail_eticketing'
        );
        $data['pemesan'] = $this->m_kasir->detail_eticketing($id);
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('kasir/layout/v_wrapper', $data, FALSE);
    }

    public function status()
    {
        $data = array(
            'title' => 'Halaman Kasir',
            'isi'   => 'kasir/content/status'
        );
        $data['pembayaran'] = $this->m_kasir->mstatus();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('kasir/layout/v_wrapper', $data);
    }

    public function ket_tolak()
    {
        $ket_tolak = $this->input->post('ket_tolak');

        $data = array(
            'ket_tolak' => $ket_tolak
        );

        $this->m_kasir->insertKettolak($data);
    }

    public function detail_status($id)
    {
        $data = array(
            'title' => ' Detail Status',
            'isi'   => 'kasir/content/detail_status'
        );
        $data['pemesan'] = $this->m_kasir->detail($id);
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('kasir/layout/v_wrapper', $data, FALSE);
    }

    public function tampilscan()
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
        redirect('kasir/hasilscan', $data);
    }

    public function hasilscan()
    {
        $data = array(
            'title' => ' Detail Status',
            'isi'   => 'kasir/content/hasilscanpemesan'
        );
        $data['pengunjung'] = $this->m_kasir->hasilpengunjung();
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('kasir/layout/v_wrapper', $data, FALSE);
    }

    public function detailscan($id)
    {
        $data = array(
            'title' => ' Detail Status',
            'isi'   => 'kasir/content/detail_scan'
        );
        $data['pengunjung'] = $this->m_kasir->detail($id);
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('kasir/layout/v_wrapper', $data, FALSE);
    }
}
