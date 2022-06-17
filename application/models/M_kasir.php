<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_kasir extends CI_Model
{
    public function tampilhtm()
    {
        return $this->db->get('pembayaran_tunai');
    }

    public function ceknotiket()
    {
        $this->db->select('RIGHT(pembayaran_tunai.nomor_tiket,2) as nomor_tiket', FALSE);
        $this->db->order_by('nomor_tiket', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('pembayaran_tunai');  //cek dulu apakah ada sudah ada kode di tabel.    
        if ($query->num_rows() <> 0) {
            //cek kode jika telah tersedia    
            $data = $query->row();
            $no_tiket = intval($data->nomor_tiket) + 1;
        } else {
            $no_tiket = 1;  //cek jika kode belum terdapat pada table
        }
        $batas = str_pad($no_tiket, 4, "0", STR_PAD_LEFT);
        $kodetampil = "HTM" . $batas;  //format kode
        return $kodetampil;
    }

    // public function getPembayaran()
    // {
    //     return $this->db->get('pembayaran');
    // }

    // public function insertPembayaran($data)
    // {
    //     return $this->db->insert('pembayaran', $data);
    // }

    public function insertPembayaranTunai($data)
    {
        return $this->db->insert('pembayaran_tunai', $data);
    }
    public function insertPengunjung($data)
    {
        return $this->db->insert('pengunjung', $data);
    }



    public function getKonfirmasiPembayaran()
    {
        $where = array(
            'status' => 1
        );
        return $this->db->get_where('pembayaran', $where);
    }

    public function updatePembayaran($id)
    {
        $data = array(
            'status' => 2
        );
        $this->db->where('id', $id);
        return $this->db->update('pembayaran', $data);
    }

    public function tolakPembayaran($id, $ket_tolak)
    {
        $data = array(
            'ket_tolak' => $ket_tolak,
            'status' => 3
        );
        $this->db->where('id', $id);
        return $this->db->update('pembayaran', $data);
    }

    public function detail_eticketing($id)
    {
        $this->db->select('*');
        $this->db->from('pemesan');
        $this->db->join('pembayaran', 'pembayaran.id = pemesan.id');
        $this->db->where('pemesan.id', $id);

        $query = $this->db->get();
        return $query->row();
    }
    public function detail($id)
    {
        $this->db->select('*');
        $this->db->from('pemesan');
        $this->db->join('pembayaran', 'pembayaran.id = pemesan.id');
        $this->db->where('pemesan.id', $id);

        $query = $this->db->get();
        return $query->row();
    }

    public function mstatus()
    {

        $this->db->select('*');
        $this->db->from('pembayaran');
        $this->db->join('pemesan', 'pemesan.id = pembayaran.id');

        $query = $this->db->get();
        return $query->result();
    }

    public function insertKettolak($tolak, $id)
    {
        $data = array(
            'ket_tolak'        => $tolak

        );

        $this->db->where('id', $id);
        return $this->db->update("pembayaran", $data);
    }
    public function hasilpengunjung()
    {
        $this->db->select('*');
        $this->db->from('pengunjung');
        $this->db->where('status_qr', '1');
        $query = $this->db->get();
        return $query->result();
    }

    public function detailscan($id = NULL)
    {
        $this->db->select('*');
        $this->db->from('pengunjung');
        $query = $this->db->get();
        return $query->row();
    }
}
