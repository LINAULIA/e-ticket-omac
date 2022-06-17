<style type="text/css">
    .qr {
        left: 60%;
    }
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
                            <input name="nama" type="text" class="form-control" value="<?php echo $pemesan->nama_pemesan ?>" disabled>
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
                            <div class="col-sm-4">
                                <label for="jumlah">Jumlah</label>
                                <input name="jumlah" type="text" class="form-control" value="<?php echo $pemesan->jumlah ?>" disabled>
                            </div>
                            <div class="col-sm-4">
                                <label for="total_pembayaran">Total</label>
                                <input name="total_pembayaran" type="text" class="form-control" value="Rp. <?php echo $pemesan->total_pembayaran ?>" disabled>
                            </div>
                        </div>
                        <?php if ($pemesan->status === '2') : ?>
                            <div class="qr col-sm-8 position-absolute end-0">
                                <a href=" <?php echo base_url('assets/qrpemesan/' . $pemesan->qr_code); ?>"><img class="qr" style="width: 350px;" id="qr_code" src="<?php echo base_url('assets/qrpemesan/' . $pemesan->qr_code); ?>" alt=""></a>
                            </div>
                        <?php endif ?>

                    </div>
                    <div class="row mt-2">

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
                    <div class="row mt-3">
                        <div class="col-sm-3">
                            <label for="status">Status : </label>
                            <?php if ($pemesan->status === '0') : ?>
                                <button type="button" class="btn btn-secondary ">Belum Dibayar</button>
                            <?php elseif ($pemesan->status === '1') : ?>
                                <button type="button" class="btn btn-warning ">Belum Diproses</button>
                            <?php elseif ($pemesan->status === '2') : ?>
                                <button type="button" class="btn btn-success ">Pembayaran Disetujui</button>
                            <?php elseif ($pemesan->status === '3') : ?>
                                <button type="button" class="btn btn-danger ">Pembayaran Ditolak</button>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<!-- /.card -->

</section>
<script>

</script>
<!-- /.content -->
</div>