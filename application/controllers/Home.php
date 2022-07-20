<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $data['konten'] = 'dashboard';
        $this->load->view('template', $data);
    }

    public function dataPasien()
    {
        $data['konten'] = 'data_pasien';
        $this->load->view('template', $data);
    }
}
