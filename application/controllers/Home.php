<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    //Sidebar
    public function index()
    {
        $data['konten'] = 'sideBar/dashboard';
        $this->load->view('template', $data);
    }

    public function registerPasien()
    {
        $data['konten'] = 'sideBar/inputDataPasien';
        $this->load->view('template', $data);
    }

    public function inputPemeriksaanKesehatan()
    {
        $data['konten'] = 'sideBar/inputPemeriksaanKesehatan';
        $this->load->view('template', $data);
    }
    public function inputPerkembanganKondisi()
    {
        $data['konten'] = 'sideBar/inputPerkembanganKondisi';
        $this->load->view('template', $data);
    }
    public function inputTambahObat()
    {
        $data['konten'] = 'sideBar/inputTambahObat';
        $this->load->view('template', $data);
    }

    //Dropdown
    public function dataPasien()
    {
        $data['konten'] = 'dropDown/viewDataPasien';
        $this->load->view('template', $data);
    }

    public function pemeriksaanKesehatan()
    {
        $data['konten'] = 'dropDown/viewPemeriksaanKesehatan';
        $this->load->view('template', $data);
    }
    public function perkembanganKondisi()
    {
        $data['konten'] = 'dropDown/viewPerkembanganKondisi';
        $this->load->view('template', $data);
    }
    public function tambahObat()
    {
        $data['konten'] = 'dropDown/viewTambahObat';
        $this->load->view('template', $data);
    }
    //Apoteker
    public function tampilanApoteker()
    {
        $this->load->view('tampilanApoteker');
    }
}
