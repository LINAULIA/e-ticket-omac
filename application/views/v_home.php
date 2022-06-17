<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<style>
    .carousel {
        width: fit-content;
        height: auto;
        margin-left: 50px;
        margin-right: 50px;
        margin-top: -5%;
        background-color: black;
    }

    .slide-show {
        background-color: aquamarine;
        margin-top: -5%;
        margin-bottom: 5px;
    }

    #wahana {
        padding: 80px 0;
    }

    #wahana img {
        background-color: darkslategray;
        padding: 5px;
        width: 100%;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
        cursor: pointer;
    }
</style>

<!--Slider-->
<!-- <section class="slide-show">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo base_url(); ?>assets/nova/images/sample/slider/omac1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url(); ?>assets/nova/images/sample/slider/omac2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url(); ?>assets/nova/images/sample/slider/omac3.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section> -->

<!--/Slider-->

<!--Wahana-->

<br>
<div class="center mb-1">
    <h3 style="font-family: 'Shadows Into Light Two', cursive; text-decoration:underline">WAHANA</h3>
</div>

<section id="wahana" class="min-vh-100">
    <div class="container">
        <div class="row">
            <?php $id = 1;

            foreach ($wahana as $s) {

            ?>
                <div class="col-sm-4 gy-4">
                    <div class="card">
                        <img src="<?php echo base_url('/upload/' . $s->gambar); ?>" class="card-img-top" alt="...">
                    </div>
                </div>
            <?php $id++;
            } ?>
        </div>
    </div>
</section>
<!--/Wahana-->
<!--About-->

<!-- About -->
<!--Fasilitas-->

<br>
<div class="center mb-1">
    <h3 style="font-family: 'Shadows Into Light Two', cursive; text-decoration:underline">FASILITAS</h3>
</div>
<section class="services">
    <div class="container">
        <div class="row justify-content-center" data-aos="fade-up" data-aos-duration="3000">
            <div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="center">
                    <i style="font-size: 55px" class="fa-solid fa-car"></i>
                    <p> </p>
                    <h4>Tempat Parkir</h4>
                    <p>Objek Mata Air Cokro memiliki tempat parkir yang luas untuk parkir mobil maupun motor. </p>
                </div>
            </div>

            <div class="col-md-4 mb-3 wow zoomIn" data-wow-duration="1s" data-wow-delay="0.6s">
                <div class="center">
                    <i style="font-size: 55px" class="fa-solid fa-utensils"></i>
                    <p> </p>
                    <h4>Food Court</h4>
                    <p>Jalan-jalan tak lengkap tanpa makanan lezat. Istirahat sejenak sembari menikmati jajanan khas klaten di food court.</p>
                </div>
            </div>

            <div class="col-md-4 mb-3 wow zoomIn" data-wow-duration="1s" data-wow-delay="0.6s">
                <div class="center">
                    <i style="font-size: 55px" class="fa-solid fa-shirt"></i>
                    <p> </p>
                    <h4>Fashion</h4>
                    <p>Tersedia produk fashion, cindera mata, atau aksesoris lainnya. Berbelanja produk lokal di sini meningkatkan kesejahteraan ekonomi masyarakat lokal.</p>
                </div>
            </div>

        </div>

        <hr>

        <div class="row justify-content-center wow zoomIn" data-aos="fade-up" data-aos-duration="3000">
            <div class="col-md-4 mb-3">
                <div class="center">
                    <i style="font-size: 55px" class="fa-solid fa-toilet"></i>
                    <p> </p>
                    <h4>Toilet</h4>
                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                </div>
            </div>

            <div class="col-md-4 mb-3 wow zoomIn" data-wow-duration="1s" data-wow-delay="0.6s">
                <div class="center">
                    <i style="font-size: 55px" class="fa-solid fa-mosque"></i>
                    <p> </p>
                    <h4>Mushola</h4>
                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                </div>
            </div>

            <div class="col-md-4 mb-3 wow zoomIn" data-wow-duration="1s" data-wow-delay="0.6s">
                <div class="center">
                    <i style="font-size: 55px" class="fa-solid fa-charging-station"></i>
                    <p> </p>
                    <h4>Charging Station</h4>
                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                </div>
            </div>
        </div>
        <hr>
        <p>&nbsp;</p>
    </div>
</section>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<!-- SL Slider -->