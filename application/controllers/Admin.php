<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  public function __CONSTRUCT() {
    parent::__CONSTRUCT();
    $this->load->model('Pasien_model', 'pasien');
  }

	public function index()
	{
    $data['konten'] = 'admin/home';
		$this->load->view('admin/template',$data);
	}

  public function getLastIdPasien(){
    $this->pasien->getLastIdPasien();
  }

  public function postRegister(){
    $this->pasien->postRegister();
    $this->session->set_flashdata('success', 'Data pasien berhasil ditambahkan!');
    redirect('home');
  }

  public function editPasien(){
    $this->pasien->editPasien();
    $this->session->set_flashdata('success_edit', 'Data pasien berhasil diubah!');
    redirect('home');    
  }
  
  public function hapusPasien(){
    $this->pasien->hapusPasien();
    $this->session->set_flashdata('success_hapus', 'Data pasien berhasil dihapus!');
    redirect('home');    
  }

  public function postPemeriksaanKesehatan(){
    $this->pasien->postPemeriksaanKesehatan();
    $this->session->set_flashdata('success_pemeriksaan_kesehatan', 'Data pemeriksaan kesehatan berhasil ditambahkan!');
    redirect('home');
  }

  public function postPerkembanganKondisiKesehatan(){
    $this->pasien->postPerkembanganKondisiKesehatan();
    $this->session->set_flashdata('success_perkembangan_kondisi', 'Data perkembangan kondisi kesehatan berhasil ditambahkan!');
    redirect('home');
  }

  public function postPenggunaanObat(){
    $this->pasien->postPenggunaanObat();
    $this->session->set_flashdata('success_penggunaan_obat', 'Data penggunaan obat berhasil ditambahkan!');
    redirect('home');
  }

  public function postEvaluasiObat(){
    $id_pasien = $this->input->post('id_pasien');
    $this->pasien->postEvaluasiObat();
    $this->session->set_flashdata('success_evaluasi', 'Data evaluasi penggunaan obat berhasil ditambahkan!');
    redirect('home/tambahObat/'.$id_pasien);
  }

  public function updateStatusObatApoteker(){
    $this->pasien->updateStatusObatApoteker();
    $this->session->set_flashdata('success_update', 'Status obat berhasil diubah!');
    redirect('home/tampilanApoteker');
  }
  
  public function deleteEvaluasiObat($id){
    $data = $this->db->query("SELECT * FROM evaluasi_penggunaan_obat e JOIN penggunaan_obat p ON p.id_penggunaan_obat = e.id_penggunaan_obat WHERE e.id_evaluasi = '$id'")->result();
    $id_pasien = $data[0]->id_pasien;
    $this->pasien->deleteEvaluasiObat($id);
    $this->session->set_flashdata('delete_evaluasi', 'Data evaluasi penggunaan obat berhasil dihapus!');
    redirect('home/tambahObat/'.$id_pasien);
  }

}
