<?php

defined('BASEPATH') or exit('No direct script access allowed');

require FCPATH . '/vendor/autoload.php';

use Dompdf\Dompdf;

class Cetakpdf extends CI_Controller
{


    public function index()
    {
        $this->load->model('m_laporanpengunjung');
        $data['pengunjung'] = $this->m_laporanpengunjung->getData();

        $pdf = $this->load->view("laporanpengunjung", $data, true);

        $dompdf = new Dompdf();

        $dompdf->set_option('isRemoteEnabled', TRUE);

        $dompdf->loadHtml($pdf);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        //$dompdf->stream();
        $dompdf->stream('Laporan Pengunjung.pdf', array('Attachment' => 0));
    }
}
