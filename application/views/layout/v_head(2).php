<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Beranda</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/nova/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/nova/css/bootstrap-responsive.min.css"> -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/nova/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/nova/css/main.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/nova/css/sl-slide.css">

    <script src="<?php echo base_url(); ?>assets/nova/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/nova/images/logo1.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets/nova/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>assets/nova/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets/nova/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/nova/images/ico/apple-touch-icon-57-precomposed.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Lobster+Two:wght@700&family=Shadows+Into+Light+Two&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <meta charset="utf-8">
    <title>Klean - Cleaning Services Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo base_url(); ?>template/klean/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>template/klean/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url(); ?>template/klean/css/style.css" rel="stylesheet">
    <style></style>


    <script src="https://kit.fontawesome.com/03fd47a180.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <style>
        .p {
            padding-top: 5px;
            padding-bottom: 5px;
        }
    </style>

    <script src="<?php echo base_url(); ?>assets/nova/js/vendor/jquery-1.9.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/nova/js/vendor/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/nova/js/main.js"></script>
    <!-- Required javascript files for Slider -->
    <script src="<?php echo base_url(); ?>assets/nova/js/jquery.ba-cond.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/nova/js/jquery.slitslider.js"></script>
    <!-- /Required javascript files for Slider -->

    <!-- SL Slider -->
    <script type="text/javascript">
        $(function() {
            var Page = (function() {

                var $navArrows = $('#nav-arrows'),
                    slitslider = $('#slider').slitslider({
                        autoplay: true
                    }),

                    init = function() {
                        initEvents();
                    },
                    initEvents = function() {
                        $navArrows.children(':last').on('click', function() {
                            slitslider.next();
                            return false;
                        });

                        $navArrows.children(':first').on('click', function() {
                            slitslider.previous();
                            return false;
                        });
                    };

                return {
                    init: init
                };

            })();

            Page.init();
        });
    </script>
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
</head>