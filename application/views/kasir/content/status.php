<div class="content-wrapper" style="background-color:#66A5AD">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Halaman Status</h1>
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
            <div class="card-body">
                <table id="example" class="table table-striped table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nomor Tiket</th>
                            <th>Nama Pemesan</th>
                            <th>Tanggal Kedatangan</th>
                            <th>Jumlah</th>
                            <th>Total Pembayaran</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $id = 1;
                        foreach ((array)$pembayaran as $s) { ?>
                            <tr>
                                <td><?= $id++; ?></td>
                                <td><?= $s->nomor_tiket; ?></td>
                                <td><?= $s->nama_pemesan; ?></td>
                                <td><?= $s->tanggal; ?></td>
                                <td><?= $s->jumlah; ?></td>
                                <td><?= $s->total_pembayaran; ?></td>
                                <td align="left"><?php switch ($s->status) {
                                                        case 0: ?><button type="button" class="btn btn-secondary ">Belum Dibayar</button><?php break;
                                                                                                                                        case 1: ?><button type="button" class="btn btn-warning">Belum diproses</button><?php break;
                                                                                                                                                                                                                    case 2: ?><button type="button" class="btn btn-success">Pembayaran Diterima</button><?php break;
                                                                                                                                                                                                                                                                                                    case 3: ?> <button data-toggle="modal" data-target="#detail_kettolak" type="button" class="btn btn-danger fw-bold">Pembayaran Ditolak</button><?php break;
                                                                                                                                                                                                                                                                                                                                                                                                                                                case 4: ?> <button type="button" class="btn btn-info fw-bold">Pembayaran Tunai</button><?php break;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                } ?></td>
                                <td>
                                    <?php echo anchor('kasir/detail_status/' . $s->id, '<div class="btn btn-sm btn-danger btn-sm"><i class="fas fa-eye"></i></div>') ?>
                                    <?php echo anchor('kasir/edit_status/' . $s->id, '<div class="btn btn-sm btn-secondary btn-sm"><i class="fas fa-edit"></i></div>') ?>
                                </td>
                            </tr>
                        <?php } ?>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nomor Tiket</th>
                            <th>Nama Pemesan</th>
                            <th>Tanggal Kedatangan</th>
                            <th>Jumlah</th>
                            <th>Total Pembayaran</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->

    <?php foreach ($pembayaran as $row) { ?>

        <div class="modal fade" id="detail_kettolak">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Tambahkan Keterangan Tolak</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="myForm" action="<?php echo site_url('Kasir/ket_tolak/' . $row->id); ?>" method="post" enctype="multipart/form-data">
                            <input type="text" name="ket-tolak" placeholder="masukkan ket tolak">
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    <?php } ?>
</div>