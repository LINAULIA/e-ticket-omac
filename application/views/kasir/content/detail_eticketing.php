<style type="text/css">

</style>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Halaman E-Ticketing</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Detail</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><?= $title ?> </h3>
            </div>
            <div class="card-body">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-3 text-center">
                            <h5>No Tiket / Kode Pembayaran : </h5>
                        </div>
                        <div class="col-sm-3">
                            <h2><b><?php echo $pemesan->nomor_tiket ?> / <?php echo $pemesan->no_pembayaran ?></b></h2>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="nama">Nama Pemesan</label>
                            <input name="nama" type="text" class="form-control" value="<?php echo $pemesan->nama_pemesan ?>" readonly>
                        </div>
                        <div class="col-sm-4">
                            <label for="email">Email</label>
                            <input name="email" type="text" class="form-control" value="<?php echo $pemesan->email ?>" disabled>
                        </div>
                        <div class="col-sm-4">
                            <label for="notlp">No Telepon</label>
                            <input name="no_telepon" type="text" class="form-control" value="<?php echo $pemesan->no_telepon ?>" disabled>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-12">
                            <label for="notlp">Alamat</label>
                            <input name="alamat" type="text" class="form-control" value="<?php echo $pemesan->alamat ?>" disabled>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-4">
                            <label for="tanggal">Tanggal Kedatangan</label>
                            <input name="tanggal" type="text" class="form-control" value="<?php echo $pemesan->tanggal ?>" disabled>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-1">
                            <label for="jumlah">Jumlah</label>
                            <input name="jumlah" type="text" class="form-control" value="<?php echo $pemesan->jumlah ?>" disabled>
                        </div>
                        <div class="col-sm-3">
                            <label for="total_pembayaran">Total</label>
                            <input name="total_pembayaran" type="text" class="form-control" value="Rp. <?php echo $pemesan->total_pembayaran ?>" disabled>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-sm-3">
                            <label for="bukti">Bukti Pembayaran : </label>
                        </div>
                    </div>
                    <div class="geeks row mt-2 ">
                        <div class="col-sm-6">
                            <a href="<?php echo base_url('assets/bukti/' . $pemesan->bukti); ?>"><img style="width: 300px;" id="bukti" src="<?php echo base_url('assets/bukti/' . $pemesan->bukti); ?>" alt=""></a>
                        </div>
                    </div>
                </div>
                <a onclick='return confirm("Yakin Ingin Verfikasi Pembayaran <?= $pemesan->no_pembayaran ?> ? ")' href="<?= base_url('kasir/verifikasi/' . $pemesan->id) ?>" class="btn btn-success">Verifikasi Pembayaran</a>
                <a data-toggle="modal" data-target="#tolak<?= $pemesan->id ?>" class="btn btn-danger">Tolak Pembayaran</a>
            </div>
        </div>
        <!-- /.card-body -->
        <!-- Modal tolak prodi -->



        <div class="modal fade" id="tolak<?= $pemesan->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">

                    <div class="modal-body">

                        <form id="myForm" action="<?php echo site_url('Kasir/tolak/' . $pemesan->id); ?>" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="ket_tolak_tu">Keterangan Tolak</label>

                                <textarea class="form-control <?php echo form_error('ket_tolak_tu') ? 'is-invalid' : '' ?>" type="text" name="ket_tolak" placeholder="Masukkan Alasan Penolakan" maxlength="500" cols="5" rows="5"></textarea>


                            </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                        <input class="btn btn-success" type="submit" name="btn" value="Simpan" />
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- /.card-footer-->
</div>
<!-- /.card -->

</section>
<script>

</script>
<!-- /.content -->
</div>