<?php

use LDAP\Result;

defined('BASEPATH') or exit('No direct script access allowed');

class Pasien extends CI_Controller
{
    public function index()
    {
        $data['pasien'] = $this->m_pasien->tampil_data()->result();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('pasien', $data);
        $this->load->view('template/footer');
    }

    public function tambah_aksi()
    {
        $pasien = $this->input->post('pasien');
        $alamat = $this->input->post('alamat');
        $no_telp = $this->input->post('no_telp');

        $data = array(
            'pasien'  => $pasien,
            'alamat'  => $alamat,
            'no_telp' => $no_telp,
        );



        $this->m_pasien->input_data($data, 'pasien');
        redirect('pasien');
    }

    public function edit_pasien($id)
    {
        $where = ['id' => $id];
        $data['pasien'] = $this->m_pasien->edit_data($where, 'pasien')->result();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('edit_pasien');
        $this->load->view('template/footer');
    }

    public function update($id)
    {
        $where = array('id' => $id);
        $pasien = $this->input->post('pasien');
        $alamat = $this->input->post('alamat');
        $no_telp = $this->input->post('no_telp');

        $data = array(
            'pasien' => $pasien,
            'alamat' => $alamat,
            'no_telp' => $no_telp,
        );

        $where = array(
            'id' => $id
        );

        $this->m_pasien->update_data($where, $data, 'pasien');
        redirect('pasien');
    }

    public function hapus($id)
    {
        $where = ['id' => $id];
        $this->m_pasien->hapus_data($where, 'pasien');
        redirect('pasien');
    }
}
