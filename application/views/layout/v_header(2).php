<!--Header-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<style type="text/css">
    .nav-link {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        display: block;
        width: 100px;
        height: 40px;
        font-size: 18px;
        font-family: sans-serif;
        font-style: bold;
        text-decoration: none;
        color: #333;
        border: 2px solid #333;
        letter-spacing: 2px;
        text-align: right;
        position: relative;
        transition: all .35s;
        background-color: aliceblue;
    }

    .nav-link span {
        position: relative;
        z-index: 2;
    }

    .nav-link:after {
        position: absolute;
        content: "";
        top: 0;
        left: 0;
        width: 0;
        height: 100%;
        background: teal;
        transition: all .35s;
    }

    .nav-link:hover {
        color: #fff;
    }

    .nav-link:hover:after {
        width: 100%;
    }

    .logo {
        animation: rubberBand;
        /* referring directly to the animation's @keyframe declaration */
        animation-duration: 5s;
        /* don't forget to set a duration! */
    }

    .navbar {
        background: rgb(28, 58, 80);
        background: linear-gradient(90deg, rgba(28, 58, 80, 1) 8%, rgba(67, 53, 97, 1) 100%);
    }
</style>
<header class="navbar ">
    <nav class="navbar navbar-expand-lg shadow-lg fixed-top">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <img class="logo animate__rubberBand" height="60px" margin-top="100px" width="150px" src="<?php echo base_url(); ?>assets/nova/images/logo1.png" alt="" />
            <!-- <a class="navbar-brand" href="#">Lina Aulia</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> -->
            <div class="collapse navbar-collapse collapse pull-right" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active fs-6 fw-normal" aria-current="page" href="<?= base_url('home') ?>"><span>Beranda</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fs-6 fw-normal" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><span>Wahana</span></a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6 fw-normal" href="<?= base_url('home/kuliner') ?>"><span>Kuliner</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6 fw-normal" href="<?= base_url('home/tiket') ?>"><span>Tiket</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6 fw-normal" href="<?= base_url('home') ?>"><span>Tentang</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6 fw-normal" href="<?= base_url('home') ?>"><span>Kontak</span></a>
                    </li>
                    <li class="nav-item login mt-2 px-2">
                        <a href="<?= base_url('auth') ?>"><i class="fa-solid fa-lock"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>


<!-- <div class="navbar-inner"> -->
<!-- <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <img class="p" height="40px" margin-top="100px" width="150px" src="<?php echo base_url(); ?>assets/nova/images/logo1.png" alt="" />
            <div class="nav-collapse collapse pull-right">
                <ul class="nav">
                    <li class="active"><a href="<?= base_url('home') ?>">Beranda</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hiburan <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="career.html">Career</a></li>
                            <li><a href="blog-item.html">Blog Single</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="pricing.html">Pricing</a></li>
                            <li><a href="404.html">404</a></li>
                            <li><a href="typography.html">Typography</a></li>
                            <li><a href="registration.html">Registration</a></li>
                            <li class="divider"></li>
                            <li><a href="privacy.html">Privacy Policy</a></li>
                            <li><a href="terms.html">Terms of Use</a></li>
                        </ul>
                    </li>
                    <li><a href="<?= base_url('home/kuliner') ?>">Kuliner</a></li>
                    <li><a href="<?= base_url('home/tiket') ?>">Tiket</a></li>
                    <li><a href="about-us.html">About Us</a></li>
                    <li><a href="contact-us.html">Contact</a></li>
                    <li class="login">
                        <a data-toggle="modal" href="<?= base_url('auth') ?>"><i class="icon-lock"></i></a>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse 
        </div>
    </div> -->