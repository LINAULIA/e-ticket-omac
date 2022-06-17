<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Tiket extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('text');
    }
    public function index()
    {
        $data = array(
            'title' => 'Halaman Pemesanan Tiket',
            'isi'   => 'v_pemesanan'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }
}
