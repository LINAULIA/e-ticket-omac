<link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
<style type="text/css">
    .jumbotron {
        background-image: url(<?php echo base_url("assets/img/bg/jumbotron.jpg"); ?>);
        background-repeat: no-repeat;
        background-size: cover;
        text-align: center;
        max-width: 100%;
        height: 20px;
        margin-top: 0%;
        padding-bottom: 450px;
        margin-bottom: -3px;
    }

    .pemesanan {
        background-color: #4ac8ee;
    }

    .p {
        text-align: left;
    }
</style>
<!-- <section class="jumbotron jumbotron-fluid">
    <div class="container">
        <br>
        <h1 class="display-4 mt-5">PESAN TIKETMU SEKARANG!!</h1>
        <p class="lead">Kini kamu dan keluarga bisa pesan tiket masuk OMAC secara online – tidak perlu repot antri!</p>
    </div>
</section> -->
<section class="pemesanan">
    <br>
    <br>
    <br>
    <div class="card col-sm-10 mx-auto">
        <div class="card-body ">
            <form id="formD" name="formD" action="<?php echo base_url() . 'home/simpanpemesanan'; ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name='tiket_pemesan' value='<?= $_GET['p'] ?>'>
                <h4 class="text-center">Pesan Tiket Wisata</h4>
                <div class="data1" id="data1">

                    <div class="date col-md-4">
                        <p style="font-weight:normal; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">Masukkan Tanggal: <input required type="date" name="tanggal" id="tanggal" class="form-control" min="<?= date('Y-m-d') ?>" value='<?= date('Y-m-d') ?>' autocomplete=off>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <p style="font-weight:normal; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">Harga :</p>
                            <input required type="text" class="form-control" id="harga" value="15000" readonly="readonly">
                        </div>
                        <div class="jml col-md-4">
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
                        <button type="button" class="btn btn-primary btn-block col-sm-3 mt-3 mx-auto" id="button">Selanjutnya</button>

                    </div>
                </div>
                <div class="data2" id="data2">
                    <div class="row">
                        <div class="col-md-3 mt-3">
                            <p style="font-weight:normal; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">Nama Pemesan</p>
                            <input required type="text" class="form-control" id="nama_pemesan" value="" name="nama_pemesan" placeholder="Masukkan Nama">
                        </div>
                        <div class="col-md-6 mt-3">
                            <p style="font-weight:normal; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">No HP</p>
                            <input required type="text" class="form-control" id="no_telepon" value="" name="no_telepon" placeholder="Masukkan No HP">
                        </div>
                        <div class="col-md-6 mt-3">
                            <p style="font-weight:normal; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">Email</p>
                            <input required type="text" class="form-control" id="email" value="" name="email" placeholder="Masukkan Email">
                        </div>
                        <div class="col-md-6 mt-3">
                            <p style="font-weight:normal; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">Alamat</p>
                            <input required type="text" class="form-control" id="alamat" value="" name="alamat" placeholder="Masukkan Alamat">
                        </div>
                        <button type="submit" class="btn btn-danger btn-block col-lg-3 mt-3 mx-auto" id="button2">Pesan</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
    <!-- <div class="container">
		<hr>
		<?php if (!isset($pemesan)) : ?>
			
		<?php else : ?>
			
		<div class="table-responsive">
			<table class="table table-hover table-bordered">
				<thead class="bg-primary text-white text-center">
					<tr>
						<th>No</th>
						<th>Tanggal Pemesanan</th>
						<th>Jumlah Tiket</th>
						<th>Total</th>
						<th>Nama Pemesan</th>
						<th>No HP</th>
						<th>Email</th>
						<th>Alamat</th>
					</tr>
				</thead>
				<tbody class="text-center">

					<?php $no = 1; ?>
					<?php foreach ($tiket as $tk) : ?>
					<tr>
						<td><?= $no++ ?></td>
						<td><?= $tk->nama_kereta ?></td>
						<td><?php $date = date_create($tk->tgl_berangkat);
                            echo date_format($date, "d-m-Y h:i:s");  ?></td>
						<td><?php $date = date_create($tk->tgl_sampai);
                            echo date_format($date, "d-m-Y h:i:s"); ?></td>
						<td>
							<a class="btn btn-primary" href="<?= base_url('pesan/' . $tk->id . '?p=' . $penumpang) ?>">Pesan</a>
						</td>
					</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>

		<?php endif; ?>

	</div> -->
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
    </script>