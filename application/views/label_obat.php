<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> 
        <title><?= $title_pdf;?></title>
        <style>
            body{
                margin: 0;
                padding: 0;
            }
            table{
                font-size: 10px !important;
            }
            .font-weight-bold{
                font-weight: bold;
            }
            .text-right{
                text-align: right;
            }
            .text-danger{
                font-weight: bolder;
                color: red;
            }
            .text-normal{
                font-size: 12px;
            }
            .text-small{
                font-size: 10px;
            }
        </style>
    </head>
    <body>
        <small class="text-small"><?= date('d/m/Y') ?></small> <br>
        <?php foreach($obat as $o): ?>
        <b><?= $o->nama_obat ?></b> <span class="text-normal">(<?= $o->jenis ?>)</span>

        <table class="table">
            <tr>
                <td>Catatan</td>
                <td>:</td>
                <td><?= $o->catatan_obat ?></td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td>:</td>
                <td><?= $o->keterangan_obat ?></td>
            </tr>
            <tr class="font-weight-bold">
                <td>Dokter</td>
                <td>:</td>
                <td><?= $o->name ?></td>
            </tr>
        </table>
        <?php endforeach; ?>
    </body>
</html>