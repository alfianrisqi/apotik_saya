<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_riwayat extends CI_Model
{
    public function index($id = NULL)
    {
        $queryPemesanan = "SELECT riwayat_pemesanan.*, obat
                             FROM riwayat_pemesanan JOIN gudang 
                               ON riwayat_pemesanan.id_obat = gudang.id_obat
                            WHERE riwayat_pemesanan.id_pemesanan = $id";
        $detail = $this->db->query($queryPemesanan)->result_array();
        return $detail;
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
