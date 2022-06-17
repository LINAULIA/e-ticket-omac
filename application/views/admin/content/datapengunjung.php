<div class="content-wrapper" style="background-color:#66A5AD">
    <style type="text/css">
        .breadcrumb a:hover {
            background-color: aliceblue;
        }
    </style>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Pengunjung</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a style="color:black;" href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a style="color:black;" href="<?= base_url('admin/pengunjung'); ?>">Data Pengunjung</a></li>
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
                <a href="<?= base_url('Cetakpdf') ?>" class="btn btn-primary"><i class="fa-solid fa-print"></i></a>
            </div>
            <div class="card-body">
                <table id="example" class="table table-striped table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Tiket</th>
                            <th>Status QR</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $id = 1;
                        foreach ($pengunjung as $li) : ?>
                            <tr>
                                <td><?= $id++; ?></td>
                                <td><?= $li->nomor_tiket ?></td>
                                <td><?= $li->status_qr ?></td>
                                <td>
                                    <a href="<?= base_url('admin/detail_pengunjung') . '/' . $li->id; ?>" class="btn btn-warning"><i class=" fas fa-eye"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>No Tiket</th>
                            <th>Status QR</th>
                            <th>Aksi</th>
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