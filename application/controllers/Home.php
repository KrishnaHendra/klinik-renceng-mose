<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pasien_model', 'pasien');
        if($this->session->userdata('logged_in') != true){ 
            redirect('auth');
        }
    }

    //Sidebar
    public function index()
    {       
        $role = $this->session->userdata('role');
        if($role == 1 || $role == 2){         
            $data['konten'] = 'sideBar/dashboard';
            $data['pasien'] = $this->pasien->getAllPasien();
            $this->load->view('template', $data);
        }else{
            redirect('home/not_found');
        }
    }

    public function registerPasien()
    {
        $role = $this->session->userdata('role');
        if($role == 1 || $role == 2){
            $data['konten'] = 'sideBar/inputDataPasien';
            $this->load->view('template', $data);
        }else{
            redirect('home/not_found');
        }
    }

    public function inputPemeriksaanKesehatan()
    {
        $role = $this->session->userdata('role');
        if($role == 1 || $role == 2){
            $data['konten'] = 'sideBar/inputPemeriksaanKesehatan';
            $data['pasien'] = $this->pasien->getAllPasien();
            $this->load->view('template', $data);
        }else{
            redirect('home/not_found');
        }        
    }
    public function inputPerkembanganKondisi()
    {
        $role = $this->session->userdata('role');
        if($role == 1 || $role == 2){
            $data['konten'] = 'sideBar/inputPerkembanganKondisi';
            $data['pasien'] = $this->pasien->getAllPasien();
            $this->load->view('template', $data);
        }else{
            redirect('home/not_found');
        } 
    }
    public function inputTambahObat()
    {
        $role = $this->session->userdata('role');
        if($role == 1 || $role == 2){
            $data['konten'] = 'sideBar/inputTambahObat';
            $data['pasien'] = $this->pasien->getAllPasien();
            $this->load->view('template', $data);
        }else{
            redirect('home/not_found');
        } 
    }
    public function tambahEvaluasiPenggunaanObat($id)
    {
        $role = $this->session->userdata('role');
        if($role == 1 || $role == 2){
            $data['konten'] = 'sideBar/tambahEvaluasiPenggunaanObat';
            $data['obat'] = $this->pasien->getObatById($id);
            $this->load->view('template', $data);
        }else{
            redirect('home/not_found');
        }         
    }

    //Dropdown
    public function dataPasien($id)
    {
        $role = $this->session->userdata('role');
        if($role == 1 || $role == 2){
            $data['konten'] = 'dropDown/viewDataPasien';
            $data['data'] = $this->pasien->getAllDataPasien($id);
            $this->load->view('template', $data);
        }else{
            redirect('home/not_found');
        } 
    }

    public function pemeriksaanKesehatan($id)
    {
        $role = $this->session->userdata('role');
        if($role == 1 || $role == 2){
            $data['konten'] = 'dropDown/viewPemeriksaanKesehatan';
            $data['data'] = $this->pasien->getPemeriksaanKesehatanPasien($id);
            $data['pasien'] = $this->pasien->getPasienById($id);
            $this->load->view('template', $data);
        }else{
            redirect('home/not_found');
        } 
    }
    public function perkembanganKondisi($id)
    {
        $role = $this->session->userdata('role');
        if($role == 1 || $role == 2){
            $data['konten'] = 'dropDown/viewPerkembanganKondisi';
            $data['data'] = $this->pasien->getPerkembanganKondisi($id);
            $data['pasien'] = $this->pasien->getPasienById($id); 
            $this->load->view('template', $data);
        }else{
            redirect('home/not_found');
        } 
    }
    public function tambahObat($id)
    {
        $role = $this->session->userdata('role');
        if($role == 1 || $role == 2){
            $data['konten'] = 'dropDown/viewTambahObat';
            $data['data'] = $this->pasien->getObatPasien($id);
            $data['pasien'] = $this->pasien->getPasienById($id);  
            $data['evaluasiObat'] = $this->pasien->getEvaluasiPenggunaanObat($id);
            $this->load->view('template', $data);
        }else{
            redirect('home/not_found');
        } 
    }
    //Apoteker
    public function tampilanApoteker()
    {
        $role = $this->session->userdata('role');
        if($role == 3){
            $data['penggunaanObat'] = $this->pasien->getPenggunaanObatAll();
            $this->load->view('tampilanApoteker', $data);
        }else{
            redirect('home/not_found');
        }
    }

    public function not_found(){
        $this->load->view('not_found');
    }

    public function laporan_pdf_data_pasien($id){
        $this->load->library('Pdf');
        $this->data['title_pdf'] = 'Laporan PDF Data Pasien';
        $this->data['data'] = $this->pasien->getAllDataPasien($id);
        $file_pdf = 'laporan_data_pasien';
        $paper = 'A4';
        $orientation = "portrait";
        $html = $this->load->view('laporan_pdf',$this->data, true);	  
        $this->pdf->generate($html,$file_pdf,$paper,$orientation);            
    } 

    public function laporan_pdf_pemeriksaan_kesehatan($id){
        $this->load->library('Pdf');
        $this->data['title_pdf'] = 'Laporan PDF Pemeriksaan Kesehatan Pasien';
        $this->data['pasien'] = $this->pasien->getPasienById($id);
        $this->data['dataPemeriksaan'] = $this->pasien->getPemeriksaanKesehatanPasien($id);
        $file_pdf = 'laporan_pemeriksaan_kesehatan_pasien';
        $paper = 'A4';
        $orientation = "portrait";
        $html = $this->load->view('laporan_pdf_pemeriksaan_kesehatan',$this->data, true);	  
        $this->pdf->generate($html,$file_pdf,$paper,$orientation);            
    } 

    public function laporan_pdf_perkembangan_kesehatan($id){
        $this->load->library('Pdf');
        $this->data['title_pdf'] = 'Laporan PDF Perkembangan Kesehatan Pasien';
        $this->data['pasien'] = $this->pasien->getPasienById($id);
        $this->data['perkembanganKondisi'] = $this->pasien->getPerkembanganKondisi($id);
        $file_pdf = 'laporan_perkembangan_kesehatan_pasien';
        $paper = 'A4';
        $orientation = "portrait";
        $html = $this->load->view('laporan_pdf_perkembangan_kesehatan',$this->data, true);	  
        $this->pdf->generate($html,$file_pdf,$paper,$orientation);         
        echo "<pre>";
        print_r($this->data);die;   
    } 

    public function cetak_label_obat($id){
        $this->load->library('Pdf');
        $this->data['title_pdf'] = 'Label Obat';
        $this->data['obat'] = $this->pasien->getObatById($id);
        $file_pdf = 'label_obat';
        $paper = 'A8';
        $orientation = "landscape";
        $html = $this->load->view('label_obat',$this->data, true);	  
        $this->pdf->generate($html,$file_pdf,$paper,$orientation);            
    } 

    public function dev(){
        $this->load->view('dev');
    }
}
