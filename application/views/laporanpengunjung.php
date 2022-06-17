<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <style type="text/css">
        p {
            margin: 5px 0 0 0;
        }

        p.footer {
            text-align: right;
            font-size: 11px;
            border-top: 1px solid #D0D0D0;
            line-height: 32px;
            padding: 0 10px 0 10px;
            margin: 20px 0 0 0;
            display: block;
        }

        .bold {
            font-weight: bold;
        }

        #footer {
            clear: both;
            position: relative;
            height: 40px;
            margin-top: -40px;
        }
    </style>
</head>

<body style="font-size: 12px">

    <table width="100%">
        <tr>
            <td width="50%"><img src="<?php echo base_url(); ?>assets/nova/images/logo1.png" style="width: 100px;"></td>
        </tr>
    </table>

    <p align="center">
        <span style="font-size: 18px"><b>LAPORAN PENGUNJUNG WISATA <br>Obyek Mata Air Cokro </b></span> <br>
    </p>

    <hr>

    <!-- <p>
    <table>
        <tr>
            <th align="left"> Unit </th>
            <td> : Unit Test</td>
        </tr>
        <tr>
            <th align="left"> Departemen </th>
            <td> : Departemen Test</td>
        </tr>
        <tr>
            <th align="left"> Nomor BA </th>
            <td> : NOMOR/BERITA/ACARA</td>
        </tr>
    </table>
    </p>



    <p>
        Daftar asset yang dikalibrasi :
    </p> -->
    <center>
        <table border="1" cellpadding="8" align="center">
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Nomor Tiket</th>
                <th>Jumlah Tiket</th>
                <th>Total</th>
            </tr>
            <?php
            $no = 1;
            foreach ($pengunjung as $row) {
            ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row->tanggal; ?></td>
                    <td><?php echo $row->nomor_tiket; ?></td>
                    <td><?php echo $row->jumlah; ?></td>
                    <td><?php echo $row->total_pembayaran; ?></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </center>
    <br>



</body>

</html>