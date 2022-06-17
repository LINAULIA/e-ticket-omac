<?php
class M_pengunjung extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    public function tampil_pengunjung()
    {

        return $this->db->get('mahasiswa');
    }
    public function cekkodepengunjung()
    {
        $this->db->select('RIGHT(mahasiswa.kd_pengunjung,2) as kd_pengunjung', FALSE);
        $this->db->order_by('kd_pengunjung', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('mahasiswa');  //cek dulu apakah ada sudah ada kode di tabel.    
        if ($query->num_rows() <> 0) {
            //cek kode jika telah tersedia    
            $data = $query->row();
            $kode = intval($data->kd_pengunjung) + 1;
        } else {
            $kode = 1;  //cek jika kode belum terdapat pada table
        }
        $batas = str_pad($kode, 7, "0", STR_PAD_LEFT);
        $kodetampil = "OMC" . $batas;  //format kode
        return $kodetampil;
    }
    // $query = $this->db->query("SELECT MAX(kode_pengunjung) as kodepengunjung from pengunjung");
    // $hasil = $query->row();
    // return $hasil->kodepengunjung;

    public function simpan($kd_pengunjung, $tanggal, $harga, $image_name)
    {
        $data = array(
            'kd_pengunjung'         => $kd_pengunjung,
            'tanggal'         => $tanggal,
            'harga'     => $harga,
            'qr_code'     => $image_name,
        );
        $this->db->insert('mahasiswa', $data);
    }
}
