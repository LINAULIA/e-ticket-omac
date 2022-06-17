<!-- Header Start -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 d-none d-lg-block" style="background-color:navy;">
            <a href="" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                <img class="logo animate__rubberBand" height="60px" margin-top="100px" width="300px" src="<?php echo base_url(); ?>assets/nova/images/logo1.png" alt="" />
            </a>
        </div>
        <div class="col-lg-9">
            <div class="row d-none d-lg-flex " style="background-color:#0375B4;">
                <div class="col-lg-7 text-left text-white">
                    <div class="h-100 d-inline-flex align-items-center  border-primary py-2 px-3">

                    </div>
                    <div class="h-100 d-inline-flex align-items-center py-2 px-2">

                    </div>
                </div>
                <div class="col-lg-5 text-right">
                    <div class="d-inline-flex align-items-center pr-2">

                    </div>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg bg-white navbar-light p-0">
                <a href="" class="navbar-brand d-block d-lg-none">
                    <img class="logo animate__rubberBand" height="60px" margin-top="100px" width="150px" src="<?php echo base_url(); ?>assets/nova/images/logo1.png" alt="" />
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="<?= base_url('home/home') ?>" class="nav-item nav-link active">Beranda</a>
                        <a href="<?= base_url('home/home') ?>" class="nav-item nav-link">Wahana</a>
                        <a href="<?= base_url('home/home') ?>" class="nav-item nav-link">Kuliner</a>
                        <a href="<?= base_url('home/home') ?>" class="nav-item nav-link">Fasilitas</a>
                        <a href="<?= base_url('home/home') ?>" class="nav-item nav-link">Tiket</a>
                        <a href="<?= base_url('home/home') ?>" class="nav-item nav-link">Tentang</a>
                        <a href="<?= base_url('home/home') ?>" class="nav-item nav-link">Berita</a>
                        <a href="<?= base_url('home/home') ?>" class="nav-item nav-link">Kontak</a>
                    </div>
                    <a href="<?= base_url('auth') ?>" class="btn btn-primary mr-3 d-none d-lg-block">Login</a>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- Header End -->