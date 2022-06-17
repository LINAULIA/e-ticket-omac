  <head>

      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">

      <title>
          <?= $title; ?>
      </title>

      <!-- Custom fonts for this template-->
      <link href="<?= base_url(); ?>assets/sbadmin2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

      <!-- Custom styles for this template-->
      <link href="<?= base_url(); ?>assets/sbadmin2/css/sb-admin-2.min.css" rel="stylesheet">
      <style>
          body {
              /* background-color: blueviolet; */
              max-width: 100%;
              width: 100%;
              height: auto;
              background-size: cover;
              background-image: url(<?php echo base_url("assets/img/bg/bglogin.jpg"); ?>);

              background-blend-mode: darken;
          }

          /* .trans {
            opacity: 0.98;
        } */
      </style>

  </head>

  <body>
      <div class="container">

          <!-- Outer Row -->
          <div class="row justify-content-center ">

              <div class="col-lg-7">

                  <div class="card o-hidden border-0 shadow-lg my-5 text-black" style="background-color:#66e5f1;">
                      <div class="card-body p-0">
                          <!-- Nested Row within Card Body -->
                          <div class="row">
                              <div class="col-lg">
                                  <div class="p-5">
                                      <div class="text-center">
                                          <h1 class=" text-900 mb-4" style="font-family: 'Great Vibes', cursive; color:black">Halaman Login</h1>
                                      </div>

                                      <?= $this->session->flashdata('message'); ?>

                                      <form class="user" method="post" action="<?= base_url('auth'); ?>">
                                          <div class="form-group">
                                              <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
                                              <?= form_error('email', '<small class="text-danger pl-3">', '</small>');  ?>
                                          </div>
                                          <div class="form-group">
                                              <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                              <?= form_error('password', '<small class="text-danger pl-3">', '</small>');  ?>
                                          </div>
                                          <button type="submit" class="btn btn-success btn-user btn-block" style="font-weight:bold; font-size:larger">
                                              Login
                                          </button>
                                      </form>
                                      <hr>
                                      <center>
                                          <a href="<?= base_url('home/home') ?>" class="btn btn-warning btn-md" style="font-weight:bolder; color:black">HOME</a>
                                      </center>
                                      <!-- <div class="text-center">
                                          <a class="small" href="forgot-password.html">Forgot Password?</a>
                                      </div>
                                      <div class="text-center">
                                          <a class="small" href="<?= base_url('auth/register'); ?>">Create an Account!</a>
                                      </div> -->
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

              </div>

          </div>

      </div>
  </body>