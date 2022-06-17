<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blank Page</li>
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
                <div class="container-fluid">
                    <h3><i class="fas fa-edit"></i>EDIT DATA WAHANA</h3>
                    <!-- <?php echo form_open_multipart(); ?>
                    <input type="text" name="nama" value="<?php echo $wahana->nama; ?>" placeholder="nama">
                    <input type="text" name="keterangan" value="<?php echo $wahana->keterangan; ?>" placeholder="keterangan">
                    <input type="file" name="gambar"><br>
                    <img src="<?php echo base_url() ?>/upload/<?php echo $wahana->gambar ?>" width="100" alt="" name="gambar">
                    <input type="submit" value="update">
                    <?php echo form_close() ?> -->
                    <?php echo form_open_multipart(); ?>
                    <form method="post" action="<?php echo base_url() . 'wahana/update' ?>">
                        <div class="for-group">
                            <label>Nama Wahana</label>
                            <input type="text" name="nama" class="form-control" value="<?php echo $wahana->nama ?>">
                        </div>
                        <div class="form-group">
                            <label for="gambar">Upload Gambar (jpg/png)</label>
                            <input type="file" name="gambar"><br>
                            <img src="<?php echo base_url() ?>/upload/<?php echo $wahana->gambar ?>" width="100" alt="" name="gambar">
                        </div>
                        <div class="row">
                            <div class="col-sm">
                                <!-- textarea -->
                                <div class="form-group">
                                    <label>Masukkan Keterangan</label>
                                    <textarea id="keterangan" name="keterangan" class="form-control" rows="6" placeholder="keterangan" required value="<?php echo $wahana->keterangan ?>">
                                <?php if (isset($keterangan)) {
                                    echo $keterangan;
                                } ?>
                                </textarea>
                                    <?= form_error('keterangan', '<small class="text-danger pl-3">', '</small>');  ?>
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success" value="update">Simpan</button>
                    </form>
                    <?php echo form_close() ?>
                </div>
            </div>
            <!-- /.card-body -->
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<script>
    tinymce.init({
        selector: '#keterangan'
    });
</script>