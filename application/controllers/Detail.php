<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Detail extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_gudang', 'model');
    }

    public function index($id)
    {
        $detail = $this->model->detail_data($id);
        $data['id'] = $id;

        $this->load->view('template/header');
        $this->load->view('template/sidebar', $data);
        $this->load->view('detail_faktur', $data);
        $this->load->view('template/footer');
    }
}
