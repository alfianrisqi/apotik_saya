<?php

use LDAP\Result;

defined('BASEPATH') or exit('No direct script access allowed');

class Gudang extends CI_Controller
{
    public function index()
    {
        $data['gudang'] = $this->m_gudang->tampil_data()->result();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('gudang', $data);
        $this->load->view('template/footer');
    }

    public function tambah_aksi()
    {
        $obat = $this->input->post('obat');
        $stok = $this->input->post('stok');
        $harga = $this->input->post('harga');

        $data = array(
            'obat'  => $obat,
            'stok'  => 0,
            'harga' => $harga,
        );



        $this->m_gudang->input_data($data, 'gudang');
        redirect('gudang');
    }

    public function edit_obat($id)
    {
        $where = array('id_obat' => $id);
        $data['gudang'] = $this->m_gudang->edit_data($where, 'gudang')->result();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('edit_obat');
        $this->load->view('template/footer');
    }

    public function update($id)
    {
        $where = array('id_obat' => $id);
        $obat = $this->input->post('obat');
        $harga = $this->input->post('harga');

        $data = array(
            'obat' => $obat,
            'harga' => $harga,
        );

        $where = array(
            'id_obat' => $id
        );

        $this->m_gudang->update_data($where, $data, 'gudang');
        redirect('gudang');
    }

    public function hapus($id)
    {
        $where = ['id_obat' => $id];
        $this->m_gudang->hapus_data($where, 'gudang');
        redirect('gudang');
    }
}
