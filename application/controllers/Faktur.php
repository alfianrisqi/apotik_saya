<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Faktur extends CI_Controller
{
    public function index()
    {
        $data['faktur'] = $this->m_faktur->tampil_data()->result();


        $data['title'] = 'Faktur';
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('faktur', $data);
        $this->load->view('template/footer');
    }

    public function tambah_data_faktur()
    {
        $data['gudang'] = $this->db->get('gudang')->result_array();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('tambah_data_faktur', $data);
        $this->load->view('template/footer');
    }

    public function tambah_faktur()
    {

        $this->form_validation->set_rules('no_struk', 'No_struk', 'required');

        $data['gudang'] = $this->db->get('gudang')->result_array();

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('tambah_faktur');
            $this->load->view('template/footer');
        } else {
            $data = [
                'no_struk'          => $this->input->post('no_struk'),
                'supplier'          => $this->input->post('supplier'),
                'tanggal_pembelian' => $this->input->post('tanggal_pembelian'),
            ];

            $this->db->insert('faktur', $data);
            $id_faktur = $this->db->insert_id();

            $obat   = $this->input->post('obat');
            $harga  = $this->input->post('harga');
            $jumlah = $this->input->post('jumlah');

            $data_faktur_detail = array();
            /**
             * 1
             * 2
             * 3
             * [2000,5000,6000]
             * [miksagrip, bodrek, ultraflu]
             */

            foreach ($obat as $key => $obt) {
                $jml_beli = $jumlah[$key];

                $data_faktur_detail =  [
                    'id_obat'     => $obt,
                    'harga'       => $harga[$key],
                    'jumlah'      => $jumlah[$key],
                    'total_harga' => $harga[$key] * $jumlah[$key],
                    'id_faktur'   => $id_faktur
                ];

                $this->db->insert('faktur_detail', $data_faktur_detail);

                // tambah stok
                $this->db->query("
                UPDATE gudang
                SET stok = stok + $jml_beli
                WHERE id_obat = $obt
                ");
            }

            redirect('faktur');
        }
    }

    public function hapus($id)
    {
        $where = ['id' => $id];
        $this->m_faktur->hapus_data($where, 'faktur');
        redirect('faktur');
    }

    public function detail_faktur($id)
    {
        $this->load->model('M_gudang', 'model');
        $detail = $this->model->detail_data($id);
        $data['detail'] = $detail;

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('detail_faktur');
        $this->load->view('template/footer');
    }
}
