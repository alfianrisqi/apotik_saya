<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Riwayat extends CI_Controller
{
    public function index()
    {
        $data['riwayat'] = $this->db->get('pemesanan')->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('riwayat', $data);
        $this->load->view('template/footer');
    }

    public function detail_riwayat($id)
    {
        $data['samlong'] = $this->db->get_where('pemesanan', ['id' => $id])->row_array();

        $this->load->model('M_riwayat', 'model');
        $detail = $this->model->index($id);
        $data['detail'] = $detail;

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('detail_riwayat');
        $this->load->view('template/footer');
    }

    public function print($id)
    {
        $data['samlong'] = $this->db->get_where('pemesanan', ['id' => $id])->row_array();

        $this->load->model('M_riwayat', 'model');
        $detail = $this->model->index($id);
        $data['detail'] = $detail;

        $this->load->view('print', $data);
    }

    public function hapus($id)
    {
        $where = ['id' => $id];
        $this->m_riwayat->hapus_data($where, 'pemesanan');
        redirect('riwayat');
    }
}
