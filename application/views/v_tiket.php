<style type="text/css">
    .jumbotron {
        background-image: url(<?php echo base_url("assets/img/bg/jumbotron.jpg"); ?>);
        background-repeat: no-repeat;
        background-size: cover;
        text-align: center;
        max-width: 100%;
        height: 20px;
        margin-top: -3%;
        padding-bottom: 450px;
        margin-bottom: -3px;
    }

    .tiket {
        margin: 10px 10px;
    }

    .btps {
        right: 59px;
        top: 839px;
        background-color: khaki;
        padding: 10px 100px;
        display: inline-block;
    }

    .btcp {
        position: absolute;
        right: 59px;
        top: 975px;
        padding: 10px 100px;
        background-color: khaki;
    }
</style>
<section class="jumbotron jumbotron-fluid">
    <div class="container">
        <br>
        <h1 class="display-4 mt-5">PESAN TIKETMU SEKARANG!!</h1>
        <p class="lead">Kini kamu dan keluarga bisa pesan tiket masuk OMAC secara online – tidak perlu repot antri!</p>
    </div>
</section>
<section class="tiket ">
    <div class="center mb-1">
        <h3 style="font-family: 'Shadows Into Light Two', cursive; text-decoration:underline">INFORMASI TIKETING</h3>
    </div>
    <div class="card-body col-lg-12 ">
        <img class="img-fluid img-thumbnail" src="<?php echo base_url("assets/img/tiketomac.png"); ?>" alt="">
    </div>
    <a href="<?= base_url('home/pemesanan') ?>"><button type="button" class="btps btn btn-warning btn-lg" style="position: absolute;">Pesan Sekarang</button></a>
    <a href="<?= base_url('home/keHalamanKonfirmasi') ?>"><button type="button" class="btcp btn btn-warning btn-lg">Cek Pembayaran</button></a>
</section>