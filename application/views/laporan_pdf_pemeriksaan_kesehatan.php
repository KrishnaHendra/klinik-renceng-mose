<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> 
        <title><?= $title_pdf;?></title>
        <style>
           
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
            .dataTable{
                border-collapse: collapse;
            }
            .dataTable th{
                padding: 7px;
            } 
            .dataTable td{
                padding: 7px;
            } 
            .bg-info{
                background: #bfe2ff;
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

        <div class="row m-hr">
            <div class="col-12">
                <table class="table">
                    <tr>
                        <td class="text-center">
                            <h4 class="m-0">PEMERIKSAAN KESEHATAN PASIEN</h4>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <?php foreach($pasien as $p): ?>
                <table class="table">
                    <tr>
                        <td width="50%">
                            <table>
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td><?= $p->nama_pasien ?></td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>:</td>
                                    <td><?= $p->jenis_kelamin ?></td>
                                </tr>
                                <tr>
                                    <td>Umur</td>
                                    <td>:</td>
                                    <td><?= $p->umur ?> tahun</td>
                                </tr>
                            </table>
                        </td>
                        <td style="vertical-align: top !important;">
                            <table>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td>Malang</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="row m-hr">
            <div class="col-12">
                <table class="table dataTable" border="1">
                   <thead>
                        <tr class="bg-info">
                            <th>NO</th>
                            <th>TANGGAL</th>
                            <th>BERAT BADAN</th>
                            <th>TEKANAN DARAH</th>
                            <th>TEMPERATUR</th>
                            <th>NADI</th>
                            <th>KETERANGAN</th>
                        </tr>
                        <tr class="bg-info">
                            <th>I</th>
                            <th>II</th>
                            <th>III</th>
                            <th>IV</th>
                            <th>V</th>
                            <th>VI</th>
                            <th>VII</th>
                        </tr>
                   </thead> 
                   <tbody>
                    <?php $no=1; foreach($dataPemeriksaan as $d): ?>
                        <tr>
                            <td class="text-center bg-info"><?= $no++ ?></td>
                            <td class="text-center"><?= date('d/m/Y', strtotime($d->date)) ?></td>
                            <td class="text-center"><?= $d->berat_badan ?> kg</td>
                            <td class="text-center"><?= $d->tekanan_darah ?></td>
                            <td class="text-center"><?= $d->temperatur ?></td>
                            <td class="text-center"><?= $d->nadi ?></td>
                            <td class="text-center"><?= $d->keterangan_tambahan ?></td>
                        </tr>
                    <?php endforeach; ?>
                   </tbody>
                </table>
            </div>
        </div>

        <!-- <div class="row m-hr">
            <div class="col-12">
                <table class="table">
                    <tr>
                        <td>
                            <u class="font-weight-bold">CATATAN :</u>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Lorem ipsum dolor sit amet
                        </td>
                    </tr>
                </table>
            </div>
        </div> -->
      
    </body>
</html>