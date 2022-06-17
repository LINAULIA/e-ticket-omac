<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<style>
    .alert-success {
        background-color: #9EC9E2;
        color: black;
        font-weight: bold;
    }

    /* Text Glitch (Grunge) Effect by igniel.com */
    .ignielGlitch {
        color: #000;
        position: relative;
        animation: ignielGlitch1 2.5s infinite;
        -moz-animation: ignielGlitch1 2.5s infinite;
        -webkit-animation: ignielGlitch1 2.5s infinite;
        -o-animation: ignielGlitch1 2.5s infinite;
    }

    .ignielGlitch:before,
    .ignielGlitch:after {
        content: attr(data-text);
        position: absolute;
        left: 0px;
        right: 0px;
        top: 0px;
        bottom: 0px;
    }

    .ignielGlitch:before {
        color: #000;
        animation: ignielGlitch2 2.5s infinite;
        -moz-animation: ignielGlitch2 2.5s infinite;
        -webkit-animation: ignielGlitch2 2.5s infinite;
        -o-animation: ignielGlitch2 2.5s infinite;
    }

    .ignielGlitch:after {
        color: #000;
        animation: ignielGlitch3 2.5s infinite;
        -moz-animation: ignielGlitch3 2.5s infinite;
        -webkit-animation: ignielGlitch3 2.5s infinite;
        -o-animation: ignielGlitch3 2.5s infinite;
    }

    @keyframes ignielGlitch1 {
        0% {
            transform: none;
            opacity: 1;
        }

        7% {
            transform: skew(-0.5deg, -0.9deg);
            opacity: 0.75;
        }

        10% {
            transform: none;
            opacity: 1;
        }

        27% {
            transform: none;
            opacity: 1;
        }

        30% {
            transform: skew(0.8deg, -0.1deg);
            opacity: 0.75;
        }

        35% {
            transform: none;
            opacity: 1;
        }

        52% {
            transform: none;
            opacity: 1;
        }

        55% {
            transform: skew(-1deg, 0.2deg);
            opacity: 0.75;
        }

        50% {
            transform: none;
            opacity: 1;
        }

        72% {
            transform: none;
            opacity: 1;
        }

        75% {
            transform: skew(0.4deg, 1deg);
            opacity: 0.75;
        }

        80% {
            transform: none;
            opacity: 1;
        }

        100% {
            transform: none;
            opacity: 1;
        }
    }

    @-webkit-keyframes ignielGlitch1 {
        0% {
            transform: none;
            opacity: 1;
        }

        7% {
            transform: skew(-0.5deg, -0.9deg);
            opacity: 0.75;
        }

        10% {
            transform: none;
            opacity: 1;
        }

        27% {
            transform: none;
            opacity: 1;
        }

        30% {
            transform: skew(0.8deg, -0.1deg);
            opacity: 0.75;
        }

        35% {
            transform: none;
            opacity: 1;
        }

        52% {
            transform: none;
            opacity: 1;
        }

        55% {
            transform: skew(-1deg, 0.2deg);
            opacity: 0.75;
        }

        50% {
            transform: none;
            opacity: 1;
        }

        72% {
            transform: none;
            opacity: 1;
        }

        75% {
            transform: skew(0.4deg, 1deg);
            opacity: 0.75;
        }

        80% {
            transform: none;
            opacity: 1;
        }

        100% {
            transform: none;
            opacity: 1;
        }
    }

    @keyframes ignielGlitch2 {
        0% {
            transform: none;
            opacity: 0.25;
        }

        7% {
            transform: translate(-2px, -3px);
            opacity: 0.5;
        }

        10% {
            transform: none;
            opacity: 0.25;
        }

        27% {
            transform: none;
            opacity: 0.25;
        }

        30% {
            transform: translate(-5px, -2px);
            opacity: 0.5;
        }

        35% {
            transform: none;
            opacity: 0.25;
        }

        52% {
            transform: none;
            opacity: 0.25;
        }

        55% {
            transform: translate(-5px, -1px);
            opacity: 0.5;
        }

        50% {
            transform: none;
            opacity: 0.25;
        }

        72% {
            transform: none;
            opacity: 0.25;
        }

        75% {
            transform: translate(-2px, -6px);
            opacity: 0.5;
        }

        80% {
            transform: none;
            opacity: 0.25;
        }

        100% {
            transform: none;
            opacity: 0.25;
        }
    }

    @-webkit-keyframes ignielGlitch2 {
        0% {
            transform: none;
            opacity: 0.25;
        }

        7% {
            transform: translate(-2px, -3px);
            opacity: 0.5;
        }

        10% {
            transform: none;
            opacity: 0.25;
        }

        27% {
            transform: none;
            opacity: 0.25;
        }

        30% {
            transform: translate(-5px, -2px);
            opacity: 0.5;
        }

        35% {
            transform: none;
            opacity: 0.25;
        }

        52% {
            transform: none;
            opacity: 0.25;
        }

        55% {
            transform: translate(-5px, -1px);
            opacity: 0.5;
        }

        50% {
            transform: none;
            opacity: 0.25;
        }

        72% {
            transform: none;
            opacity: 0.25;
        }

        75% {
            transform: translate(-2px, -6px);
            opacity: 0.5;
        }

        80% {
            transform: none;
            opacity: 0.25;
        }

        100% {
            transform: none;
            opacity: 0.25;
        }
    }

    @keyframes ignielGlitch3 {
        0% {
            transform: none;
            opacity: 0.25;
        }

        7% {
            transform: translate(2px, 3px);
            opacity: 0.5;
        }

        10% {
            transform: none;
            opacity: 0.25;
        }

        27% {
            transform: none;
            opacity: 0.25;
        }

        30% {
            transform: translate(5px, 2px);
            opacity: 0.5;
        }

        35% {
            transform: none;
            opacity: 0.25;
        }

        52% {
            transform: none;
            opacity: 0.25;
        }

        55% {
            transform: translate(5px, 1px);
            opacity: 0.5;
        }

        50% {
            transform: none;
            opacity: 0.25;
        }

        72% {
            transform: none;
            opacity: 0.25;
        }

        75% {
            transform: translate(2px, 6px);
            opacity: 0.5;
        }

        80% {
            transform: none;
            opacity: 0.25;
        }

        100% {
            transform: none;
            opacity: 0.25;
        }
    }

    @-webkit-keyframes ignielGlitch3 {
        0% {
            transform: none;
            opacity: 0.25;
        }

        7% {
            transform: translate(2px, 3px);
            opacity: 0.5;
        }

        10% {
            transform: none;
            opacity: 0.25;
        }

        27% {
            transform: none;
            opacity: 0.25;
        }

        30% {
            transform: translate(5px, 2px);
            opacity: 0.5;
        }

        35% {
            transform: none;
            opacity: 0.25;
        }

        52% {
            transform: none;
            opacity: 0.25;
        }

        55% {
            transform: translate(5px, 1px);
            opacity: 0.5;
        }

        50% {
            transform: none;
            opacity: 0.25;
        }

        72% {
            transform: none;
            opacity: 0.25;
        }

        75% {
            transform: translate(2px, 6px);
            opacity: 0.5;
        }

        80% {
            transform: none;
            opacity: 0.25;
        }

        100% {
            transform: none;
            opacity: 0.25;
        }
    }
