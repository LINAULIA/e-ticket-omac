<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data E-Ticketing</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Status</li>
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
                <a href="<?= base_url('Cetakpdf') ?>" class="btn btn-primary"><i class="fa-solid fa-print fa-3x"></i></a>
                <div class="card-tools">
                    </button>
                </div>
            </div>
            <div class="card-body">
                <table id="example" class="table table-striped table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Tiket</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <!-- <th>Aksi</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php $id = 1;
                        foreach ($pengunjung as $li) : ?>
                            <tr>
                                <td><?= $id++; ?></td>
                                <td><?= $li->nomor_tiket ?></td>
                                <td><?= $li->tanggal ?></td>
                                <td align="left"><?php switch ($li->status_qr) {
                                                        case 0: ?><button type="button" class="btn btn-secondary ">Belum Masuk</button><?php break;
                                                                                                                                    case 1: ?><i class="fa fa-check fa-3x text-success text-center" style="font-weight:bolder;"></i> <?php break;
                                                                                                                                                                                                                                } ?></td>
                                <!-- <td>
                                    <a onclick='return confirm("Yakin Ingin Verfikasi No Pembayaran <?= $li->no_pembayaran ?> ? ")' href="<?= base_url('kasir/verifikasi/' . $li->id) ?>" class="btn btn-success">Verifikasi</a> 
                                    <a href="<?= base_url('kasir/detail_scan') . '/' . $li->id; ?>" class="btn btn-warning"><i class=" fas fa-eye"></i></a>
                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-detail" href="<?= base_url('kasir/detail_scan') . '/' . $li->id; ?>"><i class=" fas fa-eye"></i></button> 
                                </td> -->
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>No Tiket</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <!-- <th>Aksi</th> -->
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <!-- /.card -->

        <!-- Modal detail-->
        <div class="modal fade" id="modal-detail">
            <div class="modal-dialog">
                <div class="modal-content bg-warning">
                    <div class="modal-header">
                        <h4 class="modal-title">Detail Pengunjung (E-Ticketing)</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="nama">Nama Pemesan</label>
                                <input name="nama" type="text" class="form-control" placeholder="Nama" value="<?php echo $pemesan->nama_pemesan ?>" disabled>
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-outline-light">Save changes</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    </section>
    <!-- /.content -->
</div>