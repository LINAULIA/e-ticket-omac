<?php
class M_pemesanan extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    public function tampil_pemesanan()
    {

        return $this->db->get('pemesan');
    }

    public function getTiket()
    {
        return $this->db->get('pemesan');
    }

    public function insertPemesan($data)
    {
        return $this->db->insert('pemesan', $data);
    }
    public function insertPengunjung($data)
    {
        return $this->db->insert('pengunjung', $data);
    }

    public function insertTiketPemesan($data)
    {
        return $this->db->insert('tiket_pemesan', $data);
    }

    public function getPembayaran()
    {
        return $this->db->get('pembayaran');
    }

    public function insertPembayaran($data)
    {
        return $this->db->insert('pembayaran', $data);
    }

    public function getPembayaranWhere($kode)
    {
        $this->db->where('no_pembayaran', $kode);
        return $this->db->get('pembayaran');
    }

    public function cekkonfirmasi($nomor)
    {
        $this->db->where('nomor_tiket', $nomor);
        return $this->db->get('pemesan');
    }

    public function insertBukti($nama, $no)
    {
        $data = array(
            'bukti'        => $nama,
            'status'    => 1
        );
        $this->db->where('no_pembayaran', $no);
        return $this->db->update("pembayaran", $data);

        // $this->db->insert('pembayaran', $data);

        // return ($this->db->affected_rows() > 0) ? true : false;
        // $data = array(
        //     'bukti' => $nama,
        // );
        // return $this->db->insert('pembayaran', $data);
    }

    public function mcetaktiket($id)
    {
        $this->db->select('*');
        $this->db->from('pemesan');
        $this->db->join('pembayaran', 'pembayaran.id = pemesan.id');
        $this->db->where('pemesan.id', $id);

        $query = $this->db->get();
        return $query->row();
        // $param = array('id' => $id);
        // return $this->db->get_where('pembayaran', $param);
    }

    public function pengunjung()
    {
        $sql = " INSERT pengunjung (no_tiket, status)
        SELECT no_tiket, status
        FROM pembayaran
        WHERE status = 2 ";

        $this->db->query($sql);
    }
    // public function cekkodepemesanan()
    // {
    //     $this->db->select('RIGHT(data_pemesan.kode_pemesan,2) as kode_pemesan', FALSE);
    //     $this->db->order_by('kode_pemesan', 'DESC');
    //     $this->db->limit(1);S
    //     $query = $this->db->get('data_pemesan');  //cek dulu apakah ada sudah ada kode di tabel.    
    //     if ($query->num_rows() <> 0) {
    //         //cek kode jika telah tersedia    
    //         $data = $query->row();
    //         $kode = intval($data->kode_pemesan) + 1;
    //     } else {
    //         $kode = 1;  //cek jika kode belum terdapat pada table
    //     }
    //     $batas = str_pad($kode, 7, "0", STR_PAD_LEFT);
    //     $kodetampil = "PMS" . $batas;  //format kode
    //     return $kodetampil;
    // }
    // public function cekkodepembayaran()
    // {
    //     $this->db->select('RIGHT(pembayaran.no_pembayaran,2) as no_pembayaran', FALSE);
    //     $this->db->order_by('no_pembayaran', 'DESC');
    //     $this->db->limit(1);
    //     $query = $this->db->get('pembayaran');  //cek dulu apakah ada sudah ada kode di tabel.    
    //     if ($query->num_rows() <> 0) {
    //         //cek kode jika telah tersedia    
    //         $data = $query->row();
    //         $kodebyr = intval($data->no_pembayaran) + 1;
    //     } else {
    //         $kodebyr = 1;  //cek jika kode belum terdapat pada table
    //     }
    //     $batas = str_pad($kodebyr, 7, "0", STR_PAD_LEFT);
    //     $kodebyrtampil = "ABC" . $batas;  //format kode
    //     return $kodebyrtampil;
    // }

    // public function simpan($kode_pemesan, $nama, $email, $no_hp, $alamat, $tanggal, $jumlah, $harga, $totalbyr)
    // {
    //     $data = array(
    //         'kode_pemesan'         => $kode_pemesan,
    //         'nama'         => $nama,
    //         'email'         => $email,
    //         'no_hp'         => $no_hp,
    //         'alamat'         => $alamat,
    //         'tanggal'         => $tanggal,
    //         'jumlah'         => $jumlah,
    //         'harga'     => $harga,
    //         'totalbyr'     => $totalbyr,
    //         'status' => 0,
    //     );
    //     $this->db->insert('data_pemesan', $data);
    // }

    // public function getPembayaran()
    // {
    //     $this->db->select('*');
    //     $this->db->from('pembayaran');
    //     $this->db->join('data_pemesan', 'data_pemesan.kode_pemesan = pembayaran.kode_pemesan');
    //     $query = $this->db->get();
    //     return $query->result();
    // }
    // public function insertPembayaran($data)
    // {
    //     return $this->db->insert('pembayaran', $data);
    // }
}
