<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/nova/images/logo1.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light+Two&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo base_url(); ?>template/klean/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>template/klean/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url(); ?>template/klean/css/style.css" rel="stylesheet">

    <!-- animated -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        .logo {
            animation: rubberBand;
            /* referring directly to the animation's @keyframe declaration */
            animation-duration: 5s;
            /* don't forget to set a duration! */
        }

        .garisslider {
            border: 6px solid yellow;
            border-radius: 1px;

        }

        .garisslider2 {
            border: 5px solid yellow;
            border-radius: 1px;
            background-color: yellow;

        }

        .gariscontent {
            border: 5px solid yellow;
            border-radius: 1px;
            background-color: yellow;
        }

        .portfolio-item {
            column-gap: 20px;
        }

        .wahana {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url(<?php echo base_url("assets/img/bg/bghome2.jpg"); ?>) no-repeat center center;
            background-size: cover;
        }

        .bg-tiket {
            background: url(<?php echo base_url("assets/img/tiketomac2.png"); ?>), no-repeat center center;
            background-size: cover;
        }
    </style>
</head>

<body>
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
                        <div class="h-100 d-inline-flex align-items-center border-primary py-2 px-3">

                            <small></small>
                        </div>
                        <div class="h-100 d-inline-flex align-items-center py-2 px-2">

                            <small></small>
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
                            <a href="#" class="nav-item nav-link active">Beranda</a>
                            <a href="#wahana" class="nav-item nav-link">Wahana</a>
                            <a href="#kuliner" class="nav-item nav-link">Kuliner</a>
                            <a href="#fasilitas" class="nav-item nav-link">Fasilitas</a>
                            <a href="#tiket" class="nav-item nav-link">Tiket</a>
                            <a href="#about" class="nav-item nav-link">Tentang</a>
                            <a href="#berita" class="nav-item nav-link">Berita</a>
                            <a href="#footer" class="nav-item nav-link">Kontak</a>
                        </div>
                        <a href="<?= base_url('auth') ?>" class="btn btn-primary mr-3 d-none d-lg-block">Login</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0" data-aos="zoom-in" data-aos-duration="2000">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                <li data-target="#header-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid" src="<?php echo base_url(); ?>assets/nova/images/sample/slider/omac1.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h3 class="display-3 text-white mb-md-4 text-center">Selamat Datang di</h3>
                            <h3 class="display-4 text-white mb-md-4 text-center">Obyek Mata Air Cokro</h3>
                            <h3 class="display-4 text-white mb-md-4 text-center">(OMAC)</h3>
                            <center>
                                <a href="<?= base_url('home/pemesanan') ?>" class="btn btn-primary">Pesan Tiketmu Sekarang</a>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="<?php echo base_url(); ?>assets/nova/images/sample/slider/omac2.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h1 class="display-4 text-white mb-md-4">Wisata Air Kekinian, Murah, yang Lengkap di Kabupaten Klaten</h1>
                            <!-- <a href="" class="btn btn-primary">Get A Quote</a> -->
                            <hr class="garisslider2">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="<?php echo base_url(); ?>assets/nova/images/sample/slider/omac3.jpeg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h1 class="display-4 text-white mb-md-4">Rasakan Sensasi Berenang di Kolam Sebening Kaca</h1>
                            <hr class="garisslider">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Contact Info Start -->

    <!-- Contact Info End -->


    <!-- About Start -->
    <!-- <div class="container-fluid py-5 mb-5"> -->
    <section id="about" style="margin-bottom:61px;">
        <div class="container-fluid pb-5 contact-info">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <hr class="gariscontent mt-0 pt-0">
                </div>
            </div>
        </div>
        <div class="container" data-aos="fade-up" data-aos-duration="2000">
            <div class="center">
                <h3 style="font-family: 'Shadows Into Light Two', cursive; text-decoration:underline; text-shadow: 1px 1px 2px black, 0 0 1em grey, 0 0 0.2em grey" class="text-center mb-4">Tentang Kami</h3>
            </div>
            <div class="row ">
                <div class="col-lg-6">
                    <center>
                        <img src="<?php echo base_url(); ?>assets/img/aboutus.jpg" alt="" style="max-width: 70%; height:auto; box-shadow: 10px 10px 5px #ccc;" class="img-thumbnail mb-3" data-aos="fade-right" data-aos-duration="2000">
                    </center>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="2000">

                    <h1 class="mb-4 text-center">Obyek Mata Air Cokro (OMAC)</h1>
                    <hr>
                    <h5 class="text-muted font-weight-normal mb-3">Obyek Wisata Mata Air Cokro atau biasa dikenal dengan Umbul Cokro memiliki luas ± 15.000 m2.</h5>
                    <p style="text-align: justify;
  text-justify: inter-word;">Mata air ini lebih sebelumnya lebih dikenal dengan nama Umbul Ingas. Diberi nama demikian karena mata air ini berada diantara pohon ingas yang berukuran besar. Pohon ini pula yang memberikan kesan rindang dan memberikan hawa sejuk pada lokasi tersebut. Berbeda dengan objek wisata mata air lainnya, Mata Air Cokro menawarkan berbagai wahana yang dapat menambah keseruan liburan para wisatawan. Wahana yang tersedia diantaranya Waterboom Cokro Tulung, Water Slide, Snorkeling, River Tubing, Terapi Ikan, Mandi Bola dan masih banyak lagi. Pengunjung dikenakan tarif masuk sebesar Rp. 15.000 per orang.</p>
                    <div class="d-flex align-items-center pt-4">
                    </div>
                </div>
            </div>
    </section>
    <!-- About End -->
    <!-- Portfolio Start -->
    <section>
        <hr class="gariscontent mt-0 pt-0 mb-0" id="wahana">
        <div class="wahana container-fluid " style="box-shadow: 10px 10px 5px #fff;">
            <div class="container py-5 " data-aos="fade-up" data-aos-duration="2000">
                <div class="center mb-4">
                    <h3 style="font-family: 'Shadows Into Light Two', cursive; text-decoration:underline; color:#fff; text-shadow: 1px 1px 2px black, 0 0 1em blue, 0 0 0.2em yellow;" class="text-center ">Wahana</h3>
                </div>
                <div class="row portfolio-container">
                    <?php $id = 1;

                    foreach ($wahana as $s) {

                    ?>
                        <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item">
                            <div class="position-relative overflow-hidden">
                                <div class="portfolio-img " data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                                    <img class="img-fluid w-100" src="<?php echo base_url('/upload/' . $s->gambar); ?>" alt="">
                                </div>
                                <div class="portfolio-text bg-primary">
                                    <h4 class="font-weight-bold mb-4"><?= $s->nama ?></h4>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a class="btn btn-sm btn-secondary m-1" href="">
                                            <i class="fa fa-link"></i>
                                        </a>
                                        <a class="btn btn-sm btn-secondary m-1" href="<?php echo base_url('/upload/' . $s->gambar); ?>" data-lightbox="portfolio">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php $id++;
                    } ?>
                </div>
            </div>
        </div>
        <hr class="gariscontent mt-0 pt-0 mb-0">
    </section>

    <!-- Portfolio End -->

    <!-- Kuliner Start -->
    <div class="container-fluid " id="kuliner">
        <div class="container" data-aos="fade-up" data-aos-duration="3000">
            <div class="center">
                <h3 style="font-family: 'Shadows Into Light Two', cursive; text-decoration:underline; text-shadow: 1px 1px 2px black, 0 0 1em grey, 0 0 0.2em grey" class="text-center mb-4 mt-4">Kuliner</h3>
            </div>
            <div class="row align-items-end mb-4">
                <div class="col-lg-12">
                    <h1 class="mb-3">Kulineran Di Omac Yukk...</h1>
                </div>
                <div class="col-lg-12">
                    <h4 class="font-weight-normal text-muted mb-3 text-justify">Habis seru-seruan berenang, pasti laper dong? nah buat kalian yang laper di Omac banyak stand-stand kuliner yang bisa kalian kunjungi loh, seperti stand jajanan pasar, aneka bakaran ikan, gorengan, serta menu menu lain yang tentunya lezat yang mengenyangkan. </h4>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel team-carousel position-relative">
                        <?php $id = 1;

                        foreach ($kuliner as $s) {

                        ?>
                            <div class="team d-flex flex-column text-center rounded overflow-hidden">
                                <div class="position-relative">
                                    <div class="team-img">
                                        <img class="img-fluid w-100" src="<?php echo base_url('/upload/' . $s->gambar); ?>" alt="">
                                    </div>
                                    <div class="team-social d-flex flex-column align-items-center justify-content-center bg-primary">
                                        <!-- <a class="btn btn-secondary btn-social mb-2" href="#"><i class="fab fa-twitter"></i></a>
                                        <a class="btn btn-secondary btn-social mb-2" href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a class="btn btn-secondary btn-social" href="#"><i class="fab fa-linkedin-in"></i></a> -->
                                    </div>
                                </div>
                                <div class="d-flex flex-column bg-primary text-center py-4">
                                    <h5 class="font-weight-bold"><?= $s->nama_kuliner ?></h5>
                                    <!-- <p class="text-white m-0">Designation</p> -->
                                </div>
                            </div>
                        <?php $id++;
                        } ?>
                    </div>

                </div>
            </div>
        </div>
        <!-- Kuliner End -->

        <!-- Fasilitas Start -->

        <section style="background-color:midnightblue;color:#fff; height: 100%;
  width: 100%; " class="mt-4" id="fasilitas">
            <hr class="gariscontent mt-0 pt-0 mb-0">
            <div class="container" data-aos="fade-up" data-aos-duration="2000">
                <div class="center mb-5 pt-5">
                    <h3 style="font-family: 'Shadows Into Light Two', cursive; text-decoration:underline; color:#fff; text-shadow: 1px 1px 2px black, 0 0 1em blue, 0 0 0.2em yellow;" class="text-center ">Fasilitas</h3>
                </div>
                <div class="row text-center" data-aos="fade-up" data-aos-duration="3000">
                    <div class="col-md-4 mb-3">
                        <div class="center ">
                            <i style="font-size: 55px" class="fa-solid fa-car"></i>
                            <p> </p>
                            <h4 style="color:lightgrey;">Tempat Parkir</h4>
                            <p>Objek Mata Air Cokro memiliki tempat parkir yang luas untuk parkir mobil maupun motor. </p>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3 wow zoomIn" data-wow-duration="1s" data-wow-delay="0.6s">
                        <div class="center">
                            <i style="font-size: 55px" class="fa-solid fa-utensils"></i>
                            <p> </p>
                            <h4 style="color:lightgrey">Food Court</h4>
                            <p>Jalan-jalan tak lengkap tanpa makanan lezat. Istirahat sejenak sembari menikmati jajanan khas klaten di food court.</p>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3 wow zoomIn" data-wow-duration="1s" data-wow-delay="0.6s">
                        <div class="center">
                            <i style="font-size: 55px" class="fa-solid fa-shirt"></i>
                            <p> </p>
                            <h4 style="color:lightgrey">Fashion</h4>
                            <p>Tersedia produk fashion, cindera mata, atau aksesoris lainnya. Berbelanja produk lokal di sini meningkatkan kesejahteraan ekonomi masyarakat lokal.</p>
                        </div>
                    </div>

                </div>

                <hr>

                <div class="row text-center" data-aos="fade-up" data-aos-duration="3000">
                    <div class="col-md-4 mb-3">
                        <div class="center">
                            <i style="font-size: 55px" class="fa-solid fa-toilet"></i>
                            <p> </p>
                            <h4 style="color:lightgrey">Toilet</h4>
                            <p>Tersedia Toilet pria dan wanita yang terjaga kebersihannya</p>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3 wow zoomIn" data-wow-duration="1s" data-wow-delay="0.6s">
                        <div class="center">
                            <i style="font-size: 55px" class="fa-solid fa-mosque"></i>
                            <p> </p>
                            <h4 style="color:lightgrey">Mushola</h4>
                            <p>Terdapat Mushola yang luas dengan fasilitas yang memadai sebagai tempat ibadah pengunjung</p>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3 wow zoomIn" data-wow-duration="1s" data-wow-delay="0.6s">
                        <div class="center">
                            <i style="font-size: 55px" class="fa-solid fa-charging-station"></i>
                            <p> </p>
                            <h4 style="color:lightgrey">Charging Station</h4>
                            <p>Obyek Wisata Mata Air Cokro menyediakan Charging Station atau stesen pengisian daya telepon di titik-titik tertentu pada Obyek Wisata Mata Air Cokro</p>
                        </div>
                    </div>
                </div>
                <hr>
                <p>&nbsp;</p>
            </div>
            <hr class="gariscontent mt-0 pt-0 mb-0">
        </section>
        <!-- Fasilitas End -->
        <!-- <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img src="<?php base_url() ?>assets/img/aboutus.jpg" alt="">
            </div>
            <div class="col-lg-6 pt-5 pb-lg-5">
                <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Learn About Us</h6>
                <h1 class="mb-4 section-title">We Provide The Best Cleaning Services</h1>
                <h5 class="text-muted font-weight-normal mb-3">Eos kasd eos dolor vero vero, lorem stet diam rebum. Ipsum amet sed vero dolor sea lorem justo est dolor eos</h5>
                <p>Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est dolor</p>
                <div class="d-flex align-items-center pt-4">
                    <a href="" class="btn btn-primary mr-5">Learn More</a>
                    <button type="button" class="btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                        <span></span>
                    </button>
                    <h5 class="font-weight-normal text-white m-0 ml-4 d-none d-sm-block">Play Video</h5>
                </div>
            </div>
        </div>
    </div> -->
        <!-- </div> -->
        <!-- About End -->


        <!-- Video Modal Start -->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Video Modal End -->

        <!-- Blog Start -->
        <div class="container-fluid pt-5">
            <div class="container pt-5" id="berita">
                <div class="row align-items-end mb-4">
                    <div class="col-lg">
                        <h1 class="mb-3 text-center" data-aos="fade-up" data-aos-duration="2000">Blog</h1>
                    </div>
                </div>
                <div class="row" data-aos="fade-left" data-aos-duration="3000">
                    <?php $id = 1;

                    foreach ($berita as $s) {

                    ?>
                        <div class="col-lg-4 col-md-6 mb-5">
                            <div class="position-relative mb-4">
                                <img class="img-fluid rounded w-100" src="<?php echo base_url('upload/berita/' . $s->gambar); ?>" alt="">
                                <div class="blog-date">
                                    <h4 class="font-weight-bold mb-n1"><?php echo date('d', strtotime($s->tanggal_publikasi)); ?></h4>
                                    <small class="text-white text-uppercase"><?php echo date('m', strtotime($s->tanggal_publikasi)); ?></small>
                                </div>
                            </div>
                            <div class="d-flex mb-2">
                                <a class="text-secondary text-uppercase font-weight-medium" href="">Admin</a>
                                <span class="text-primary px-2">|</span>
                                <a class="text-secondary text-uppercase font-weight-medium" href=""></a>
                            </div>
                            <h5 class="font-weight-medium mb-2"><?= $s->judul ?></h5>
                            <?php $string = $s->keterangan;
                            $string1 = word_limiter($string, 20); ?>
                            <p class="mb-4"><?= $string1 ?></p>
                            <a class="btn btn-sm btn-primary py-2" href="">Selengkapnya</a>
                        </div>
                    <?php $id++;
                    } ?>
                </div>
                <center>
                    <a class="btn btn-lg btn-success mb-5" href="">Lihat Semua Blog</a>
                </center>
            </div>
        </div>
        <!-- Blog End -->

        <!-- Services Start -->
        <div class="container-fluid contact-info" style="margin-bottom:-20px;" id="tiket">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <hr class="gariscontent mt-0 pt-0">
                </div>
            </div>
        </div>
        <div class="container-fluid bg-tiket py-5" data-aos="fade-up" data-aos-duration="2000">
            <div class="container py-5">
                <div class="row ml-2">
                    <div class="col-sm-8">
                        <h1 class="text-black " style="margin-left:-100px; margin-top: -30px;">Pesan Tiketmu Sekarang</h1>
                        <p class="text-black" style="margin-left:-100px;margin-top: -5px; color:black;">Untuk melakukan pemesanan tiket secara online, diharapkan para pengunjung dapat membaca <a href="" style="color:red;">Panduan Pemesanan Tiket</a> tiket dahulu. untuk tarif tiket per-orang adalah Rp. 15.000 dan untuk anak dibawah 2 tahun tidak dipungut biaya </p>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-4 pt-5 pt-sm-0 align-items-start ">
                        <a href="<?= base_url('home/pemesanan') ?>"><button type="button" class=" btn btn-warning btn-lg">Pesan Sekarang</button></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 mt-4">
                        <a href="<?= base_url('home/keHalamanKonfirmasi') ?>"><button type="button" class=" btn btn-warning btn-lg">Cek Pembayaran</button></a>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
        <hr class="gariscontent mt-0 pt-0">
    </div>
    <!-- Services End -->


    <!-- Features Start -->
    <!-- <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-7 pt-lg-5 pb-3">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Why Choose Us</h6>
                    <h1 class="mb-4 section-title">25 Years Experience In Cleaning Industry</h1>
                    <p class="mb-4">Dolores lorem lorem ipsum sit et ipsum. Sadip sea amet diam dolore sed et. Sit rebum labore sit sit ut vero no sit. Et elitr stet dolor sed sit et sed ipsum et kasd ut. Erat duo eos et erat sed diam duo</p>
                    <div class="row">
                        <div class="col-sm-4">
                            <h1 class="text-secondary mb-2" data-toggle="counter-up">225</h1>
                            <h6 class="font-weight-semi-bold mb-sm-4">Our Cleaners</h6>
                        </div>
                        <div class="col-sm-4">
                            <h1 class="text-secondary mb-2" data-toggle="counter-up">1050</h1>
                            <h6 class="font-weight-semi-bold mb-sm-4">Happy Clients</h6>
                        </div>
                        <div class="col-sm-4">
                            <h1 class="text-secondary mb-2" data-toggle="counter-up">2500</h1>
                            <h6 class="font-weight-semi-bold mb-sm-4">Projects Done</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5" style="min-height: 400px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="<?php echo base_url(); ?>template/klean/img/feature.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Features End -->








    <!-- Testimonial Start -->
    <!-- <div class="container-fluid bg-testimonial py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-7 pt-lg-5 pb-5">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Testimonial</h6>
                    <h1 class="section-title text-white mb-5">What Our Clients Say</h1>
                    <div class="owl-carousel testimonial-carousel position-relative">
                        <div class="d-flex flex-column text-white">
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid" src="<?php echo base_url(); ?>template/klean/img/testimonial-1.jpg" alt="">
                                <div class="ml-3">
                                    <h5 class="text-primary">Client Name</h5>
                                    <i>Profession</i>
                                </div>
                            </div>
                            <p>Tempor at diam tempor sed. Sanctus dolor ipsum ut nonumy amet clita sea. Sed eos sed dolores vero no. Ipsum elitr elitr stet dolor lorem erat. Diam no amet sea justo vero ut. Dolor ipsum kasd ipsum dolore.</p>
                        </div>
                        <div class="d-flex flex-column text-white">
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid" src="<?php echo base_url(); ?>template/klean/img/testimonial-2.jpg" alt="">
                                <div class="ml-3">
                                    <h5 class="text-primary">Client Name</h5>
                                    <i>Profession</i>
                                </div>
                            </div>
                            <p>Tempor at diam tempor sed. Sanctus dolor ipsum ut nonumy amet clita sea. Sed eos sed dolores vero no. Ipsum elitr elitr stet dolor lorem erat. Diam no amet sea justo vero ut. Dolor ipsum kasd ipsum dolore.</p>
                        </div>
                        <div class="d-flex flex-column text-white">
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid" src="<?php echo base_url(); ?>template/klean/img/testimonial-3.jpg" alt="">
                                <div class="ml-3">
                                    <h5 class="text-primary">Client Name</h5>
                                    <i>Profession</i>
                                </div>
                            </div>
                            <p>Tempor at diam tempor sed. Sanctus dolor ipsum ut nonumy amet clita sea. Sed eos sed dolores vero no. Ipsum elitr elitr stet dolor lorem erat. Diam no amet sea justo vero ut. Dolor ipsum kasd ipsum dolore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5" style="min-height: 400px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="<?php echo base_url(); ?>template/klean/img/testimonial.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Testimonial End-->





    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5 " id="footer" data-aos="zoom-in" data-aos-duration="2000">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="<?php echo base_url(); ?>template/klean/index.html" class="navbar-brand">
                    <h1 class="m-0 mt-n3 display-4 text-primary">OMAC</h1>
                </a>
                <p>Wisata air terbesar di Kabupaten Klaten</p>
                <h5 class="font-weight-semi-bold text-white mb-2">BUKA:</h5>
                <p class="mb-1">Senin, 08:00 – 17:00</p>
                <p class="mb-1">Selasa, 08:00 – 17:00</p>
                <p class="mb-1">Rabu, 08:00 – 17:00</p>
                <p class="mb-1">Kamis, 08:00 – 17:00</p>
                <p class="mb-1">Jumat, 08:00 – 17:00</p>
                <p class="mb-1">Sabtu, 08:00 – 17:00</p>
                <p class="mb-1">Minggu, 08:00 – 17:00</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-semi-bold text-primary mb-4">Hubungi Kami</h4>
                <p><i class="fa fa-map-marker-alt text-primary mr-2"></i>Area Sawah Ponggok Kecamatan Polanharjo Kabupaten Klaten Jawa Tengah 57474 Indonesia</p>
                <p><i class="fa fa-phone-alt text-primary mr-2"></i>081216789345</p>
                <p><i class="fa fa-envelope text-primary mr-2"></i>https://umbul-cokro.business.site/</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-light btn-social mr-2" href="https://web.facebook.com/profile.php?id=100011286637349"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-light btn-social" href="https://www.instagram.com/omac.klaten"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-semi-bold text-primary mb-4">Menu</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Beranda</a>
                    <a class="text-white mb-2" href="#about"><i class="fa fa-angle-right mr-2"></i>Tentang Kami</a>
                    <a class="text-white mb-2" href="#wahana"><i class="fa fa-angle-right mr-2"></i>Wahana</a>
                    <a class="text-white mb-2" href="#kuliner"><i class="fa fa-angle-right mr-2"></i>Kuliner</a>
                    <a class="text-white mb-2" href="#berita"><i class="fa fa-angle-right mr-2"></i>Berita</a>
                    <a class="text-white mb-2" href="#tiket"><i class="fa fa-angle-right mr-2"></i>Tiket</a>
                    <a class="text-white" href="#footer"><i class="fa fa-angle-right mr-2"></i>Kontak</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-semi-bold text-primary mb-4">Maps</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.7389363527736!2d110.64124021376692!3d-7.603363694517396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a6a7033892abb%3A0xd126adf16eafee4!2sObjek%20Wisata%20Mata%20Air%20Cokro%2C%20Klaten!5e0!3m2!1sen!2sid!4v1653086946937!5m2!1sen!2sid" width="400" height="300" style="border:3px; margin-left:-50px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: #3E3E4E !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">&copy; <a href="#">Obyek Mata Air Cokro</a> <?= date('Y'); ?></a>
                </p>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary px-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://kit.fontawesome.com/03fd47a180.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

    <script src="<?php echo base_url(); ?>template/klean/lib/easing/easing.min.js"></script>
    <script src="<?php echo base_url(); ?>template/klean/lib/waypoints/waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>template/klean/lib/counterup/counterup.min.js"></script>
    <script src="<?php echo base_url(); ?>template/klean/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>template/klean/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url(); ?>template/klean/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="<?php echo base_url(); ?>template/klean/mail/jqBootstrapValidation.min.js"></script>
    <script src="<?php echo base_url(); ?>template/klean/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="<?php echo base_url(); ?>template/klean/js/main.js"></script>
    <!-- AOS ANIMATION -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- GREENSOCK ANIMATION -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
    <script>
        gsap.from('#berita', {
            duration: 1,
            ease: "slow(0.7, 0.7, false)",
            y: -100,
            opacity: 0
        });
    </script> -->
</body>

</html>