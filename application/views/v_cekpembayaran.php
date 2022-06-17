<style type="text/css">
    .jumbotron {
        background-image: url(<?php echo base_url("assets/img/bg/jumbotron.jpg"); ?>);
        background-repeat: no-repeat;
        background-size: cover;
        text-align: center;
        max-width: 100%;
        height: 50px;
        padding-bottom: 450px;
        margin-bottom: 0px;
    }

    .card-header {
        background-color: #053d1e;
    }

    .cekpembayaran {
        background-color: #FFFFFF;
        margin-bottom: -50px;
    }
</style>

<body>


    <!-- <section class="jumbotron jumbotron-fluid">
        <div class="container">
            <br>
            <h1 class="display-4 mt-5">PESAN TIKETMU SEKARANG!!</h1>
            <p class="lead">Kini kamu dan keluarga bisa pesan tiket masuk OMAC secara online – tidak perlu repot antri!</p>
        </div>
    </section> -->
    <section class="cekpembayaran">
        <br>
        <br>
        <br>
        <br>
        <div class="card col-lg-6 mx-auto">
            <div class="card-header"></div>
            <?php if ($this->session->flashdata('pesan') !== null) : ?>
                <div class="alert alert-success">
                    <?= $this->session->flashdata('pesan') ?>
                </div>
            <?php endif; ?>
            <div class="card-body ">
                <form action="<?= base_url('home/cekkonfirmasi') ?>" method="POST">
                    <div class="form-group col-lg mx-auto">
                        <h4 class="text-center">Cek Pembayaran</h4>
                        <input type="text" name="kode" class="form-control" placeholder="Masukkan Kode Pembayaran">
                        <button class="btn mt-2" style="background-color:#053d1e; color:white">Cek Kode Pembayaran</button>
                    </div>
                </form>
            </div>
            <?php if (isset($_GET['kode'])) : ?>
                <div class="card">
                    <div class="card-header text-white">
                        Detail Pembayaran Anda
                    </div>
                    <div class="card-body">
                        <h1 class="text-center">
                            <?php if ($no_tiket->status === '0' || $no_tiket->status === '1') : ?>
                                <i class="fa fa-times text-danger"></i> Belum Dibayar
                            <?php elseif ($no_tiket->status === '2') : ?>
                                <i class="fa fa-check text-success"></i> Sudah Dibayar
                            <?php elseif ($no_tiket->status === '3') : ?>
                                <i class="fa fa-times text-danger"></i> Pembayaran Ditolak
                                <center>
                                    <h6 class="mt-2">(Silahkan periksa pada keterangan tolak)</h6>
                                </center>
                            <?php endif; ?>
                        </h1>

                        <div class="table-responsive">
                            <table class="table">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Nama Pemesan</th>
                                        <th>No Telepon</th>
                                        <th>Email</th>
                                        <?php if ($no_tiket->status === '2') : ?>
                                            <th>Tiket Anda</th>
                                        <?php endif; ?>
                                        <?php if ($no_tiket->status === '3') : ?>
                                            <th>Ket. Tolak</th>
                                        <?php endif; ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($detail as $dt) : ?>
                                        <tr>
                                            <td><?= $dt->nama_pemesan ?></td>
                                            <td><?= $dt->no_telepon ?></td>
                                            <td><?= $dt->email ?></td>
                                            <?php if ($no_tiket->status === '2') : ?>
                                                <td>
                                                    <a href="<?= base_url('home/cetaktiket') . '/' . $dt->id; ?>" class="btn btn-success btn-sm">Cetak</a>
                                                </td>
                                            <?php endif; ?>
                                            <?php if ($no_tiket->status === '3') : ?>
                                                <td><?= $no_tiket->ket_tolak ?></td>
                                            <?php endif; ?>

                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <div class=" row">
                                <div class="col-md-6 mx-auto">
                                    <p><b> Pembayaran Anda : <?= $no_tiket->total_pembayaran ?></b></p>
                                </div>
                                <div class="col-md-6 mx-auto">
                                    <p><b> Jumlah Tiket : <?= $no_tiket->jumlah ?></b></p>
                                </div>
                            </div>
                            <?php if ($no_tiket->status === '0') : ?>
                                <p class="text-danger">Silahkan Kirim Bukti Pembayaran Anda pada Kolom di Bawah.</p>
                                <?= form_open_multipart("home/kirimKonfirmasi"); ?>
                                <input type="hidden" name="no_pembayaran" value="<?= $no_tiket->no_pembayaran ?>">

                                <p>Foto Bukti Pembayaran</p>
                                <input id="foto" type="file" name="userfile" class="form-control" required>
                                <br>
                                <p class="d-none" id="pesan"></p>
                                <button id="btn_konfirmasi" type="submit" class="btn btn-block btn-dark">Kirim Bukti Pembayaran</button>
                                <?= form_close(); ?>
                            <?php else : ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <br>
        <br>
        <br>
        <br>
    </section>
</body>