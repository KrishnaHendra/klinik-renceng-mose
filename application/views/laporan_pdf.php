<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> 
        <title><?= $title_pdf;?></title>
        <style>
            #table {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            #table td, #table th {
                border: 1px solid #ddd;
                padding: 2px;
            }

            #table tr:nth-child(even){background-color: #f2f2f2;}

            #table tr:hover {background-color: #ddd;}

            #table th {
                padding-top: 10px;
                padding-bottom: 10px;
                text-align: left;
                background-color: #4CAF50;
                color: white;
            }
            h4,h5{
                margin: 0;
            }
            .text-center{
                text-align: center;
            }
            .m-0{
                margin: 0;
            }
            .m-hr{
                margin: 15px 0 15px 0;
            }
            .table{
                width: 100%;
            }
            .font-weight-bold{
                font-weight: bold;
            }
            .col-left{
                width: 50%;
                float: left;
            }
            .col-right{
                width: 50%;
                float: right;
            }
            table{
                font-size: 14px;
            }

            .tick-mark {
                position: relative;
                display: inline-block;
                width: 15px;
                height: 15px;
            }

            .tick-mark::before {
                position: absolute;
                left: 0;
                top: 50%;
                height: 50%;
                width: 3px;
                background-color: green;
                content: "";
                transform: translateX(5px) rotate(-45deg);
                transform-origin: left bottom;
            }

            .tick-mark::after {
                position: absolute;
                left: 0;
                bottom: 0;
                height: 3px;
                width: 100%;
                background-color: green;
                content: "";
                transform: translateX(5px) rotate(-45deg);
                transform-origin: left bottom;
            } 
            .text-right{
                text-align: right;
            }
            .text-danger{
                font-weight: bolder;
                color: red;
            }
        </style>
    </head>
    <body>
        <div class="row">
            <div class="col-12 text-center">
                <h3 class="m-0">YAYASAN KARYA BAKTI</h3>
                <h4 class="m-0">PANTI REHABILITASI & KLINIK GANGGUAN JIWA <br> RENCENG MOSE</h4>
                <h4>Jln. Lintas Luar, Kelurahan Bangka Leda, Kec. Langke Rembong, Ruteng, Manggarai</h4>
            </div>
        </div>
        <hr class="m-hr">

        <div class="row">
            <div class="col-12">
                <table class="table">
                    <tr>
                        <td>Nomor : ....................</td>
                        <td>Ruteng : ....................</td>
                    </tr>
                </table>
            </div>
        </div>

        <?php foreach($data as $d): ?>
        <div class="row">
            <div class="col-12 text-center">
                <h4 class="m-hr">PENDATAAN & KONSULTASI AWAL <br> PASIEN GANGGUAN JIWA</h4>
            </div>
            <div class="col-12">
                <table>
                    <tr>
                        <td colspan="4" class="font-weight-bold">A. <b><u>Sumber Informasi</u></b></td>
                    </tr>
                    <tr>
                        <td>1.</td>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?= $d->nama_penanggung_jawab ?></td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>Hubungan dengan pasien</td>
                        <td>:</td>
                        <td><?= $d->hubungan_pasien ?></td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><?= $d->alamat ?></td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>NO KTP</td>
                        <td>:</td>
                        <td><?= $d->no_ktp ?></td>
                    </tr>
                    <tr>
                        <td>5.</td>
                        <td>Kontak Person</td>
                        <td>:</td>
                        <td>-</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="row m-hr">
            <div class="col-left">
                <table class="table">
                    <tr>
                        <td colspan="3" class="font-weight-bold">B. <b><u>Data Pasien</u></b></td> 
                    </tr>
                    <tr>
                        <td style="width: 40%;">Nama Lengkap</td>
                        <td style="width: 5%;" class="text-center">:</td>
                        <td style="width: 55%;"><?= $d->nama_pasien ?></td>
                    </tr>
                    <tr>
                        <td style="width: 40%;">Tgl Lahir</td>
                        <td style="width: 5%;" class="text-center">:</td>
                        <td style="width: 55%;"><?= date('d/m/Y', strtotime($d->tgl_lahir)) ?></td>
                    </tr>
                    <!-- <tr>
                        <td style="width: 40%;">Umur</td>
                        <td style="width: 5%;" class="text-center">:</td>
                        <td style="width: 55%;"><?= $d->umur ?> tahun</td>
                    </tr> -->
                    <tr>
                        <td style="width: 40%;">Jenis Kelamin</td>
                        <td style="width: 5%;" class="text-center">:</td>
                        <td style="width: 55%;"><?= $d->jenis_kelamin ?></td>
                    </tr>
                    <tr>
                        <td style="width: 40%;">Alamat</td>
                        <td style="width: 5%;" class="text-center">:</td>
                        <td style="width: 55%;"><?= $d->alamat_pasien ?></td>
                    </tr>
                </table>
            </div>
            <div class="col-right">
                <table class="table">
                    <tr>
                        <td colspan="3" style="color: white;">-</td> 
                    </tr>
                    <tr>
                        <td style="width: 40%;">Pendidikan Terakhir</td>
                        <td style="width: 5%;" class="text-center">:</td>
                        <td style="width: 55%;"><?= $d->pendidikan_terakhir ?></td>
                    </tr>
                    <tr>
                        <td style="width: 40%;">Pekerjaan Terakhir</td>
                        <td style="width: 5%;" class="text-center">:</td>
                        <td style="width: 55%;"><?= $d->pekerjaan_terakhir ?></td>
                    </tr>
                    <tr>
                        <td style="width: 40%;">Status Perkawinan</td>
                        <td style="width: 5%;" class="text-center">:</td>
                        <td style="width: 55%;"><?= $d->status_perkawinan ?></td>
                    </tr>
                    <tr>
                        <td style="width: 40%;">Agama</td>
                        <td style="width: 5%;" class="text-center">:</td>
                        <td style="width: 55%;"><?= $d->agama ?></td>
                    </tr>
                    <tr>
                        <td style="width: 40%;">NIK</td>
                        <td style="width: 5%;" class="text-center">:</td>
                        <td style="width: 55%;"><?= $d->nik ?></td>
                    </tr>
                </table> 
            </div>
        </div>

        <div class="row m-hr" style="margin-top: 145px;">
            <div class="col-12">
                <table class="table">
                    <tr>
                        <td class="font-weight-bold">C. <b><u>Alasan Kunjungan</u></b></td> 
                    </tr> 
                    <tr>
                        <td>Lorem ipsum dolor sit amet daosd</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="row m-hr">
            <div class="col-left">
                <table class="table">
                    <tr>
                        <td colspan="3" class="font-weight-bold">D. <b><u>Riwayat Sakit Penanganan</u></b></td> 
                    </tr> 
                    <tr>
                        <td style="width: 40%;">Usia / Lama Sakit</td>
                        <td style="width: 5%;">:</td>
                        <td style="width: 55%;"><?= $d->usia_sakit ?> tahun</td>
                    </tr>
                    <tr>
                        <td>Kondisi Umum</td>
                        <td>:</td>
                        <td><?= $d->kondisi_umum ?></td>
                    </tr>
                </table>
            </div>
            <div class="col-right">
                <table class="table">
                    <tr>
                        <td colspan="3" style="color: white;">-</td> 
                    </tr> 
                    <tr>
                        <?php $jenisFaktor = json_decode($d->jenis_faktor); ?>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Faktor genetik</td>
                                    <td>
                                        <?php if($jenisFaktor->faktor_genetik == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="font-weight-bold text-danger">X</span>
                                        <?php } ?>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Faktor fisik</td>
                                    <td>
                                        <?php if($jenisFaktor->faktor_fisik == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="font-weight-bold text-danger">X</span>
                                        <?php } ?> 
                                    </td>
                                </tr>
                            </table>                            
                        </td>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Faktor sosial</td>
                                    <td>
                                        <?php if($jenisFaktor->faktor_sosial == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="font-weight-bold text-danger">X</span>
                                        <?php } ?> 
                                    </td>
                                </tr>
                            </table> 
                        </td>
                    </tr>
                    <tr>
                        <?php $jenisPenanganan = json_decode($d->jenis_penanganan_riwayat); ?>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Tangani sendiri</td>
                                    <td>
                                        <?php if($jenisPenanganan->tangani_sendiri == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="font-weight-bold text-danger">X</span>
                                        <?php } ?> 
                                    </td>
                                </tr>
                            </table> 
                        </td>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Ditangani ahli</td>
                                    <td>
                                        <?php if($jenisPenanganan->ditangani_ahli == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="font-weight-bold text-danger">X</span>
                                        <?php } ?>  
                                    </td>
                                </tr>
                            </table> 
                        </td>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Minum obat</td>
                                    <td>
                                        <?php if($jenisPenanganan->minum_obat == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="font-weight-bold text-danger">X</span>
                                        <?php } ?>                                         
                                    </td>
                                </tr>
                            </table>                                
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="row m-hr" style="margin-top: 75px;">
            <div class="col-12">
                <table class="table">
                    <?php $jenisTanda = json_decode($d->jenis_tanda); ?>
                    <tr>
                        <td colspan="4" class="font-weight-bold">E. <b><u>Tanda - Tanda Awal Sakit</u></b></td> 
                    </tr> 
                    <tr>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Dengar Suara</td>
                                    <td class="text-center">
                                        <?php if($jenisTanda->dengar_suara == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Sedih / Murung</td>
                                    <td class="text-center">
                                        <?php if($jenisTanda->sedih_murung == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?> 
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Sulit Tidur</td>
                                    <td class="text-center">
                                        <?php if($jenisTanda->sulit_tidur == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?> 
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Kelakuan Aneh</td>
                                    <td class="text-center">
                                        <?php if($jenisTanda->kelakuan_aneh == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?> 
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Bicara Banyak</td>
                                    <td class="text-center">
                                        <?php if($jenisTanda->bicara_banyak == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?> 
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Lihat Sesuatu</td>
                                    <td class="text-center">
                                        <?php if($jenisTanda->lihat_sesuatu == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?> 
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Bingung / Gelisah</td>
                                    <td class="text-center">
                                        <?php if($jenisTanda->bingung_gelisah == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?> 
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Banyak Tidur</td>
                                    <td class="text-center">
                                        <?php if($jenisTanda->banyak_tidur == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?> 
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Sulit Rawat Diri</td>
                                    <td class="text-center">
                                        <?php if($jenisTanda->sulit_rawat_diri == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?> 
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Bicara Unreality</td>
                                    <td class="text-center">
                                        <?php if($jenisTanda->bicara_unreality == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?>                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Perasaan Aneh</td>
                                    <td class="text-center">
                                        <?php if($jenisTanda->perasaan_aneh == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?>                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Cemas / Khawatir</td>
                                    <td class="text-center">
                                        <?php if($jenisTanda->cemas_khawatir == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?>                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Aktivitas Kurang</td>
                                    <td class="text-center">
                                        <?php if($jenisTanda->aktivitas_kurang == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?>                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Diam / Isolasi Diri</td>
                                    <td class="text-center">
                                        <?php if($jenisTanda->diam_isolasi_diri == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?>                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Teriak - Teriak</td>
                                    <td class="text-center">
                                        <?php if($jenisTanda->teriak_teriak == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?>                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Pikiran Unreality</td>
                                    <td class="text-center">
                                        <?php if($jenisTanda->pikiran_unreality == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?>                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Curiga / Takut</td>
                                    <td class="text-center">
                                        <?php if($jenisTanda->curiga_takut == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?>                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Lelah / Lemas</td>
                                    <td class="text-center">
                                        <?php if($jenisTanda->lelah_lemas == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?>                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Melarikan Diri</td>
                                    <td class="text-center">
                                        <?php if($jenisTanda->melarikan_diri == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?>                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Marah / Merusak</td>
                                    <td class="text-center">
                                        <?php if($jenisTanda->marah_merusak == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?>                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Bicara Sendiri</td>
                                    <td class="text-center">
                                        <?php if($jenisTanda->bicara_sendiri == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?>                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Sulit Konsentrasi</td>
                                    <td class="text-center">
                                        <?php if($jenisTanda->sulit_konsentrasi == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?>                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Pegal / Nyeri</td>
                                    <td class="text-center">
                                        <?php if($jenisTanda->pegal_nyeri == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?>                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Coba Bunuh Diri</td>
                                    <td class="text-center">
                                        <?php if($jenisTanda->coba_bunuh_diri == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?> 
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Menyerang</td>
                                    <td class="text-center">
                                        <?php if($jenisTanda->menyerang == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?>                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </div> 
        <div class="row m-hr">
            <div class="col-12">
                <table class="table">
                    <?php $jenisKondisi = json_decode($d->jenis_kondisi); ?>
                    <tr>
                        <td colspan="4" class="font-weight-bold">F. <b><u>Kondisi Terakhir</u></b></td> 
                    </tr> 
                    <tr>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Dengar Suara</td>
                                    <td class="text-center">
                                        <?php if($jenisKondisi->dengar_suara == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?>                                                 
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Sedih / Murung</td>
                                    <td class="text-center">
                                        <?php if($jenisKondisi->sedih_murung == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?>                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Sulit Tidur</td>
                                    <td class="text-center">
                                        <?php if($jenisKondisi->sulit_tidur == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?>                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Kelakuan Aneh</td>
                                    <td class="text-center">
                                        <?php if($jenisKondisi->kelakuan_aneh == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?>                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Bicara Banyak</td>
                                    <td class="text-center">
                                        <?php if($jenisKondisi->bicara_banyak == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?>                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Lihat Sesuatu</td>
                                    <td class="text-center">
                                        <?php if($jenisKondisi->lihat_sesuatu == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?>                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Bingung / Gelisah</td>
                                    <td class="text-center">
                                        <?php if($jenisKondisi->bingung_gelisah == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?>                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Banyak Tidur</td>
                                    <td class="text-center">
                                        <?php if($jenisKondisi->banyak_tidur == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?>                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Sulit Rawat Diri</td>
                                    <td class="text-center">
                                        <?php if($jenisKondisi->sulit_rawat_diri == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?>                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Bicara Unreality</td>
                                    <td class="text-center">
                                        <?php if($jenisKondisi->bicara_unreality == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?>                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Perasaan Aneh</td>
                                    <td class="text-center">
                                        <?php if($jenisKondisi->perasaan_aneh == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?>                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Cemas / Khawatir</td>
                                    <td class="text-center">
                                        <?php if($jenisKondisi->cemas_khawatir == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?>                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Aktivitas Kurang</td>
                                    <td class="text-center">
                                        <?php if($jenisKondisi->aktivitas_kurang == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?>                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Diam / Isolasi Diri</td>
                                    <td class="text-center">
                                        <?php if($jenisKondisi->diam_isolasi_diri == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?>                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Teriak - Teriak</td>
                                    <td class="text-center">
                                        <?php if($jenisKondisi->teriak_teriak == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?> 
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Pikiran Unreality</td>
                                    <td class="text-center">
                                        <?php if($jenisKondisi->pikiran_unreality == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?>                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Curiga / Takut</td>
                                    <td class="text-center">
                                        <?php if($jenisKondisi->curiga_takut == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?>                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Lelah / Lemas</td>
                                    <td class="text-center">
                                        <?php if($jenisKondisi->lelah_lemas == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?>                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Melarikan Diri</td>
                                    <td class="text-center">
                                        <?php if($jenisKondisi->melarikan_diri == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?>                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Marah / Merusak</td>
                                    <td class="text-center">
                                        <?php if($jenisKondisi->marah_merusak == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?>                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Bicara Sendiri</td>
                                    <td class="text-center">
                                        <?php if($jenisKondisi->bicara_sendiri == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?>                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Sulit Konsentrasi</td>
                                    <td class="text-center">
                                        <?php if($jenisKondisi->sulit_konsentrasi == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?>                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Pegal / Nyeri</td>
                                    <td class="text-center">
                                        <?php if($jenisKondisi->pegal_nyeri == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?>                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Coba Bunuh Diri</td>
                                    <td class="text-center">
                                        <?php if($jenisKondisi->coba_bunuh_diri == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?>                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Menyerang</td>
                                    <td class="text-center">
                                        <?php if($jenisKondisi->menyerang == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?>                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </div> 


        <div class="row m-hr">
            <div class="col-12">
                <table class="table">
                    <tr>
                        <td colspan="5" class="font-weight-bold">G. <b><u>Tahap Gangguan Kejiwaan</u></b></td> 
                    </tr> 
                    <tr>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Ringan</td>
                                    <td class="text-center">
                                        <?php if($d->tahap_gangguan_kejiwaan == 'ringan'){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="font-weight-bold text-danger">X</span>
                                        <?php } ?>  
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Sedang</td>
                                    <td class="text-center">
                                        <?php if($d->tahap_gangguan_kejiwaan == 'sedang'){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="font-weight-bold text-danger">X</span>
                                        <?php } ?>                                          
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Berat</td>
                                    <td class="text-center">
                                        <?php if($d->tahap_gangguan_kejiwaan == 'berat'){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="font-weight-bold text-danger">X</span>
                                        <?php } ?>                                          
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Cukup Berat</td>
                                    <td class="text-center">
                                        <?php if($d->tahap_gangguan_kejiwaan == 'cukup_berat'){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="font-weight-bold text-danger">X</span>
                                        <?php } ?>   
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Sangat Berat</td>
                                    <td class="text-center"><span class="text-danger font-weight-bold">X</span></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </div> 


        <div class="row m-hr">
            <div class="col-12">
                <table class="table">
                    <tr>
                        <td colspan="5" class="font-weight-bold">H. <b><u>Saran Dari Panti</u></b></td> 
                    </tr> 
                    <tr>
                        <?php $jenisPenangananPanti = json_decode($d->jenis_penanganan); ?>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Tangani Sendiri</td>
                                    <td>
                                        <?php if($jenisPenangananPanti->tangani_sendiri == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Obat Rutin</td>
                                    <td>
                                        <?php if($jenisPenangananPanti->obat_rutin == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?> 
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Konsultasi SPKJ</td>
                                    <td>
                                        <?php if($jenisPenangananPanti->konsultasi_spkj == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?>                                        
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Masuk RSJ</td>
                                    <td>
                                        <?php if($jenisPenangananPanti->masuk_rsj == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?> 
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Masuk Rehab</td>
                                    <td>
                                        <?php if($jenisPenangananPanti->masuk_rehab == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?> 
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <?php $jenisPendampinganPanti = json_decode($d->jenis_pendampingan); ?>
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Pendampingan</td>
                                    <td>
                                        <?php if($jenisPendampinganPanti->pendampingan == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?> 
                                    </td>
                                </tr>
                            </table>
                        </td>                        
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Kontrol Obat</td>
                                    <td>
                                        <?php if($jenisPendampinganPanti->kontrol_obat == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?>                                         
                                    </td>
                                </tr>
                            </table>
                        </td>                        
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Aktivitas Rutin</td>
                                    <td>
                                        <?php if($jenisPendampinganPanti->aktivitas_rutin == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?>  
                                    </td>
                                </tr>
                            </table>
                        </td>                        
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Kunjungan</td>
                                    <td>
                                        <?php if($jenisPendampinganPanti->kunjungan == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?>  
                                    </td>
                                </tr>
                            </table>
                        </td>                        
                        <td>
                            <table class="table">
                                <tr>
                                    <td>Pendaftaran</td>
                                    <td>
                                        <?php if($jenisPendampinganPanti->pendaftaran == 1){ ?>
                                            <span class="tick-mark"></span>
                                        <?php }else{ ?>
                                            <span class="text-danger font-weight-bold">X</span>
                                        <?php } ?>  
                                    </td>
                                </tr>
                            </table>
                        </td>                        
                    </tr>
                </table>
            </div>
        </div>  


        <div class="row m-hr">
            <div class="col-12">
                <table class="table">
                    <tr>
                        <td class="font-weight-bold">I. <b><u>Catatan Penting Lainnya</u></b></td> 
                    </tr> 
                    <tr>
                        <td>
                            <?php if($d->note != ''){ ?>
                                <?= $d->note ?>
                            <?php }else{ ?>
                                -
                            <?php } ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div> 
        <?php endforeach; ?>

        <script src="https://kit.fontawesome.com/c3a6dded80.js" crossorigin="anonymous"></script>        
    </body>
</html>