<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pemesanan extends CI_Controller
{
    public function index()
    {
        $data['pasien'] = $this->db->get('pasien')->result_array();

        $data['gudang'] = $this->db->get('gudang')->result_array();

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('pemesanan');
            $this->load->view('template/footer');
        } else {
            // $data = [
            //     'pasien'             => $this->input->post('pasien'),
            //     'alamat'             => $this->input->post('alamat'),
            //     'no_telp'            => $this->input->post('no_telp'),
            //     'tanggal_pembelian'  => $this->input->post('tanggal_pembelian'),
            // ];

            // $this->db->insert('pemesanan', $data);
            // $id_pemesanan = $this->db->insert_id();

            // $obat   = $this->input->post('obat');
            // $harga  = $this->input->post('harga');
            // $jumlah = $this->input->post('jumlah');

            // $pasien = array();
            // /**
            //  * 1
            //  * 2
            //  * 3
            //  * [2000,5000,6000]
            //  * [miksagrip, bodrek, ultraflu]
            //  */

            // foreach ($obat as $key => $obt) {
            //     $jml_beli = $jumlah[$key];

            //     $pasien =  [
            //         'id_obat'       => $obt,
            //         'harga'         => $harga[$key],
            //         'jumlah'        => $jumlah[$key],
            //         'total_harga'   => $harga[$key] * $jumlah[$key],
            //         'id_pemesanan'  => $id_pemesanan
            //     ];

            //     $this->db->insert('riwayat_pemesanan', $pasien);

            //     // tambah stok
            //     $this->db->query("
            //     UPDATE gudang
            //     SET stok = stok - $jml_beli
            //     WHERE id_obat = $obt
            //     ");
            // }

            // redirect('pemesanan');
        }
    }

    public function tambah()
    {
        $data['pasien'] = $this->db->get('pasien')->result_array();

        $data['gudang'] = $this->db->get('gudang')->result_array();

        $data = [
            'pasien'             => $this->input->post('pasien'),
            'alamat'             => $this->input->post('alamat'),
            'no_telp'            => $this->input->post('no_telp'),
            'tanggal_pembelian'  => $this->input->post('tanggal_pembelian'),
        ];

        $this->db->insert('pemesanan', $data);
        $id_pemesanan = $this->db->insert_id();

        $obat   = $this->input->post('obat');
        $harga  = $this->input->post('harga');
        $jumlah = $this->input->post('jumlah');

        $pasien = array();
        /**
         * 1
         * 2
         * 3
         * [2000,5000,6000]
         * [miksagrip, bodrek, ultraflu]
         */

        foreach ($obat as $key => $obt) {
            $jml_beli = $jumlah[$key];

            $pasien =  [
                'id_obat'       => $obt,
                'harga'         => $harga[$key],
                'jumlah'        => $jumlah[$key],
                'total_harga'   => $harga[$key] * $jumlah[$key],
                'id_pemesanan'  => $id_pemesanan
            ];

            $this->db->insert('riwayat_pemesanan', $pasien);

            // tambah stok
            $this->db->query("
                UPDATE gudang
                SET stok = stok - $jml_beli
                WHERE id_obat = $obt
                ");
        }

        redirect('riwayat');
    }
}
