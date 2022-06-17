<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <style type="text/css">
        img {
            padding-top: 1px;
        }

        h1 {
            color: #fff;
            font-size: 100px;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }

        hr {
            height: 10px;
            border: 0;
            box-shadow: 0 10px 10px -10px #8c8b8b inset;
            margin-top: 3px;
        }

        .carousel {
            margin-top: -10px;
            outline-style: groove;
            outline-color: black;
            outline-width: 5px;
        }

        .text {
            color: azure;
            padding-top: 5px;
        }

        .x {
            font-size: 15pt;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            text-align: justify;
            line-height: normal;
        }

        .banner {
            background-image: url(<?php echo base_url("assets/img/bg/a11fb288a729396068e75dd06cc24d60.jpg"); ?>);
            background-repeat: no-repeat;
            background-size: cover;
            text-align: center;
            padding: 20%;
            width: 100%;
            height: auto;
            margin-top: -5%;

        }
    </style>
</head>

<body>
    <section class="banner">
        <center>
            <h1>KULINER</h1>
        </center>
    </section>
    <section style="background-color:darkslategray;">
        <div class="container">
            <div class="row ">
                <div class="col-sm-3">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo base_url(); ?>assets/img/kuliner/lele.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo base_url(); ?>assets/img/kuliner/kakap.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo base_url(); ?>assets/img/kuliner/cilok.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>