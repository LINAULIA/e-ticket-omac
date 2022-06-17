<script src="<?php echo base_url(); ?>assets/sweetalert/sweetalert2.all.min.js"></script>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Pengunjung</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Data Pengunjung</li>
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

                <button class="btn btn-primary" data-toggle="modal" data-target="#modaltambahpengunjung"><i class="fas fa-plus fa-fw"></i>Tambah Data Baru</button>
                <!-- <?php if ($this->session->flashdata('success')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $this->session->flashdata('success'); ?>
                    </div>
                <?php endif; ?> -->
                <div class="card-tools">
                    </button>
                </div>
            </div>
            <div class="card-body">
                <a href="<?= base_url('Cetakpdf') ?>" class="btn btn-primary"><i class="fa-solid fa-print"></i></a>
                <table id="example" class="table table-striped table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Tiket</th>
                            <th>Tanggal</th>
                            <th>QR Code</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $id = 1;
                        foreach ($pembayaran_tunai as $s) { ?>
                            <tr>
                                <td><?= $id++; ?></td>
                                <td><?= $s->nomor_tiket ?></td>
                                <td><?= $s->tanggal ?></td>
                                <td>
                                    <a href="<?= base_url() . 'index.php/qrcode/edit/' . $s->qrcode; ?>">
                                        <img style="width: 100px;" src="<?php echo base_url() . 'assets/qrpemesan/' . $s->qrcode; ?>"></a>
                                </td>
                                <td>
                                    <?php echo anchor('mahasiswa/edit/' . $s->id, '<div class="btn btn-sm btn-secondary btn-sm"><i class="fas fa-edit"></i></div>') ?>
                                    <?php echo anchor('mahasiswa/delete/' . $s->id, '<div class="btn btn-sm btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?>
                                </td>
                            </tr>
                        <?php } ?>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Kode Pengunjung</th>
                            <th>Tanggal</th>
                            <th>QR Code</th>
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

<!-- Modal Tambah Pengunjung-->
<div class="modal fade" id="modaltambahpengunjung" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content bg-info">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLongTitle">Tambah Data Pengunjung</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() . 'kasir/htm'; ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nama">Kode Pengunjung</label>
                        <input required type="text" class="form-control" id="nama" name="nomor_tiket" value='<?= $no_tiket ?>' readonly="readonly">
                    </div>

                    <div class="form-group">
                        <label for="tanggal">Tanggal Pembelian</label>
                        <input required type="date" name="tanggal" id="tanggal" class="form-control" min="<?= date('Y-m-d') ?>" value='<?= date('Y-m-d') ?>' autocomplete=off>
                    </div>
                    <div class="form-group">
                        <p style="font-weight:normal; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">Harga :</p>
                        <input required type="text" class="form-control" id="harga" value="15000" readonly="readonly">
                    </div>
                    <div class="form-group">
                        <p style="font-weight:normal; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">Jumlah : </p>
                        <select name="jumlah" id="jumlah" class="form-control">
                            <?php for ($i = 0; $i <= 100; $i++) : ?>
                                <option value="<?= $i ?>"><?= $i ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <p style="font-weight:normal; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">Total :</p>
                        <input type="text" id="total" name="total_pembayaran" class="form-control" value="" readonly="readonly">
                    </div>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success" value="OK">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <!-- /.Modal tambah pengunjung -->
</div>
<!-- /.modal-dialog -->
</div>
<script type="text/javascript" language="Javascript">
    $(document).on('click', '#harga,#jumlah', function() {
        var val = $('#harga').val();
        var jum = $('#jumlah').val();
        var total = val * jum
        $('#total').val(total)
    });

    $(document).ready(function() {
        $("#data2").hide();
        $("#button").click(function() {
            $("#data1").hide(1000);
            $("#data2").show(1000);
        });
    });
    Swal.fire({
        title: 'Apakah anda yakin?',
        showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: 'ya',
        denyButtonText: `jangan dulu`,
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            Swal.fire(isi, '', 'success')
        } else if (result.isDenied) {
            Swal.fire('Changes are not saved', '', 'info')
        }
    })
</script>