<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_gudang extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('gudang');
    }

    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function detail_data($id = NULL)
    {
        $queryGudang = "SELECT faktur_detail.*, obat
                          FROM faktur_detail JOIN gudang 
                            ON faktur_detail.id_obat = gudang.id_obat
                         WHERE faktur_detail.id_faktur = $id";
        $detail = $this->db->query($queryGudang)->result_array();
        return $detail;
    }
}
