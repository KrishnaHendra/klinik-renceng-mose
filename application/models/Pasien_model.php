<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien_model extends CI_Model {

	public function getAllPasien()
	{
        $this->db->select('*');
        $this->db->from('pasien');
        $this->db->join('penanggung_jawab', 'penanggung_jawab.id_pasien = pasien.id_pasien');
        $data = $this->db->get()->result();
        return $data;
	}

    public function getLastIdPasien(){
        $this->db->select('*');
        $this->db->from('pasien');
        $this->db->order_by('id_pasien', 'desc');
        $this->db->limit(1);
        $data = $this->db->get()->result();
        if(count($data) == 0){
            $lastId = 1;
        }else{
            $lastId = $data[0]->id_pasien;
        }
        return $lastId; 
    }

    public function getAllDataPasien($id){
        $this->db->select('*, riwayat_sakit.jenis_penanganan as jenis_penanganan_riwayat');
        $this->db->from('pasien');
        $this->db->join('penanggung_jawab', 'penanggung_jawab.id_pasien = pasien.id_pasien', 'left');
        $this->db->join('riwayat_sakit', 'riwayat_sakit.id_pasien = pasien.id_pasien', 'left');
        $this->db->join('tanda_awal_sakit', 'tanda_awal_sakit.id_pasien = pasien.id_pasien', 'left');
        $this->db->join('kondisi_terakhir', 'kondisi_terakhir.id_pasien = pasien.id_pasien', 'left');
        $this->db->join('data_tambahan', 'data_tambahan.id_pasien = pasien.id_pasien', 'left');
        $this->db->where('pasien.id_pasien', $id);
        $data = $this->db->get()->result();
        return $data;
    }
    
    public function postRegister(){
        date_default_timezone_set('Asia/Jakarta'); 

        // echo "<pre>";
        // print_r($this->input->post('alasan_penanganan'));die;
        // Pasien 
        $data = [
            'nik' => $this->input->post('nik_pasien'),
            'nama_pasien' => $this->input->post('nama_pasien'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'tgl_masuk' => $this->input->post('tgl_masuk_pasien'),
            'umur' => 0,
            'jenis_kelamin' => $this->input->post('jk_pasien'),
            'alamat_pasien' => $this->input->post('alamat_pasien'),
            'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir_pasien'),
            'pekerjaan_terakhir' => $this->input->post('pekerjaan_terakhir_pasien'),
            'status_perkawinan' => $this->input->post('status_perkawinan_pasien'),
            'agama' => $this->input->post('agama_pasien'),
            'alasan_kunjungan' => $this->input->post('alasan_kunjungan_pasien'),
            'created_at' => date('Y-m-d H:i:s'),
            'created_by' => $this->session->userdata('id'),
            'updated_at' => date('Y-m-d H:i:s'),
            'updated_by' => $this->session->userdata('id')
        ];
        $this->db->insert('pasien', $data);

        // Penanggung Jawab 
        $penanggungJawab = [
            'no_rekam' => $this->input->post('no_rekam'),
            'nama_penanggung_jawab' => $this->input->post('nama_penanggung_jawab'),  
            'hubungan_pasien' => $this->input->post('hubungan_pasien'), 
            'alamat' => $this->input->post('alamat_penanggung_jawab'), 
            'no_ktp' => $this->input->post('no_ktp'), 
            'id_pasien' => $this->getLastIdPasien(), 
            'created_at' => date('Y-m-d H:i:s'),   
            'updated_at' => date('Y-m-d H:i:s') 
        ];
        $this->db->insert('penanggung_jawab', $penanggungJawab);

        // Riwayat Sakit
        // -> Jenis Faktor
        $allJenisFaktor = ['faktor_genetik', 'faktor_fisik', 'faktor_sosial'];
        $listJenisFaktor = [];
        $jenis_faktor = $this->input->post('jenis_faktor');
        foreach($allJenisFaktor as $val){
            if(in_array($val, $jenis_faktor) == 1){
                $listJenisFaktor[$val] = 1;
            }else{
                $listJenisFaktor[$val] = 0;
            }
        }
        $dataJenisFaktor =  json_encode($listJenisFaktor); 
        // -> Jenis Penanganan
        $allJenisPenanganan = ['tangani_sendiri', 'ditangani_ahli', 'minum_obat'];
        $listJenisPenanganan = [];
        $jenis_penanganan = $this->input->post('jenis_penanganan');
        foreach($allJenisPenanganan as $val){
            if(in_array($val, $jenis_penanganan) == 1){
                $listJenisPenanganan[$val] = 1;
            }else{
                $listJenisPenanganan[$val] = 0;
            }
        }
        $dataJenisPenanganan =  json_encode($listJenisPenanganan); 
        
        $riwayatSakit = [
            'id_pasien' => $this->getLastIdPasien(),
            'usia_sakit' => $this->input->post('usia_sakit'),
            'jenis_faktor' => $dataJenisFaktor,
            'kondisi_umum' => $this->input->post('kondisi_umum'),
            'jenis_penanganan' => $dataJenisPenanganan,
            'created_at' => date('Y-m-d H:i:s'),   
            'updated_at' => date('Y-m-d H:i:s')
        ];
        $this->db->insert('riwayat_sakit', $riwayatSakit);

        // Tanda Awal Sakit
        // -> Jenis Tanda Sakit
        $allJenisTandaSakit = [
            'dengar_suara', 'sedih_murung', 'sulit_tidur', 'kelakuan_aneh', 'bicara_banyak',
            'lihat_sesuatu', 'bingung_gelisah', 'banyak_tidur', 'sulit_rawat_diri', 'bicara_unreality',
            'perasaan_aneh', 'cemas_khawatir', 'aktivitas_kurang', 'diam_isolasi_diri', 'teriak_teriak',
            'pikiran_unreality', 'curiga_takut', 'lelah_lemas', 'melarikan_diri', 'marah_merusak',
            'bicara_sendiri', 'sulit_konsentrasi', 'pegal_nyeri', 'coba_bunuh_diri', 'menyerang' 
        ];
        $listJenisTandaSakit = [];
        $tanda_sakit = $this->input->post('tanda_sakit');
        foreach($allJenisTandaSakit as $val){
            if(in_array($val, $tanda_sakit) == 1){
                $listJenisTandaSakit[$val] = 1;
            }else{
                $listJenisTandaSakit[$val] = 0;
            }
        }
        $dataJenisTandaSakit =  json_encode($listJenisTandaSakit);   
        $tandaAwalSakit = [
            'id_pasien' => $this->getLastIdPasien(),
            'jenis_tanda' => $dataJenisTandaSakit,
            'created_at' => date('Y-m-d H:i:s'),   
            'updated_at' => date('Y-m-d H:i:s') 
        ];
        $this->db->insert('tanda_awal_sakit', $tandaAwalSakit);

        // Kondisi Terakhir
        // -> Jenis Kondisi 
        $allKondisiTerakhir = [
            'dengar_suara', 'sedih_murung', 'sulit_tidur', 'kelakuan_aneh', 'bicara_banyak',
            'lihat_sesuatu', 'bingung_gelisah', 'banyak_tidur', 'sulit_rawat_diri', 'bicara_unreality',
            'perasaan_aneh', 'cemas_khawatir', 'aktivitas_kurang', 'diam_isolasi_diri', 'teriak_teriak',
            'pikiran_unreality', 'curiga_takut', 'lelah_lemas', 'melarikan_diri', 'marah_merusak',
            'bicara_sendiri', 'sulit_konsentrasi', 'pegal_nyeri', 'coba_bunuh_diri', 'menyerang' 
        ];
        $listKondisiTerakhir = [];
        $kondisi_terakhir = $this->input->post('kondisi_terakhir');
        foreach($allKondisiTerakhir as $val){
            if(in_array($val, $kondisi_terakhir) == 1){
                $listKondisiTerakhir[$val] = 1;
            }else{
                $listKondisiTerakhir[$val] = 0;
            }
        }
        $dataKondisiTerakhir =  json_encode($listKondisiTerakhir);   
        $kondisiTerakhir = [
            'id_pasien' => $this->getLastIdPasien(),
            'jenis_kondisi' => $dataKondisiTerakhir,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s') 
        ];
        $this->db->insert('kondisi_terakhir', $kondisiTerakhir);

        // Data Tambahan
        // -> Saran Panti untuk penanganan
        $allSaranPantiPenanganan = ['tangani_sendiri', 'obat_rutin', 'konsultasi_spkj', 'masuk_rsj', 'masuk rehab'];
        $listSaranPantiPenanganan = [];
        $saran_panti_penanganan = $this->input->post('saran_panti_penanganan');
        foreach($allSaranPantiPenanganan as $val){
            if(in_array($val, $saran_panti_penanganan) == 1){
                $listSaranPantiPenanganan[$val] = 1;
            }else{
                $listSaranPantiPenanganan[$val] = 0;
            }
        }
        $dataSaranPantiPenanganan =  json_encode($listSaranPantiPenanganan);  

        // -> Saran Panti untuk Pendampingan 
        $allSaranPantiPendampingan = ['pendampingan', 'kontrol_obat', 'aktivitas_rutin', 'kunjungan', 'pendaftaran'];
        $listSaranPantiPendampingan = [];
        $saran_panti_pendampingan = $this->input->post('saran_panti_pendampingan');
        foreach($allSaranPantiPendampingan as $val){
            if(in_array($val, $saran_panti_pendampingan) == 1){
                $listSaranPantiPendampingan[$val] = 1;
            }else{
                $listSaranPantiPendampingan[$val] = 0;
            }
        }
        $dataSaranPantiPendampingan =  json_encode($listSaranPantiPendampingan);  
        $dataTambahan = [
            'id_pasien' => $this->getLastIdPasien(),
            'tahap_gangguan_kejiwaan' => $this->input->post('gangguan_jiwa'),
            'jenis_penanganan' => $dataSaranPantiPenanganan,
            'jenis_pendampingan' => $dataSaranPantiPendampingan,
            'alasan_penanganan' => $this->input->post('alasan_penanganan'),
            'note' => $this->input->post('catatan'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')             
        ];
        $this->db->insert('data_tambahan', $dataTambahan);
    }

    public function editPasien(){
        date_default_timezone_set('Asia/Jakarta');
        $data = [
            'nik' => $this->input->post('nik'),
            'nama_pasien' => $this->input->post('nama'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'tgl_masuk' => $this->input->post('tgl_masuk'),
            'umur' => $this->input->post('umur'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'alamat_pasien' => $this->input->post('alamat'),
            'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir'),
            'pekerjaan_terakhir' => $this->input->post('pekerjaan_terakhir'),
            'status_perkawinan' => $this->input->post('status_perkawinan'),
            'agama' => $this->input->post('agama'),
            'alasan_kunjungan' => $this->input->post('alasan_kunjungan'),
            'updated_at' => date('Y-m-d H:i:s'),
            'created_by' => $this->session->userdata('id')
        ];
        $where = [
            'id_pasien' => $this->input->post('id_pasien')
        ];
        $this->db->where($where);
		$this->db->update('pasien',$data); 
    }

    public function hapusPasien(){
        $id_pasien = $this->input->post('id_pasien');
        $this->db->query("DELETE FROM penanggung_jawab WHERE id_pasien = '$id_pasien'");
        $this->db->query("DELETE FROM riwayat_sakit WHERE id_pasien = '$id_pasien'");
        $this->db->query("DELETE FROM tanda_awal_sakit WHERE id_pasien = '$id_pasien'");
        $this->db->query("DELETE FROM kondisi_terakhir WHERE id_pasien = '$id_pasien'");
        $this->db->query("DELETE FROM data_tambahan WHERE id_pasien = '$id_pasien'");
        $this->db->query("DELETE FROM pasien WHERE id_pasien = '$id_pasien'");
    }

    public function postPemeriksaanKesehatan(){
        date_default_timezone_set('Asia/Jakarta');
        $data = [
            'id_pasien' => $this->input->post('pasien'),
            'date' => $this->input->post('tanggal'),
            'berat_badan' => $this->input->post('berat_badan'),
            'tekanan_darah' => $this->input->post('tekanan_darah'),
            'temperatur' => $this->input->post('temperatur'),
            'nadi' => $this->input->post('nadi'),
            'keterangan_tambahan' => $this->input->post('keterangan'),
            'created_by' => $this->session->userdata('id'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s') 
        ];
        $this->db->insert('pemeriksaan_kesehatan', $data);
    }

    public function postPerkembanganKondisiKesehatan(){
        date_default_timezone_set('Asia/Jakarta');
        $data = [
            'id_pasien' => $this->input->post('pasien'),
            'date' => $this->input->post('tanggal'),
            'farmokoterapi_before' => $this->input->post('farmokoterapi_before'),
            'farmokoterapi_after' => $this->input->post('farmokoterapi_after'),
            'kondisi_kesehatan' => $this->input->post('kondisi_kesehatan'),
            'terapi_sosial_dll' => $this->input->post('terapi_sosial_dll'),
            'catatan_staff' => $this->input->post('catatan_staff'),
            'created_by' => $this->session->userdata('id'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ];
        $this->db->insert('perkembangan_kondisi_kesehatan', $data);
    }

    public function postPenggunaanObat(){
        date_default_timezone_set('Asia/Jakarta');
        $id_pasien = $this->input->post('pasien');
        $tgl_mulai = $this->input->post('tgl_mulai');
        $tgl_berhenti = $this->input->post('tgl_berhenti');
        $nama_obat = $this->input->post('nama_obat');
        foreach($nama_obat as $key => $val){
            $data = [
                'id_pasien' => $id_pasien,
                'tgl_mulai' => $tgl_mulai,
                'tgl_berhenti' => $tgl_berhenti,
                'nama_obat' => $this->input->post('nama_obat')[$key],
                'dosis' => $this->input->post('dosis')[$key],
                'jenis' => $this->input->post('jenis')[$key],
                'waktu' => '{"pagi": 1, "siang": 1, "sore": 1, "malam": 1}',
                'catatan_obat' => $this->input->post('catatan')[$key],
                'keterangan_obat' => $this->input->post('keterangan')[$key],
                'status' => 0,
                'created_by' => $this->session->userdata('id'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')  
            ];
            $this->db->insert('penggunaan_obat', $data);
        }
    }

    public function getPemeriksaanKesehatanPasien($id){
        $this->db->select('*');
        $this->db->from('pemeriksaan_kesehatan');
        $this->db->where('id_pasien', $id);
        $data = $this->db->get()->result();
        return $data;
    }
    
    public function getPasienById($id){
        $this->db->select('*');
        $this->db->from('pasien');
        $this->db->where('id_pasien', $id);
        $data = $this->db->get()->result();
        return $data;
    }

    public function getPerkembanganKondisi($id){
        $this->db->select('*');
        $this->db->from('perkembangan_kondisi_kesehatan');
        $this->db->where('id_pasien', $id);
        $data = $this->db->get()->result();
        return $data;
    }  

    public function getObatPasien($id){
        $this->db->select('*');
        $this->db->from('penggunaan_obat');
        $this->db->where('id_pasien', $id);
        $data = $this->db->get()->result();
        return $data;
    }    
    
    public function getObatById($id){
        $this->db->select('penggunaan_obat.*, pasien.* , user.name');
        $this->db->from('penggunaan_obat');
        $this->db->join('pasien', 'pasien.id_pasien = penggunaan_obat.id_pasien');
        $this->db->join('user', 'penggunaan_obat.created_by = user.id');
        $this->db->where('id_penggunaan_obat', $id);
        $data = $this->db->get()->result();
        return $data;
    }

    public function getEvaluasiPenggunaanObat($id){
        $this->db->select('*, evaluasi_penggunaan_obat.created_at');
        $this->db->from('evaluasi_penggunaan_obat');
        $this->db->join('penggunaan_obat', 'penggunaan_obat.id_penggunaan_obat = evaluasi_penggunaan_obat.id_penggunaan_obat');
        $this->db->where('id_pasien', $id);
        $data = $this->db->get()->result();
        return $data;
    }
    
    public function postEvaluasiObat(){
        date_default_timezone_set('Asia/Jakarta');
        $data = [
            'id_penggunaan_obat' => $this->input->post('id_penggunaan_obat'),
            'date' => $this->input->post('tanggal_evaluasi'),
            'hasil_observasi' => $this->input->post('hasil_observasi'),
            'tindakan' => $this->input->post('tindakan'),
            'catatan_evaluasi' => $this->input->post('catatan'),
            'created_by' => $this->session->userdata('id'),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ];
        $this->db->insert('evaluasi_penggunaan_obat', $data);
    }

    public function getPenggunaanObatAll(){
        $this->db->select('*, penggunaan_obat.created_at');
        $this->db->from('penggunaan_obat');
        $this->db->join('pasien', 'pasien.id_pasien = penggunaan_obat.id_pasien');
        $this->db->where('status', 0);
        $data = $this->db->get()->result();
        return $data;
    }

    public function updateStatusObatApoteker(){
        $id_penggunaan_obat = $this->input->post('id_penggunaan_obat');
        $this->db->query("UPDATE penggunaan_obat SET status = 1 WHERE id_penggunaan_obat = '$id_penggunaan_obat'");
    }

    public function deleteEvaluasiObat($id){
        $this->db->query("DELETE FROM evaluasi_penggunaan_obat WHERE id_evaluasi = '$id'");
    }
// end
}
