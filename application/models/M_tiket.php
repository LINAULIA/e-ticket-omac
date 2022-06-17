<?php
class M_tiket extends CI_Model
{

    function get_all_tiket()
    {
        $hasil = $this->db->get('tiket');
        return $hasil;
    }

    function simpan_tiket($tanggal, $harga, $gambar)
    {
        $data = array(
            'tanggal'       => $tanggal,
            'harga'      => $harga,
            'gambar'     => $gambar
        );
        $this->db->insert('tiket', $data);
    }
}
