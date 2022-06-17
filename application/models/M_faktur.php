<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_faktur extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('faktur');
    }

    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function detail_data($id = NULL)
    {
        $query = $this->db->get_where('faktur', array('id' => $id))->row();
        return $query;
    }
}
