<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<style type="text/css">
    .notiket {
        color: darkgoldenrod;
        font-size: large;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        font-weight: bolder;
    }
</style>

<div class='container-fluid'>
    <div class='row justify-content-center my-3'>
        <div class='col-md-5 '>
            <div class="card mx-auto  mb-3">
                <div class="card-header" style="background-color:navy;">

                </div>
                <div class="card-body ">
                    <?= $this->session->flashdata('message'); ?>
                    <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12">
                                <center>
                                    <div class="card bg-light col-sm-6 justify-content-center">
                                        <img style="width: 300px; " src="<?php echo base_url('assets/qrpemesan/' . $pemesan->qr_code); ?>" alt="">
                                    </div>
                                </center>
                                <center>
                                    <h2 class="mt-3"><b><?php echo $pemesan->nomor_tiket; ?></b></h2>
                                    <h6>Tanggal Kedatangan : <?php echo $pemesan->tanggal; ?></h6>
                                    <a>
                                        <h6> <?php echo $pemesan->total_pembayaran; ?> | <?php echo $pemesan->jumlah; ?> Orang</h6>
                                    </a>
                                </center>

                            </div>
                        </div>
                    </div>

                    <hr>
                    <center>
                        <p>SELALU PATUHI PROTOKOL KESEHATAN DENGAN MEMAKAI MASKER DAN MENJAGA JARAK SAAT KUNJUNGAN
                        </p>
                    </center>
                </div>
                <div class="card-footer text-center" style="background-color: navy; ">
                    <h5 style="color:white;">TERIMA KASIH :)</h5>
                </div>
            </div>
        </div>
    </div>
</div>



<script>
    function handleCopyTextBCAFromParagraph() {
        const cb = navigator.clipboard;
        const paragraph = document.querySelector('p');
        cb.writeText(paragraph.innerText).then(() => alert('Text copied'));
    }
</script>