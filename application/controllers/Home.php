<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Home extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->helper(array('form', 'url', 'text'));
    $this->load->model('m_pemesanan');
  }
  public function index()
  {
    $data = array(
      'title' => 'Halaman Biodata'
    );

    $this->load->view('v_biodata', $data);
  }
  public function home()
  {
    $data = array(
      'title' => 'Halaman Home'
    );
    $data['wahana'] = $this->db->get('wahana')->result();
    $data['kuliner'] = $this->db->get('kuliner')->result();
    $data['berita'] = $this->db->get('berita')->result();
    // $this->load->view('layout/v_wrapper', $data, FALSE);
    $this->load->view('v_homebaru', $data);
  }

  public function kuliner()
  {
    $data = array(
      'title' => 'Halaman Kuliner',
      'isi'   => 'v_kuliner'
    );
    $this->load->view('layout/v_wrapper', $data, FALSE);
  }

  public function tiket()
  {
    $data = array(
      'title' => 'Halaman Tiket',
      'isi'   => 'v_tiket'
    );
    $this->load->view('layout/v_wrapper', $data, FALSE);
  }

  public function pemesanan()
  {
    $data = array(
      'title' => 'Halaman Pemesanan Tiket',
      'isi'   => 'v_pemesanan'
    );
    $data['pemesan'] = $this->m_pemesanan->tampil_pemesanan()->result();
    $data['tiket_pemesan'] = $this->input->post('jumlah');
    // $data['kode'] = $this->m_pemesanan->cekkodepemesanan();
    // $data['kodebyr'] = $this->m_pemesanan->cekkodepembayaran();

    $this->load->view('layout/v_wrapper', $data, FALSE);
  }

  public function simpanpemesanan()
  {
    $tiket_pemesan = $this->input->post('tiket_pemesan');

    // baca current date
    $today = date("Ymd");

    //Generate No Pembayaran
    $cek = $this->m_pemesanan->getPembayaran()->num_rows() + 1;

    $no_pembayaran = 'ET' . $cek . $today;

    $no_tiket = 'OMC00' . $cek;

    $jumlah = $this->input->post('jumlah');

    $total_pembayaran = $this->input->post('total_pembayaran');

    // load qr pemesan
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

    $data = array(
      'no_pembayaran' => $no_pembayaran,
      'nomor_tiket' => $no_tiket,
      'jumlah' => $jumlah,
      'total_pembayaran' => $total_pembayaran,
      'status' => 0,
      'qr_code' => $image_name
    );

    $this->m_pemesanan->insertPembayaran($data);

    //Generate No Tiket
    $cek = $this->m_pemesanan->getTiket()->num_rows() + 1;


    //input data tiket pemesan
    for ($i = 1; $i <= $tiket_pemesan; $i++) {
      $data = array(
        'nomor_tiket' => $no_tiket,
      );

      $this->m_pemesanan->insertTiketPemesan($data);
    };



    // input data pengunjung

    $data = array(
      'nomor_tiket' => $no_tiket,
      'status_qr' => 0,
      'tanggal' => $this->input->post('tanggal'),
      'jumlah' => $jumlah,
      'total_pembayaran' => $total_pembayaran
    );

    $this->m_pemesanan->insertpengunjung($data);
    // input data pemesan

    $data = array(
      'nomor_tiket' => $no_tiket,
      'tanggal' => $this->input->post('tanggal'),
      'nama_pemesan' => $this->input->post('nama_pemesan'),
      'email' => $this->input->post('email'),
      'no_telepon' => $this->input->post('no_telepon'),
      'alamat' => $this->input->post('alamat'),
      'qr_code' => $image_name
    );

    $this->m_pemesanan->insertPemesan($data);

    $this->session->set_flashdata('no_pembayaran', $no_pembayaran);
    $this->session->set_flashdata('total_pembayaran', $total_pembayaran);
    redirect('home/pembayaran', $total_pembayaran);
    // $data['data_pemesan'] = $this->m_pemesanan->tampil_pemesanan()->result();

    // $kode_pemesan = $this->input->post('kode_pemesan');
    // $nama = $this->input->post('nama');
    // $email = $this->input->post('email');
    // $no_hp = $this->input->post('no_hp');
    // $alamat = $this->input->post('alamat');
    // $tanggal = $this->input->post('tanggal');
    // $jumlah = $this->input->post('jumlah');
    // $harga = $this->input->post('harga');
    // // $totalbyr = $jumlah * $harga;
    // $totalbyr = $this->input->post('total');

    // $this->m_pemesanan->simpan($kode_pemesan, $nama, $email, $no_hp, $alamat, $tanggal, $jumlah, $harga, $totalbyr);


    // redirect("home/pembayaran", $data);
  }

  public function pembayaran()
  {
    $data = array(
      'title' => 'Halaman Pembayaran',
      'isi'   => 'v_pembayaran'
    );
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><h3>Selamat!</h3> Anda berhasil melakukan pemesanan tiket. Silahkan lakukan pembayaran ke salah satu rekening berikut.</div>');
    $this->load->view('layout/v_wrapper', $data, FALSE);
  }

  public function keHalamanKonfirmasi()
  {
    $data = array(
      'title' => 'Halaman Tiket',
      'isi'   => 'v_cekpembayaran'
    );

    if (isset($_GET['kode'])) :
      $kode = $_GET['kode'];
      $data['no_tiket'] = $this->m_pemesanan->getPembayaranWhere($kode)->row();
      $data['detail'] = $this->m_pemesanan->cekkonfirmasi($data['no_tiket']->nomor_tiket)->result();

    endif;

    $this->load->view('layout/v_wrapper', $data, FALSE);
  }

  public function cekkonfirmasi()
  {
    $kode = $this->input->post('kode');

    redirect('home/keHalamanKonfirmasi?kode=' . $kode);
  }

  public function kirimKonfirmasi()
  {
    // Uploading Gambar
    $config['upload_path']          = './assets/bukti/';
    $config['allowed_types']        = 'jpg|png';
    $config['max_size']             = 2048; // 2MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('userfile')) {
      $error = array('error' => $this->upload->display_errors());
      print_r($error);
    } else {
      $data = $this->upload->data();
      $fileName = $data['file_name'];

      $no = $this->input->post('no_pembayaran');
      $this->m_pemesanan->insertBukti($fileName, $no);

      $this->session->set_flashdata("pesan", "Berhasil Mengirim Bukti! Silahkan Cek Kembali 12 Jam Kemudian Melihat Status Pembayaran Anda");
      redirect("home/keHalamanKonfirmasi");
    }
  }
  public function cetaktiket($id)
  {

    $data = array(
      'title' => 'Halaman Cetak Tiket',
      'isi'   => 'v_cetaktiket'
    );
    $data['pemesan'] = $this->m_pemesanan->mcetaktiket($id);
    // $cetaktiket = $this->db->get_where('pembayaran', array('id' => $id))->row_array();
    // $data['detail'] = $cetaktiket;

    $this->session->set_flashdata('message', '<div class="alert alert-primary" role="alert"><h3>Selamat!</h3> Anda berhasil menyelesaikan tahap pemesanan tiket. Silahkan Tunjukkan QR Code di bawah ini saat kunjungan!</div>');
    $this->load->view('layout/v_wrapper', $data, FALSE);
  }

  public function insertpengunjung()
  {
    $this->m_kasir->pengunjung();
  }
}
