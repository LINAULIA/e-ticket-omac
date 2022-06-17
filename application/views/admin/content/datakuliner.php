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
                    <h1>Data Kuliner</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a style="color:black;" href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a style="color:black;" href="<?= base_url('kuliner'); ?>">Kuliner</a></li>
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

                <button class="btn btn-primary" data-toggle="modal" data-target="#modaltambahkuliner"><i class="fas fa-plus fa-fw"></i>Tambah Data Baru</button>
                <?php if ($this->session->flashdata('success')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                <?php endif; ?>
                <div class="card-tools">
                    </button>
                </div>
            </div>
            <div class="card-body">
                <table id="example" class="table table-striped table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kuliner</th>
                            <th>Gambar</th>
                            <th>Keterangan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($kuliner as $s) { ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $s->nama_kuliner ?></td>
                                <td align=center><img style="width:100px;" src="<?php echo base_url() . '/upload/' . $s->gambar ?>" width="64" alt=""></td>
                                <td><?= $s->keterangan ?></td>
                                <td>
                                    <?php echo anchor('kuliner/edit/' . $s->id_kuliner, '<div class="btn btn-sm btn-secondary btn-sm"><i class="fas fa-edit"></i></div>') ?>
                                    <?php echo anchor('kuliner/delete/' . $s->id_kuliner, '<div class="btn btn-sm btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?>
                                </td>
                            </tr>
                        <?php } ?>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama Kuliner</th>
                            <th>Gambar</th>
                            <th>Keterangan</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>

<!-- Modal Tambah Wahana-->
<div class="modal fade" id="modaltambahkuliner" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content bg-info">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLongTitle">Tambah Data Kuliner</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() . 'kuliner/tambah_data'; ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nama_kuliner">Nama Kuliner</label>
                        <input required type="text" class="form-control" id="nama_kuliner" name="nama_kuliner" placeholder="Masukkan Nama Kuliner">
                    </div>

                    <div class="form-group">
                        <label for="gambar">Upload Gambar (jpg/png)</label>

                        <input required type="file" class="form-control" id="gambar" name="gambar">
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <!-- textarea -->
                            <div class="form-group">
                                <label>Masukkan Keterangan</label>
                                <textarea id="keterangan" name="keterangan" class="form-control" rows="6" placeholder="keterangan" required>
                                <?php if (isset($keterangan)) {
                                    echo $keterangan;
                                } ?> 
                                </textarea>
                                <?= form_error('keterangan', '<small class="text-danger pl-3">', '</small>');  ?>
                            </div>
                        </div>
                    </div>
                    <?php echo form_error('kode_type', '<div class="text-small text-danger">', '</div>') ?>

                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <!-- /.Modal tambah wahana -->
</div>
<!-- /.modal-dialog -->
</div>
<script src="<?php echo base_url('assets/tinymce/tinymce.min.js'); ?>"></script>
<script>
    tinymce.init({
        selector: '#keterangan'
    });
</script>