</style>
<?php if ($this->session->flashdata('no_pembayaran') === null) : ?>

    <div class='container-fluid'>
        <div class='row justify-content-center my-3'>
            <div class='col-md-5 '>
                <div class='alert alert-danger'>
                    <h4>Anda Telah MeRefresh Halaman !!</h4>
                    <p>Silahkan Lakukan Pemesanan Kembali Jika Belum mendapat Kode Pembayaran</p>
                </div>
            </div>
        </div>
    </div>

<?php else : ?>

    <div class='container-fluid' style="background-color:#FFFFFF; margin-top:-15px">
        <div class='row justify-content-center my-3'>
            <div class='col-md-5 '>
                <br>
                <br>
                <!-- <div class='alert' style="background-color:#E086A6">
                    <h4>PERINGATAN !! <br> JANGAN REFRESH HALAMAN INI!</h4>
                    <p style="color:black; font-weight:bold;">Untuk Menghindari Kegagalan Sistem.</p>
                </div> -->
                <div class="card mx-auto  mb-3">
                    <div class="card-header" style="background-color:#9EC9E2">
                        <div class="row">
                            <div class="col-sm-6 text-center">
                                <h6 style="color:black;">Total yang harus dibayar:</h6>
                                <h2 style="color:black;">Rp.<?= $this->session->flashdata('total_pembayaran') ?></h2>
                            </div>
                            <div class="col-sm-6 text-center" style="color:#FFFFFF;">
                                <h6 style="color:black;">Kode Pembayaran Anda:</h6>
                                <h2 style="color:black;" class="copybtn"><?= $this->session->flashdata('no_pembayaran') ?> <button onclick="handleCopyTextBCAFromParagraph()"><i class="fa-regular fa-copy" id="copyBtn"></i></button></h2>
                                <h2></h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-body" style="background-color:#DEE6ED;">
                        <?= $this->session->flashdata('message'); ?>
                        <div class="row mb-3">
                            <div class="col-sm-6">
                                <img class="img-fluid" style="max-height: 80px;" src="<?= base_url('assets/img/bank/bank bca.jpg') ?>" alt="">
                            </div>
                            <div class="col-sm-6 fs-2 mt-3 ">
                                <h4 style="font-weight:bold; color:black">2801868888</h4>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-sm-6 ">
                                <img class="img-fluid" style="max-height: 80px;" src="<?= base_url('assets/img/bank/bank bri.jpg') ?>" alt="">
                            </div>
                            <div class="col-sm-6 fs-2 mt-3">
                                <h4 style="font-weight:bold; color:black">110701000319563</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 mt-3">
                                <img class="img-fluid" style="max-height: 80px;" src="<?= base_url('assets/img/bank/bank bni.jpg') ?>" alt="">
                            </div>
                            <div class="col-sm-6 fs-2 mt-3">
                                <h4 style="font-weight:bold; color:black">2315188888</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 mt-3">
                                <img class="img-fluid" style="max-height: 80px;" src="<?= base_url('assets/img/bank/bank mandiri.png') ?>" alt="">
                            </div>
                            <div class="col-sm-6 fs-2 mt-3">
                                <h4 style="font-weight:bold; color:black">1300051888884</h4>
                            </div>
                        </div>
                        <center>
                            <h5>a/n <b style="color:black">PT.Omacklaten</b></h5>
                        </center>
                        <hr>

                        <center>
                            <div class="ignielGlitch">
                                <h4 style="color:black">*Jika Sudah Transfer Lakukan Konfirmasi Pembayaran pada link dibawah ini
                            </div>
                            <a target="blank" href="<?= base_url('home/keHalamanKonfirmasi') ?>">
                                <h4 style="color:red; font-weight:bold">Cek Pembayaran</h4>
                            </a>
                            </h4>
                        </center>

                    </div>
                    <div class="card-footer text-center text-light" style="background-color: #DEE6ED;">
                        <h5>TERIMA KASIH :)</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>


<script>
    function handleCopyTextBCAFromParagraph() {
        const cb = navigator.clipboard;
        const paragraph = document.querySelector('.copybtn');
        cb.writeText(paragraph.innerText).then(() => alert('Text copied'));
    }
</script>